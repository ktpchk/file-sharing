<x-layout>
  <div class="container mx-auto flex-auto flex items-center justify-center">
    <!-- Drop your files -->
    <div class="my-16">

      <form action="/files" method="post" class="h-full" enctype="multipart/form-data">
        @csrf
        <div
          class="w-96 h-60 mx-auto border-4 border-dashed border-deepPineGreen-50 border-opacity-50 hover:bg-lightPeach-900 hover:bg-opacity-25">

          <label class="h-full cursor-pointer flex items-center justify-around">
            <div class="flex flex-col items-center space-y-4">
              <div class="text-deepPineGreen-50 bg-inherit">
                <i class="fa-solid fa-file-arrow-up"></i>
                Выберите файл
              </div>
              <input type="file" name="file" class="hidden" id="fileLoader" />
              <div id="output" class="text-deepPineGreen-200"></div>
            </div>
          </label>

        </div>


        <div id="form" class="hidden w-96 mx-auto">
          <x-card class="mt-4 p-4 flex flex-col space-y-3">

            {{-- <div class="flex flex-col space-y-1 items-center justify-between">
              <label for="name" class="self-start">Имя файла:</label>
              <input id="name" name="name" type="text"
                class="w-full mx-auto p-2 rounded-md border-2 border-deepPineGreen-50" />
            </div> --}}

            <div class="flex flex-col space-y-1 items-center justify-between">
              <label for="comment" class="self-start">Ваш комментарий:</label>
              <textarea id="comment" name="comment" class="w-full mx-auto p-2 rounded-md border-2 border-deepPineGreen-50"
                rows="7"></textarea>
            </div>

            <div>
              <button type="submit"
                class="block w-2/3 mx-auto p-2 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600 font-medium">
                Загрузить
              </button>
            </div>

          </x-card>
        </div>
      </form>

    </div>
  </div>
</x-layout>
