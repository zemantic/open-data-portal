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
          <form action="/organization/{{ $organization->id }}" method="post">
            @if ($mode == 'edit')
              @method('put')
            @endif
            @csrf
            <div class="control">
              <x-label for="name" :value="__('Name')" />
              <x-input class="block mt-1 w-full" value="{{ $organization->name }}" id="orgName"
                placeholder="Organization name" type="text" name="orgName" required autofocus>
              </x-input>
            </div>
            <div class="control mt-4">
              <x-label for="address" :value="__('Address')" />
              <x-input class="block mt-1 w-full" value="{{ $organization->address }}" id="address"
                placeholder="Address" type="text" name="address" />
              <div class="grid grid-cols-2 gap-4">
                <div class="mt-1">
                  <x-input class="block mt-2 w-full" id="city" value="{{ $organization->city }}" placeholder="City"
                    type="text" name="city" />
                  <x-input class="block mt-2 w-full" id="zip" value="{{ $organization->zip }}"
                    placeholder="Zip Code" type="text" name="zip" />
                  <x-select class="block mt-2 w-full" :options="[['value' => 1, 'valueText' => 'Sri Lanka']]"></x-select>
                </div>
                <div class="mt-1">
                  <x-input class="block mt-2 w-full" id="district" value="{{ $organization->district }}"
                    placeholder="District" type="text" name="district" />
                  <x-input class="block mt-2 w-full" id="state" value="{{ $organization->state }}"
                    placeholder="State" type="text" name="state" />
                </div>
              </div>
            </div>
            <div class="control mt-4 grid grid-cols-2 gap-4">
              <div>
                <x-label for="phoneNumber" :value="__('Phone Number')" />
                <x-input class="block mt-1 w-full" id="phoneNumber" value="{{ $organization->phoneNumber }}"
                  placeholder="Organization Contact Number" type="tel" name="phoneNumber" />
              </div>
              <div>
                <x-label for="email" :value="__('Email Address')"></x-label>
                <x-input class="block mt-1 w-full" id="email" value="{{ $organization->email }}"
                  placeholder="Organization Email Address" type="email" name="email"></x-input>
              </div>
            </div>
            <div class="mt-4">
              <x-button>
                @if ($mode == 'create')
                  {{ __('Create Organization') }}
                @endif
                @if ($mode == 'edit')
                  {{ __('Update Organization') }}
                @endif
              </x-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
