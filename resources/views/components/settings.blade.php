<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center">
      <h2 class="font-semibold flex-grow text-xl text-gray-800 leading-tight">
        {{ __('Settings') }}
      </h2>
    </div>
  </x-slot>

  <div class="max-w-7xl mx-auto mt-4">
    <div class="grid grid-cols-4 gap-6">
      <div class="bg-white border">
        SIDEBAR
      </div>
      <div class="col-span-3 bg-white rounded-lg">
        {{ $slot }}
      </div>
    </div>
  </div>
</x-app-layout>
