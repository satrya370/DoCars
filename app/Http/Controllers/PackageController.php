<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use App\Models\Category;
use App\Models\Destination;
use App\Models\Photos;
use App\Models\Review;
use App\Models\Video;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\JsonLdMulti;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $description = "Welcome to My Tour Bali, your premier travel and tourism agency located in the beautiful island of Bali. We offer a wide range of services, including airport transfers, tour packages, and car rentals. Our tour packages are designed to showcase the best of what Bali has to offer, from its stunning beaches and vibrant culture to its rich history and natural beauty. Our team of professional and friendly drivers will ensure that you have a safe and comfortable journey while exploring Bali. We invite you to browse our website and learn more about the services we offer. If you have any questions or would like to book a tour, please dont hesitate to contact us.";

        SEOTools::setTitle('My Tour Bali | Travel Bali | Tour & Travel Bali');
        SEOTools::setDescription($description);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addProperty('type', 'WebPage');
        OpenGraph::addImage(asset('/img/logo-image.png'));
        SEOMeta::addKeyword([
            "Bali Tour",
            "Bali Vacation",
            "Bali Travel",
            "Bali Trip",
            "Bali Holidays",
            "Bali Adventure",
            "Bali Excursions",
            "Bali Itinerary",
            "Bali Tour Packages",
            "Bali Sightseeing",
            "Bali Activities",
            "Bali Experience",
            "Bali Destinations",
            "Bali Culture",
            "Bali Exploration",
            "Bali Activity"
        ]);

        JsonLdMulti::setTitle("My Tour Bali | Travel Bali | Tour & Travel Bali");
        JsonLdMulti::setDescription($description);
        JsonLdMulti::setType('WebPage');
        JsonLdMulti::addImage('/img/logo-image.png');

        return view(
            'web.homepage',
            [
                'photos' => Photos::inRandomOrder()->limit(8)->get(),
                'packages' => Package::where('category_id', 1)->limit(4)->get(),
                'activities' => Package::where('category_id', 2)->limit(4)->get(),
                'reviews' => Review::all(),
                'videos' => Video::all(),
            ],
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackageRequest $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        SEOTools::setTitle("$package->name | My Tour Bali");
        SEOTools::setDescription(strip_tags($package->description));
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addProperty('type', 'WebPage');
        OpenGraph::addImage(asset('storage/' . $package->image));
        JsonLdMulti::setTitle("$package->name |My Tour Bali");
        JsonLdMulti::setDescription($package->description);
        JsonLdMulti::setType('WebPage');
        JsonLdMulti::addImage(asset('storage/' . $package->image));

        if ($package->category_id == 2) {
            $destinations = Destination::where('package_id', $package->id)
                ->orderBy('day')
                ->orderBy('start_time')
                ->get();

            $byDay = $destinations->groupBy('day');
            $firstDay = $byDay->keys()->first() ?? 1;
        } else {
            $destinations = Destination::where('package_id', $package->id)
                ->orderBy('start_time')
                ->get();

            $byDay = collect();
            $firstDay = null;
        }

        // Kumpulkan slides (cover + foto-foto destinasi)
        $slides = collect();

        if (!empty($package->image_cover)) {
            $slides->push([
                'src' => asset('storage/' . $package->image_cover),
                'alt' => 'Cover ' . $package->name,
            ]);
        }

        foreach ($destinations as $destination) {
            if (!empty($destination->photo)) {
                foreach ($destination->photo as $photo) {
                    if (!empty($photo->image)) {
                        $slides->push([
                            'src' => asset('storage/' . $photo->image),
                            'alt' => $destination->name . ' - ' . $package->name,
                        ]);
                    }
                }
            }
        }

        // Opsional: hilangkan duplikat berdasarkan 'src'
        $slides = $slides->unique('src')->values();

        // You Might Also Like
        $targetCount = 8;

        // 1) Prioritaskan kategori yang sama
        $primary = Package::query()
            ->where('id', '!=', $package->id)
            ->where('category_id', $package->category_id)
            ->inRandomOrder()
            ->take($targetCount)
            ->get();

        // 2) Jika kurang dari 8, lengkapi dari kategori lain
        $remaining = $targetCount - $primary->count();

        if ($remaining > 0) {
            $fallback = \App\Models\Package::query()
                ->where('id', '!=', $package->id)
                ->where('category_id', '!=', $package->category_id)
                ->whereNotIn('id', $primary->pluck('id'))
                ->inRandomOrder()
                ->take($remaining)
                ->get();
        } else {
            $fallback = collect();
        }

        $relatedPackages = $primary->concat($fallback)->values();


        return view('web.tour.show', compact(
            'package',
            'destinations',
            'byDay',
            'firstDay',
            'slides',
            'relatedPackages'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePackageRequest  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackageRequest $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
    }
}
