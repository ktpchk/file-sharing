<form action="/files/{{ $file->id }}/comments" method="POST" class="w-full">
  @csrf
  @if ($parentId ?? false)
    <input name="parent_id" type="hidden" value="{{ $parentId }}"></input>
  @endif
  <div class="mb-2">
    <textarea name="body" class="w-full mx-auto p-2 rounded-md border-2 border-deepPineGreen-50" rows="7"></textarea>
    @error('body')
      <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-6 flex justify-start">
    <button type="submit" class="p-2 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600 font-medium">
      <i class="fa-solid fa-paper-plane"></i> Leave
    </button>
  </div>
</form>
