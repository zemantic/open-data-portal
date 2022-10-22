<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Organization') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <form action="/organization" method="post">
            @csrf
            <div class="control">
              <x-label for="name" :value="__('Name')" />
              <x-input class="block mt-1 w-full" id="name" placeholder="Organization name" type="text"
                name="name" required autofocus>
              </x-input>
            </div>
            <div class="control mt-4">
              <x-label for="addressLine1" :value="__('Address')" />
              <div class="grid grid-cols-2 gap-4">
                <div class="space-y-2">
                  <x-input class="block mt-1 w-full" id="addressLine1" placeholder="Line 1" type="text"
                    name="addressLine1" />
                  <x-input class="block mt-1 w-full" id="city" placeholder="City" type="text" name="city" />
                  <x-input class="block mt-1 w-full" id="zip" placeholder="Zip Code" type="text"
                    name="zip" />
                  <x-select class="block mt-1 w-full" :options="[['value' => 1, 'valueText' => 'Sri Lanka']]"></x-select>
                </div>
                <div class="space-y-2">
                  <x-input class="block mt-1 w-full" id="addressLine2" placeholder="Line 2" type="text"
                    name="addressLine2" />
                  <x-input class="block mt-1 w-full" id="district" placeholder="District" type="text"
                    name="district" />
                  <x-input class="block mt-1 w-full" id="state" placeholder="State" type="text" name="state" />
                </div>
              </div>
            </div>
            <div class="control mt-4 grid grid-cols-2 gap-4">
              <div>
                <x-label for="phone" :value="__('Phone Number')" />
                <x-input class="block mt-1 w-full" id="phone" placeholder="Organization Contact Number"
                  type="tel" name="phone" />
              </div>
              <div>
                <x-label for="email" :value="__('Email Address')"></x-label>
                <x-input class="block mt-1 w-full" id="email" placeholder="Organization Email Address"
                  type="email" name="email"></x-input>
              </div>
            </div>
            <div class="mt-4">
              <x-button>
                {{ __('Create Organization') }}
              </x-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
