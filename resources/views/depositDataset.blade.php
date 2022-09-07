<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <h2 class="font-bold text-2xl">Desposit Your Dataset</h2>
                  <div class="grid grid-cols-2 gap-6 py-4">
                    <div class="space-y-4">
                      <div class="control">
                       <x-label for="title" :value="__('Title')" />
                       <x-input id="title" class="block mt-1 w-full" type="text" placeholder="Title of the dataset" name="title" :value="old('title')" required autofocus /> 
                      </div>
                      <div class="control">
                        <x-label for="version" :value="__('Version')" />
                        <x-input id="version" class="block mt-1 w-full" type="text" placeholder="Version of the uploading dataset" />
                      </div>
                      <div class="control">
                        <x-label for="description" :value="__('Description about the dataset')" />
                        <x-textarea id="description" class="block mt-1 w-full h-56" placeholder="A brief description about the dataset" name="description" />
                      </div>
                      <div class="control">
                        <x-label for="category" :value="__('Category')" />
                        <select name="category" class="block w-full mt-1 id="category">
                          <option value="1">Category1</option>
                          <option value="2">Category2</option>
                        </select>
                      </div>
                    </div>
                    <div class="border-4 border-gray-300 rounded-lg border-dashed flex items-center">
                      <h1 class="text-3xl text-center w-full text-gray-400 font-bold">Drag and drop your dataset files</h1>
                    </div>
                  </div>
                  <x-button class="font-bold">
                      {{ __('Upload Dataset') }}
                  </x-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>