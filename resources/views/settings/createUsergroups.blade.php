<x-app-layout>
  @if ($mode == 'create')
    @section('title', 'Create new user group')
  @endif
  @if ($mode == 'edit')
    @section('title', 'Editing usergroup', $usergroup->name)
  @endif
  <x-slot name="header">
    <div class="flex items-center">
      <h2 class="font-semibold flex-grow text-xl text-gray-800 leading-tight">
        {{ __('Manage User Groups') }}
      </h2>
      <x-button>
        {{ __('New User Group') }}
      </x-button>
    </div>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <!-- TODO: Add notification element -->
          <h2 class="font-bold text-xl">Usergroups</h2>
          <form action="/usergroups/{{ $usergroup->id ?? '' }}" method="post">
            @if ($mode == 'edit')
              @method('put')
            @endif
            @csrf
            <div class="control block mt-4">
              <x-label for="usergroupName" :value="__('User group name')"></x-label>
              <x-input placeholder="A qunique user group name" id="udrthtoupName" class="block mt-1 w-full"
                type="text" name="usergroupName" required autofocus />
            </div>
            <div class="control block mt-4">
              <x-label for="userroles" :value="__('User roles')"></x-label>

            </div>
            <div class="control block mt-4">
              <x-label for="users" :value="__('Select users')"></x-label>
            </div>
            <div class="mt-4">
              <x-button>
                @if ($mode == 'create')
                  {{ __('Create User Group') }}
                @endif
                @if ($mode == 'edit')
                  {{ __('Update User Group') }}
                @endif
              </x-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
