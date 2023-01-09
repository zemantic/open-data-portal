<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Category Manager') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <form action="/category" method="post" class="space-y-4">
            @csrf
            <div>
              <x-label for="cateogry" :value="__('Category name')" />
              <x-input id="category" class="block mt-1 w-full" type="text" name="category" required
                placeholder="New category name" />
            </div>
            <div>
              <x-label for="parent" :value="__('Parent category name')" />
              <x-select class="w-full" :options="$categories" name="parent" />
            </div>
            <x-button>
              {{ __('Create Category') }}
            </x-button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
