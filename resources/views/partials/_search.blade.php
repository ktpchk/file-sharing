<form action="{{ parse_url(url()->current(), PHP_URL_PATH) }}">
  <x-card class="relative my-4">
    <label for="search" class="absolute top-4 left-3">
      <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
    </label>
    <input id="search" type="text" name="search" value="{{ $searchValue ?? '' }}"
      class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none" placeholder="Search..." />
    <div class="absolute top-2 right-2">
      <button type="submit"
        class="h-10 w-20 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600 font-medium">
        Search
      </button>
    </div>
  </x-card>
</form>
