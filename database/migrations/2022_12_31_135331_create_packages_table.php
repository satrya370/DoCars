<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->string('duration');
            $table->text('description');
            $table->integer('price')->default(350);
            $table->json('what_to_expect')->nullable();
            $table->string('whats_included');
            $table->string('whats_not_included')->nullable();
            $table->string('need_to_know')->nullable();
            $table->string('what_to_bring')->nullable();
            $table->string('image_cover');
            $table->boolean('is_top_package');
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
};
