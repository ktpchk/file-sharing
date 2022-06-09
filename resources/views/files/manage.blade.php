<x-layout>
  <div class="container mx-auto">
    <header class="text-center mt-8 mb-6">
      <h2 class="text-5xl">Manage Files</h2>
    </header>
    <div class="mx-6 flex flex-col">

      <div class="">
        <a href="/" class="my-4 p-2 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600"><i
            class="fa-solid fa-file-arrow-up"></i> Upload files</a>
      </div>

      @include('partials._search')

      <x-card class="my-2 p-6">
        <div class="flex flex-col">
          @unless(count($files) == 0)
            {{-- row --}}
            @foreach ($files as $file)
              <div class="flex flex-1 flex-basis-32 p-2 items-center justify-center border-b last:border-none w-full">
                {{-- cell --}}
                <div class="w-1/5">
                  <div class="flex flex-col justify-center items-center">
                    @if ($file->content->type ?? false == 'image')
                      <img src="{{ asset('storage/' . $file->content->path) }}" class="max-w-full max-h-20" alt="" />
                    @endif
                    <a href="/files/{{ $file->id }}"
                      class="text-center hover:text-orange-600 text-xs md:text-lg">{{ mb_strimwidth($file->name, 0, 15, '...') }}</a>
                  </div>
                </div>
                {{-- cell --}}
                <div class="w-2/5 hidden md:block ml-4">
                  <div class="flex flex-col justify-center items-start">
                    {{ $file->description }}
                  </div>
                </div>
                {{-- cell --}}
                <div class="ml-auto">
                  <div class="flex justify-end space-x-2 md:space-x-12 ">
                    <div class="">
                      <a href="/files/{{ $file->id }}/edit" class="hover:text-deepPineGreen-100 text-xs md:text-lg"><i
                          class="fa-solid fa-pencil"></i>
                        Edit</a>
                    </div>
                    <form action="/files/{{ $file->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="font-medium text-orange-400 hover:text-orange-200 text-xs md:text-lg">
                        <i class="fa-solid fa-trash-can"></i> Delete
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            @endforeach
          @else
            @if ($searchValue)
              <div class="">There are no files like "{{ $searchValue }}"</div>
            @else
              <div class="">There are no files</div>
            @endif
          @endunless
        </div>
      </x-card>
    </div>
  </div>
</x-layout>
