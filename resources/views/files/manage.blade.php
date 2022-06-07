<x-layout>
  <div class="container mx-auto">
    <header class="text-center mt-8 mb-6">
      <h2 class="text-5xl">Мои файлы</h2>
    </header>
    <x-card class="m-6 p-6">
      <div class="flex flex-col">
        {{-- row --}}
        @foreach ($files as $file)
          <div class="flex items-center justify-center border-b last:border-none w-full h-32">
            {{-- cell --}}
            <div class="w-1/5">
              <div class="flex flex-col justify-center items-center">
                <img src="{{ asset('storage/' . $file->imagePath) }}" class="max-w-full max-h-20" alt="123" />
                <a href="/files/{{ $file->id }}" class="text-center hover:text-orange-600">no-img.png</a>
              </div>
            </div>
            {{-- cell --}}
            <div class="ml-auto">
              <div class="flex justify-end space-x-16 mr-16">
                <div class="">
                  <a href="index.html" class="hover:text-deepPineGreen-100"><i class="fa-solid fa-pencil"></i>
                    Редактировать</a>
                </div>
                <div class="">
                  <a href="index.html" class="text-orange-400 hover:text-orange-200">
                    <i class="fa-solid fa-trash-can"></i> Удалить
                  </a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </x-card>
  </div>
</x-layout>
