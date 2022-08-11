<x-layout>
  <div class="container mx-auto">
    <div class="mx-2">
      <h2 class="text-4xl text-center m-4 py-6">
        Latest uploaded files
      </h2>
      @include('partials._search')

      <x-card class="p-2 flex">
        <div class="w-1/3 sm:w-1/4 md:w-1/5 flex items-center justify-center">
          Name
        </div>
        <div class="w-1/3 sm:w-1/4 md:w-1/5 flex items-center justify-center">
          Size
        </div>
        <div class="w-1/3 sm:w-1/4 md:w-1/5 hidden items-center justify-center sm:flex">
          Uploaded at
        </div>
        <div class="w-1/3 sm:w-1/4 md:w-1/5 hidden items-center justify-center md:flex">
          Description
        </div>
        <div class="w-1/3 sm:w-1/4 md:w-1/5 flex items-center justify-center">
          Download
        </div>
      </x-card>

      <div class="my-4 flex flex-col space-y-1">
        @unless(count($files) == 0)
          @foreach ($files as $file)
            <x-card class="p-4 flex">
              <div class="w-1/3 sm:w-1/4 md:w-1/5 flex items-center justify-center">
                <div class="flex-auto flex flex-col items-center">
                  @if ($file->content->type ?? false == 'image')
                    <img src="{{ asset('storage/' . $file->content->path) }}" class="max-w-full max-h-20" alt="" />
                  @endif
                  <a href="/files/{{ $file->id }}"
                    class="block text-center hover:text-orange-600">{{ mb_strimwidth($file->name, 0, 15, '...') }}</a>
                </div>
              </div>
              <div class="w-1/3 sm:w-1/4 md:w-1/5 flex items-center justify-center">
                @if ($file->size <= 1024)
                  {{ $file->size }} bytes
                @elseif($file->size <= 1024 * 1024)
                  {{ round($file->size / 1024, 2) }} Kb
                @else
                  {{ round($file->size / 1024 / 1024, 2) }} Mb
                @endif
              </div>
              <div class="w-1/3 sm:w-1/4 md:w-1/5 hidden items-center justify-center sm:flex">
                {{ $file->created_at->toDateString() }}
              </div>
              <div class="w-1/3 sm:w-1/4 md:w-1/5 hidden items-center justify-center md:flex">
                {{ $file->description }}
              </div>
              <div class="w-1/3 sm:w-1/4 md:w-1/5 text-center flex justify-center items-center">
                <!-- button -->
                <a href="/files/{{ $file->id }}/download"
                  class="my-4 p-2 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600">
                  <i class="fa-solid fa-file-arrow-down"></i> Download
                </a>
              </div>
            </x-card>
          @endforeach
        @else
          <x-card class="p-4">
            @if ($searchValue)
              <div class="">There are no files like "{{ $searchValue }}"</div>
            @else
              <div class="">There are no files</div>
            @endif
          </x-card>
        @endunless

      </div>
    </div>

  </div>

</x-layout>
