<x-layout>
  <div class="container mx-auto flex-auto flex items-center justify-center">
    <x-card class="mx-6 my-12 p-4">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Registration</h2>
        <p class="mb-4">
          Create an account to upload files
        </p>
      </header>

      <form method="POST" action="/users">
        @csrf
        <div class="mb-6">
          <label for="name" class="inline-block text-lg mb-2">
            Login
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full outline-deepPineGreen-50/50 outline-2"
            name="name" value="{{ old('name') }}" />
          @error('name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="email" class="inline-block text-lg mb-2">
            Email
          </label>
          <input type="email" class="border border-gray-200 rounded p-2 w-full outline-deepPineGreen-50/50 outline-2"
            name="email" value="{{ old('email') }}" />
          @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="password" class="inline-block text-lg mb-2">
            Password
          </label>
          <input type="password" class="border border-gray-200 rounded p-2 w-full outline-deepPineGreen-50/50 outline-2"
            name="password" />
          @error('password')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="password2" class="inline-block text-lg mb-2">
            Password again
          </label>
          <input type="password" class="border border-gray-200 rounded p-2 w-full outline-deepPineGreen-50/50 outline-2"
            name="password_confirmation" />
          @error('password_confirmation')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-6 flex justify-center">
          <button type="submit"
            class="p-2 w-2/3 rounded-xl text-lightPeach-300 bg-deepPineGreen-50 hover:bg-orange-600 font-medium">
            Sign up
          </button>
        </div>

        <div class="mt-8">
          <p>
            Already have an account?
            <a href="/login" class="text-orange-600 hover:text-orange-200">Login</a>
          </p>
        </div>
      </form>
    </x-card>
  </div>
</x-layout>
