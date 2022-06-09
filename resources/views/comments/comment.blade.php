@if ($comment->parent_id == $parentId)

  <header class="flex items-baseline space-x-4">
    <h4 class="text-lg text-left font-bold">{{ $comment->owner->name }}</h4>
    <span class="text-deepPineGreen-50">{{ $comment->created_at }}</span>
  </header>
  <p class="text-left whitespace-pre-line">{{ $comment->body }}</p>
  <div class="flex flex-col mb-2">
    @auth
      <button class="self-start text-orange-900 mb-2"
        onclick="this.nextElementSibling.classList.toggle('hidden')">Reply</button>
      <div class="hidden">
        @include('comments.form', ['parentId' => $comment->id])
      </div>
    @endauth
  </div>
  @if ($comment->children)
    <div class="ml-6">
      @include('comments.list', ['parentId' => $comment->id])
    </div>
  @endif
@endif
