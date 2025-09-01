<x-app-layout>
<h1 class="text-black text-3xl font-medium text-center my-5">Add Package</h1>
  <div class="container mx-auto w-2/3 bg-slate-200 p-5 rounded-md">
    <form action="/package" method="post" enctype="multipart/form-data">
      @csrf
      <div class="max-w-36">
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-2 pl-1 py-2 w-full" type="name" name="name" :value="old('name')" required autofocus autocomplete="off" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
      </div>
      <div class="flex items-center mt-3">
        <input 
            id="is_top_package"
            type="checkbox"
            name="is_top_package"
            value="1"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded 
                  focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 
                  dark:bg-gray-700 dark:border-gray-600"
            {{ old('is_top_package', $package->is_top_package ?? false) ? 'checked' : '' }}
        >
        <label for="is_top_package" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
            Top Package
        </label>
      </div>
      <div class="max-w-36 mt-3">
        <x-input-label for="category_id" :value="__('Category')" />
        <div class="flex">
          @foreach ($categories as $category)
          <div class="form-check form-check-inline mr-3">
            <input id="{{ $category->id }}" class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="category_id" id="category_id_{{ $category->id }}" value="{{ $category->id }}">
            <label class="form-check-label inline-block text-black" for="{{ $category->id }}">{{ $category->name }}</label>
          </div>
          @endforeach
        </div>
        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
      </div>
      <div class="max-w-36 mt-3">
        <div class="w-1/2 ">
          <img class="img-preview-cover object-cover">
        </div>
        <x-input-label for="image_cover" :value="__('Image Cover (1080 x 1920)')" />
        <div class="w-full bg-white p-1 rounded">
          <input type="file" name="image_cover" id="image_cover" onchange="imagePreviewCover();">
          <x-input-error :messages="$errors->get('image_cover')" class="mt-2" />
        </div>
      </div>
      <x-input-label for="Description" :value="__('Overview')" class="mt-3" />
      <div class="max-w-36 bg-white trix-content rounded">
        <textarea name="description" id="" class="w-full border-0 rounded-lg" rows="4">{{ old('description') }}</textarea>
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
      </div>
      <div class="max-w-36 mt-3 flex gap-x-5">
        <div class="w-1/2">
          <x-input-label for="duration" :value="__('Duration (e.g., 10 hours, 2 days)')" />
          <x-text-input id="duration" class="block mt-2 pl-1 py-2 w-full" type="duration" name="duration" :value="old('duration')" required autofocus autocomplete="off" />
          <x-input-error :messages="$errors->get('duration')" class="mt-2" />
        </div>
        <div class="w-1/2">
          <x-input-label for="price" :value="__('Price (e.g., 350, 800)')" />
          <x-text-input id="price" class="block mt-2 pl-1 py-2 w-full" type="number" name="price" :value="old('price')" required autofocus autocomplete="off" placeholder="350" />
          <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>
      </div>
      <div class="max-w-36 mt-3">
        <label for="tags-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
          What to Expect (optional)
        </label>
        <input
          type="text"
          id="tags-input"
          placeholder="Ketik lalu Enter…"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          autocomplete="off"
        />

        <div id="tags-container" class="mt-2 flex flex-wrap gap-2 bg-white rounded"></div>

        <!-- Hidden inputs untuk dikirim ke server -->
        <div id="what_to_expect_fields" name="what_to_expect"></div>

        @error('what_to_expect')
          <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
        @enderror
      </div>
      <x-input-label for="whats_included" :value="__('Whats Included')" class="mt-3" />
      <div class="max-w-36 bg-white trix-content rounded">
        <textarea name="whats_included" id="" class="w-full border-0 rounded-lg" rows="2">{{ old('whats_included') }}</textarea>
        <x-input-error :messages="$errors->get('whats_included')" class="mt-2" />
      </div>
      <x-input-label for="whats_not_included" :value="__('Whats not Included (optional)')" class="mt-3" />
      <div class="max-w-36 bg-white trix-content rounded">
        <textarea name="whats_not_included" id="" class="w-full border-0 rounded-lg" rows="2">{{ old('whats_not_included') }}</textarea>
        <x-input-error :messages="$errors->get('whats_not_included')" class="mt-2" />
      </div>
      {{-- <x-input-label for="need_to_know" :value="__('Need to Know (optional)')" class="mt-3" />
      <div class="max-w-36 bg-white trix-content rounded">
        <textarea name="need_to_know" id="" class="w-full border-0 rounded-lg" rows="2">{{ old('need_to_know') }}</textarea>
        <x-input-error :messages="$errors->get('need_to_know')" class="mt-2" />
      </div> --}}
      <x-input-label for="what_to_bring" :value="__('What to Bring (optional)')" class="mt-3" />
      <div class="max-w-36 bg-white trix-content rounded">
        <textarea name="what_to_bring" id="" class="w-full border-0 rounded-lg" rows="2">{{ old('what_to_bring') }}</textarea>
        <x-input-error :messages="$errors->get('what_to_bring')" class="mt-2" />
      </div>
      <div class="max-w-36 mt-3 text-center">
        <button type="submit" class="button">Next</button>
      </div>
    </form>

  </div>

@push('scripts')
<script>
  const inputEl   = document.getElementById('tags-input');
  const contEl    = document.getElementById('tags-container');
  const hiddenEl  = document.getElementById('what_to_expect_fields');

  // Tag awal dari old() atau edit
  const initialTags = @json(old('what_to_expect', isset($package) ? ($package->what_to_expect ?? []) : []));
  let tags = Array.isArray(initialTags) ? initialTags : [];

  const norm = s => s.trim().toLowerCase();

  function renderHiddenFields() {
    hiddenEl.innerHTML = '';
    tags.forEach(t => {
      const h = document.createElement('input');
      h.type = 'hidden';
      h.name = 'what_to_expect[]';
      h.value = t;
      hiddenEl.appendChild(h);
    });
  }

  function renderTags() {
    contEl.innerHTML = '';
    tags.forEach(t => {
      const chip = document.createElement('span');
      chip.className = 'inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 text-blue-800 text-sm my-2 ml-1';
      chip.dataset.tag = t;
      chip.innerHTML = `
        <span>${t}</span>
        <button type="button" class="tag-close text-blue-600 hover:text-blue-800" data-tag="${t}">×</button>
      `;
      contEl.appendChild(chip);
    });
    renderHiddenFields();
  }

  function addTag(text) {
    const clean = text.trim();
    if (!clean) return;
    const exists = tags.some(t => norm(t) === norm(clean));
    if (!exists) {
      tags.push(clean);
      renderTags();
    }
  }

  function removeTag(text) {
    tags = tags.filter(t => norm(t) !== norm(text));
    renderTags();
  }

  // Event: tekan Enter atau koma
  inputEl.addEventListener('keydown', (e) => {
    if ((e.key === 'Enter' || e.key === ',') && inputEl.value.trim()) {
      e.preventDefault();
      addTag(inputEl.value.replace(',', ''));
      inputEl.value = '';
    }
    if (e.key === 'Backspace' && !inputEl.value && tags.length) {
      removeTag(tags[tags.length - 1]);
    }
  });

  // Event: klik tombol ×
  contEl.addEventListener('click', (e) => {
    if (e.target.classList.contains('tag-close')) {
      removeTag(e.target.dataset.tag);
    }
  });

  // Render pertama (misal saat edit form)
  renderTags();
</script>
@endpush
</x-app-layout>