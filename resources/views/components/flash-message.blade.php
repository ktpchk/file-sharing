@if (session()->has('message'))
  <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 1500)" x-show="show"
    class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-orange-500 rounded-b-md text-white px-48 py-3 z-20">
    <p>
      {{ session('message') }}
    </p>
  </div>
@endif
