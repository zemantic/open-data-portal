<x-settings>
  <div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <!-- TODO: Add notification element -->
          <h2 class="font-bold text-xl">Edit User</h2>
          <div class="control">
            <x-label for="name" :value="__('Name')"></x-label>
            <x-input id="name" class="block mt-1 w-full" placeholder="Name of the user" required autofocus>
          </div>
          <div class="control">
            <x-label for="email" :value="__('Email')"></x-label>
            <x-input id="email" class="block mt-1 w-full" disabled></x-input>
          </div>
          <div class="control">
            <x-label for="password" :value="__('Password')"></x-label>
            <x-input id="password" class="block mt-1 w-full"></x-input>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-settings>
