<x-layout>
  <div class="container mx-auto">
    <div class="mx-6">
      <a href="{{ url()->previous() }}" class="inline-block ml-4 mt-4 hover:text-deepPineGreen-100 text-2xl"><i
          class="fa-solid fa-arrow-left"></i> Back
      </a>
      <x-card class="my-4 p-8">
        <div class="flex flex-col items-center justify-center text-center">
          <!-- Header -->
          <h2 class="text-2xl md:text-4xl w-10/12 truncate text-center m-4 py-6">
            {{ $file->name }}
          </h2>
          <!-- Image -->
          <div class="mb-6 max-w-3xl">
            @if ($file->content)
              @if ($file->content->type == 'audio')
                <audio controls class=" w-60">
                  <source src="{{ asset('storage/' . $file->content->path) }}" type="audio/mpeg">
                </audio>
              @elseif($file->content->type == 'image')
                <img src="{{ asset('storage/' . $file->content->path) }}"
                  class="max-w-full p-6 border-2 border-deepPineGreen-400/10" alt="" />
              @elseif($file->content->type == 'video')
                <video src="{{ asset('storage/' . $file->content->path) }}" controls class="w-xs"></video>
              @endif
            @endif
          </div>
          <!-- Information -->
          <ul class="flex flex-col mb-4 w-full text-xs md:text-2xl">
            <li class="flex space-x-5 border-b border-lightPeach-900">
              <div class="">Name:</div>
              <h3 class=" text-deepPineGreen-50 mb-2 truncate">
                {{ $file->name }}
              </h3>
            </li>
            <li class="flex space-x-5 border-b border-lightPeach-900">
              <div class="">Extension:</div>
              <div class=" font-bold text-orange-900 mb-2 truncate">
                {{ preg_replace('/[\\w\\W]*\\./', '', $file->name) }}
              </div>
            </li>
            <li class="flex items-baseline space-x-5 border-b border-lightPeach-900">
              <div class="">Size:</div>
              <div class=" font-bold text-orange-900 mb-2">
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
              <div class="">Uploaded at:</div>
              <div class=" font-bold text-orange-900 mb-2">
                {{ $file->created_at->toDateString() }}
              </div>
            </li>
          </ul>
          <!-- Comment -->
          @if ($file->description)
            <div class="w-5/6 md:w-1/2 mx-auto mb-6 px-10 py-4 rounded-md border border-lightPeach-900">
              <h3 class="text-2xl mb">Description</h3>
              <p class="text-left text-lg text-deepPineGreen-50">
                {{ $file->description }}
              </p>
            </div>
          @endif

          <!-- Download -->

          <div class="self-stretch w-1/3 mx-auto">
            <a href="/files/{{ $file->id }}/download"
              class="block p-2 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600">
              <i class="fa-solid fa-file-arrow-down"></i> Download
            </a>
          </div>
        </div>
      </x-card>

      <x-card class="my-4">
        <div class="flex flex-col items-center justify-center">
          <h2 class="text-4xl my-4">
            Comment section
          </h2>
          <div class="px-6 mb-6 w-full">
            @unless(count($file->comments) == 0)
              @include('comments.list', ['comments' => $file->comments, 'parentId' => null])
            @else
              There are no comments yet
            @endunless

          </div>
          @auth
            <div class="p-6 w-full">
              <h3 class="text-left text-3xl mb-2 text-orange-900">
                Leave a comment</h3>
              @include('comments.form')
            </div>
          @endauth
        </div>
      </x-card>
    </div>
  </div>
</x-layout>
