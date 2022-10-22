<x-guest-layout>
  @include('layouts.publicNavigation')
  <div class="py-6" x-data="datasetView()">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      {{ $dataset }}
      <h1 class="text-3xl font-bold">{{ $dataset->title }}</h1>
      <div class="flex place-content-between py-3 border-b">
        <h2 class="text-lg font-semibold">Publisher: {{ $user->name }}</h2>
        <h2 class="text-lg font-semibold">Organization: {{ $user->organization }}</h2>
        <h2 class="text-lg font-semibold">Version</h2>
        <h2 class="text-lg font-semibold">Last updated: <span x-text="parseDate('{{ $dataset->updated_at }}')"></span>
        </h2>
      </div>
      <div class="py-6">
        <p>{{ $dataset->description }}</p>
      </div>
      <div class="py-6">
        <h2 class="text-2xl font-semibold">Distributions</h2>
      </div>
    </div>
  </div>
</x-guest-layout>

<script>
  const datasetView = () => {
    const data = {
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

    return data;
  }
</script>
