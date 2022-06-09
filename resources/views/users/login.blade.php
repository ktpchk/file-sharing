<x-layout>
  <div class="container mx-auto flex-auto flex items-center justify-center">
    <x-card class="mx-6 my-12 p-4">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Login</h2>
      </header>

      <form method="POST" action="/users/authenticate">
        @csrf
        <div class="mb-6">
          <label for="email" class="inline-block text-lg mb-2">Email</label>
          <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" />
          @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="password" class="inline-block text-lg mb-2">
            Password
          </label>
          <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />
          @error('password')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-6 flex justify-center">
          <button type="submit"
            class="p-2 w-2/3 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600 font-medium">
            Sign in
          </button>
        </div>

        <div class="mt-8">
          <p>
            Don't have an account?
            <a href="/register" class="text-orange-600 hover:text-orange-200">Register</a>
          </p>
        </div>
      </form>
    </x-card>
  </div>
</x-layout>
