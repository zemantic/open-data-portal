<x-frontend-layout>
  <div class="bg-blue-900 py-8 px-4 md:px-0">
    <div class="container max-w-7xl mx-auto">
      <h1 class="text-3xl text-white">Offical Open Data Portal for The Ministry of Health Sri Lanka</h1>
      <div class="mt-4 gap-4 font-bold text-white">
        <ul class="md:flex items-center text-base text-white md:pt-0">
          <li><a class="inline-block no-underline font-bold px-4 lg:-ml-2" href="#">Home</a></li>
          <li><a class="inline-block no-underline font-bold px-4 lg:-ml-2" href="#">Datasets</a>
          </li>
          <li><a class="inline-block no-underline font-bold px-4 lg:-ml-2" href="#">Documentation</a></li>
          <li><a class="inline-block no-underline font-bold px-4 lg:-ml-2" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="bg-gray-200 py-8">
    <div class="container max-w-7xl mx-auto">
      <div class="bg-white p-8">
        <form action="/search" class="flex" method="post" enctype="application/x-www-form-urlencoded">
          @csrf
          <input type="text" class="border-2 block w-full border-blue-800 px-3 py-2 h-12" placeholder="Search"
            name="keyword" />
          <button class="p-3 bg-blue-800 hover:bg-blue-900 h-12 w-12 fill-white flex items-center">
            <svg height="36" viewBox="0 0 48 48" width="36" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M31 28h-1.59l-.55-.55c1.96-2.27 3.14-5.22 3.14-8.45 0-7.18-5.82-13-13-13s-13 5.82-13 13 5.82 13 13 13c3.23 0 6.18-1.18 8.45-3.13l.55.55v1.58l10 9.98 2.98-2.98-9.98-10zm-12 0c-4.97 0-9-4.03-9-9s4.03-9 9-9 9 4.03 9 9-4.03 9-9 9z" />
              <path d="M0 0h48v48h-48z" fill="none" />
            </svg>
          </button>
        </form>
      </div>
    </div>
  </div>

  <div class="bg-white py-8" x-data="searchView()">
    <div class="max-w-7xl text-center mx-auto grid grid-cols-3 gap-4 bg-slate-100 p-12">
      <div>
        <h1 class="text-4xl font-bold">{{ $dataset_count }}</h1>
        <h2 class="text-xl">Datasets</h2>
      </div>
      <div>
        <h1 class="text-4xl font-bold">{{ $category_count }}</h1>
        <h2 class="text-xl">Categories</h2>
      </div>
      <div>
        <h1 class="text-4xl font-bold">{{ $download_count }}</h1>
        <h2 class="text-xl">Downloads</h2>
      </div>
    </div>

    <div class="max-w-7xl space-y-4 mx-auto mt-8">
      <h2 class="text-2xl mb-4 font-semibold">Latest Datasets</h2>
      @foreach ($datasets as $dataset)
        <div
          class="rounded-md shadow grid grid-cols-12 border gap-4 p-6 border-l-transparent border-l-4 hover:border-l-blue-700 transition-all delay-300 transform">
          <div class="col-span-8">
            <a href="/datasets/{{ $dataset->uuid }}"
              class="font-bold text-xl mb-2 hover:text-blue-800 transition-all duration-200 transform">
              {{ $dataset->title }}
            </a>
            <p class="text-slate-700 text-justify">
              {{ $dataset->description }}
            </p>
            <p></p>
          </div>
          <div class="col-span-4 p-6 flex flex-col justify-evenly">
            <div class="space-y-4">
              <span class="font-semibold text-slate-700">{{ count($dataset->files) }} File[s]</span>
              @foreach ($dataset->files as $file)
                @if ($file->filetype === 'text/csv')
                  <span class="px-2 py-1 font-bold text-white text-sm bg-green-600">CSV</span>
                @elseif ($file->filetype === 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' ||
                    $file->type === 'application/vnd.ms-excel')
                  <span class="px-2 py-1 font-bold text-white text-sm bg-green-600">XSLS</span>
                @elseif ($file->fileType === 'application/json')
                  <span class="px-2 py-1 font-bold text-white text-sm bg-purple-700">JSON</span>
                @elseif ($file->fileType === 'text/html')
                  <span class="px-2 py-1 font-bold text-white text-sm bg-blue-700">HTML</span>
                @else
                  <span class="px-2 py-1 font-bold text-white text-sm bg-gray-600">UNKNOWN</span>
                @endif
              @endforeach
            </div>
            <div>
              <span class="block text-ellipsis">{{ $dataset->organization->name ?? 'Unknown Organization' }}</span>
              <span class="text-sm">Last updated: </span><span class="text-sm text-slate-600"
                x-text="parseDate(`{{ $dataset->updated_at }}`)"></span>
            </div>
          </div>
          <div class="col-span-2"></div>
        </div>
      @endforeach
    </div>
  </div>

  @include('components.footer')
</x-frontend-layout>

<script>
  const searchView = () => {
    const data = {
      payload: false,
      showPayload() {
        this.payload = !this.payload
      },
      parseDate(date) {
        const newDate = new Date(date);
        const result = newDate.toLocaleDateString("en-GB", { // you can use undefined as first argument
          year: "numeric",
          month: "2-digit",
          day: "2-digit",
        });
        return result;
      }
    }
    return data
  }
</script>
