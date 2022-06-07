<x-layout>
  <div class="container mx-auto">
    <header class="text-center mt-8 mb-6">
      <h2 class="text-5xl">Мои файлы</h2>
    </header>
    <div class="mx-6">
      @include('partials._search')

      <x-card class="my-6 p-6">
        <div class="flex flex-col">
          @unless(count($files) == 0)
            {{-- row --}}
            @foreach ($files as $file)
              <div class="flex flex-1 flex-basis-32 p-2 items-center justify-center border-b last:border-none w-full">
                {{-- cell --}}
                <div class="w-1/5">
                  <div class="flex flex-col justify-center items-center">
                    <img src="{{ asset('storage/' . $file->imagePath) }}" class="max-w-full max-h-20" alt="123" />
                    <a href="/files/{{ $file->id }}" class="text-center hover:text-orange-600">{{ $file->name }}</a>
                  </div>
                </div>
                {{-- cell --}}
                <div class="w-2/5 hidden md:block ml-4">
                  <div class="flex flex-col justify-center items-start">
                    {{ $file->comment }}
                  </div>
                </div>
                {{-- cell --}}
                <div class="ml-auto">
                  <div class="flex justify-end space-x-12 ">
                    <div class="">
                      <a href="/files/{{ $file->id }}/edit" class="hover:text-deepPineGreen-100"><i
                          class="fa-solid fa-pencil"></i>
                        Редактировать</a>
                    </div>
                    <form action="/files/{{ $file->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="font-medium text-orange-400 hover:text-orange-200">
                        <i class="fa-solid fa-trash-can"></i> Удалить
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            @endforeach
          @else
            @if ($searchValue)
              <div class="">Файлы по запросу "{{ $searchValue }}" не найдены.</div>
            @else
              <div class="">Файлы не найдены.</div>
            @endif
          @endunless
        </div>
      </x-card>
    </div>
  </div>
</x-layout>
