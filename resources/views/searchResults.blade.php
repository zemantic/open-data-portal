<x-guest-layout>
  @include('components.publicNavigation')
  <div class="container max-w-7xl mx-auto">
    <div class="w-1/4">
      {{ $datasets }}
    </div>
    <div class="w-3/4 space-y-5 mt-4">
      @foreach ($datasets as $dataset)
        <div
          class="rounded-md shadow grid grid-cols-12 border gap-4 p-6 border-l-transparent border-l-4 hover:border-l-blue-700 transition-all delay-300 transform">
          <div class="col-span-8">
            <h1 class="font-bold text-lg mb-2 hover:text-blue-800 transition-all duration-200 transform">
              <a href="/datasets/{{ $dataset->uuid }}">
                {{ $dataset->title }}
              </a>
            </h1>
            <p class="text-slate-700 text-justify">
              {{ $dataset->description }}
            </p>
            <p></p>
          </div>
          <div class="col-span-4 p-6 flex flex-col justify-evenly">
            <div class="space-y-4">
              <span class="text-sm font-semibold text-slate-700">{{ count($dataset->files) }} File[s]</span>
              @foreach ($dataset->files as $file)
                @if ($file->filetype === 'text/csv')
                  <span class="px-2 py-1 font-bold text-white text-sm bg-green-600">CSV</span>
                @endif
              @endforeach
            </div>
            <div>
              <span class="text-sm block text-ellipsis">Published By Ministy of
                Health</span>
              <span class="text-sm text-slate-600">{{ $dataset->created_at }}</span>
            </div>
          </div>
          <div class="col-span-2"></div>
        </div>
      @endforeach
    </div>
  </div>
  @include('components.footer')
</x-guest-layout>
