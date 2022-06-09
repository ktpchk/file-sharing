<x-layout>
  <div class="container mx-auto flex-auto flex items-center justify-center">
    <!-- Drop your files -->
    <div class="">

      <form action="/files" method="post" class="h-full" enctype="multipart/form-data">
        @csrf
        <div id="dropArea"
          class="w-80 h-48 mx-auto border-4 border-dashed border-deepPineGreen-50 border-opacity-50 hover:bg-lightPeach-900 hover:bg-opacity-25">

          <label class="h-full cursor-pointer flex items-center justify-around">
            <div class="flex flex-col items-center w-full space-y-4">
              <div class="text-deepPineGreen-50 bg-inherit">
                <i class="fa-solid fa-file-arrow-up"></i>
                Select file...
              </div>
              <input type="file" name="file" class="hidden" id="fileLoader" />
              <div id="output" class="w-10/12 text-deepPineGreen-200 text-center truncate"></div>
            </div>
          </label>

        </div>


        <div id="form" class="hidden w-80 mx-auto">
          <x-card class="mt-4 p-4 flex flex-col space-y-3">

            <div class="flex flex-col space-y-1 items-center justify-between">
              <label for="description" class="self-start">Your comment:</label>
              <textarea id="description" name="description" class="w-full mx-auto p-2 rounded-md border-2 border-deepPineGreen-50"
                rows="7"></textarea>
            </div>

            <div>
              <button type="submit"
                class="block w-2/3 mx-auto p-2 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600 font-medium">
                Upload
              </button>
            </div>

          </x-card>
        </div>

        @error('file')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        @error('description')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </form>

    </div>
  </div>
</x-layout>
