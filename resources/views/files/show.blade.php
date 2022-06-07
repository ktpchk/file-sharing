<x-layout>
  <div class="container mx-auto">
    <a href="{{ url()->previous() }}" class="inline-block ml-4 mt-4 hover:text-deepPineGreen-100 text-2xl"><i
        class="fa-solid fa-arrow-left"></i> Назад
    </a>
    <x-card class="my-4 p-8">
      <div class="flex flex-col items-center justify-center text-center">
        <!-- Header -->
        <h2 class="text-6xl mb-12">
          {{ $file->name }}
        </h2>
        <!-- Image -->
        <div class="mb-6 max-w-3xl">
          @if ($file->content)
            @if ($file->content->type == 'audio')
              <audio controls>
                <source src="{{ asset('storage/' . $file->content->path) }}" type="audio/mpeg">
              </audio>
            @elseif($file->content->type == 'image')
              <img src="{{ asset('storage/' . $file->content->path) }}"
                class="max-w-full p-6 border-2 border-deepPineGreen-400/10" alt="" />
            @elseif($file->content->type == 'video')
              <video src="{{ asset('storage/' . $file->content->path) }}" controls class="max-w-sm"></video>
            @endif
          @endif
        </div>
        <!-- Information -->
        <ul class="flex flex-col mb-4">
          <li class="flex space-x-5 border-b border-lightPeach-900">
            <div class="text-2xl">Имя файла:</div>
            <h3 class="text-2xl text-deepPineGreen-50 mb-2">
              {{ $file->name }}
            </h3>
          </li>
          <li class="flex items-baseline space-x-5 border-b border-lightPeach-900">
            <div class="text-2xl">Размер файла:</div>
            <div class="text-xl font-bold text-orange-900 mb-2">
              @if ($file->size <= 1024)
                {{ $file->size }} bytes
              @elseif($file->size <= 1024 * 1024)
                {{ round($file->size / 1024, 2) }} Kb
              @else
                {{ round($file->size / 1024 / 1024, 2) }} Mb
              @endif
            </div>
          </li>
          <li class="flex items-baseline space-x-5 border-b border-lightPeach-900">
            <div class="text-2xl">Дата загрузки:</div>
            <div class="text-xl font-bold text-orange-900 mb-2">
              {{ $file->created_at->toDateString() }}
            </div>
          </li>
        </ul>
        <!-- Comment -->
        @if ($file->comment)
          <div class="w-1/2 mx-auto mb-6 px-10 py-4 rounded-md border border-lightPeach-900">
            <h3 class="text-2xl mb">Описание</h3>
            <p class="text-left text-lg text-deepPineGreen-50">
              {{ $file->comment }}
            </p>
          </div>
        @endif

        <!-- Download -->

        <div class="self-stretch w-1/3 mx-auto">
          <a href="/files/{{ $file->id }}/download"
            class="block p-2 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600">
            <i class="fa-solid fa-file-arrow-down"></i> Скачать
          </a>
        </div>
      </div>
    </x-card>
  </div>
</x-layout>
