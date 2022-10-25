<x-app-layout>
  @if ($mode == 'create')
    @section('title', 'Create new organization')
  @endif
  @if ($mode == 'edit')
    @section('title', 'Editing organization ' . $organization->name)
  @endif
  @if ($mode == 'create')
    @section('title', 'Create new organization')
  @endif
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Organization') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @if (Session::has('message'))
            <x-notification type="success" message="{{ Session::get('message') }}">
            </x-notification>
          @endif
          @if ($errors->any())
            <x-notification type="error">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </x-notification>
          @endif
          <form action="/organization/{{ $organization->id ?? '' }}" method="post">
            @if ($mode == 'edit')
              @method('put')
            @endif
            @csrf
            <div class="control">
              <x-label for="name" :value="__('Name')" />
              <x-input class="block mt-1 w-full" value="{{ $organization->name ?? '' }}" id="orgName"
                placeholder="Organization name" type="text" name="orgName" required autofocus>
              </x-input>
            </div>
            <div class="control mt-4">
              <x-label for="address" :value="__('Address')" />
              <x-input class="block mt-1 w-full" value="{{ $organization->address ?? '' }}" id="address"
                placeholder="Address" type="text" name="address" />
              <div class="grid grid-cols-2 gap-4">
                <div class="mt-2">
                  <x-label class="block mt-2" for="city" :value="__('City')"></x-label>
                  <x-input class="block mt-1 w-full" id="city" value="{{ $organization->city ?? '' }}"
                    placeholder="City" type="text" name="city" />
                  <x-label class="block mt-2" for="zip" :value="__('Zip Code | Postal Code')"></x-label>
                  <x-input class="block mt-1 w-full" id="zip" value="{{ $organization->zip ?? '' }}"
                    placeholder="Zip Code" type="text" name="zip" />
                  <x-label class="block mt-2" for="country" :value="__('Country')"></x-label>
                  <x-select class="block mt-1 w-full" :options="[['value' => 1, 'valueText' => 'Sri Lanka']]" id="country" name="country"></x-select>
                </div>
                <div class="mt-2">
                  <x-label class="block mt-2" for="district" :value="__('District')"></x-label>
                  <x-input class="block mt-1 w-full" id="district" value="{{ $organization->district ?? '' }}"
                    placeholder="District" type="text" name="district" />
                  <x-label class="block mt-2" for="state" :value="__('State')"></x-label>
                  <x-input class="block mt-1 w-full" id="state" value="{{ $organization->state ?? '' }}"
                    placeholder="State" type="text" name="state" />
                </div>
              </div>
            </div>
            <div class="control mt-4 grid grid-cols-2 gap-4">
              <div>
                <x-label for="phoneNumber" :value="__('Phone Number')" />
                <x-input class="block mt-1 w-full" id="phoneNumber" value="{{ $organization->phoneNumber ?? '' }}"
                  placeholder="Organization Contact Number" type="tel" name="phoneNumber" />
              </div>
              <div>
                <x-label for="email" :value="__('Email Address')"></x-label>
                <x-input class="block mt-1 w-full" id="email" value="{{ $organization->email ?? '' }}"
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
