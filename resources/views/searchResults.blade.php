<x-guest-layout>
  @include('components.publicNavigation')
  <div class="container max-w-7xl mx-auto" x-data="searchView()">
    <div class="w-3/4 space-y-5 mt-4">
      @foreach ($datasets as $dataset)
        <div
          class="rounded-md shadow grid grid-cols-12 border gap-4 p-6 border-l-transparent border-l-4 hover:border-l-blue-700 transition-all delay-300 transform">
          <div class="col-span-8">
            <a class="font-bold text-lg mb-2 hover:text-blue-800 transition-all duration-200 transform"
              href="/datasets/{{ $dataset->uuid }}">
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
                    $file->filetype === 'application/vnd.ms-excel')
                  <span class="px-2 py-1 font-bold text-white text-sm bg-green-600">XSLS</span>
                @elseif ($file->filetype === 'application/json')
                  <span class="px-2 py-1 font-bold text-white text-sm bg-purple-700">JSON</span>
                @elseif ($file->filetype === 'text/html')
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

    <button class="text-xs bg-gray-200 text-black p-1" @click="showPayload">Payload</button>
    <div x-show="payload" class="p-4 whitespace-wrap bg-neutral-800 text-pink-200">
      <code>{{ $datasets }}</code>
    </div>
  </div>
  @include('components.footer')
</x-guest-layout>

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
