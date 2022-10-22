<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" x-data="fileUploadComponent()">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <h2 class="font-bold text-2xl">Desposit Your Dataset</h2>
          <form action="/datasets" enctype="multipart/form-data" method="post" class="grid grid-cols-2 gap-6 py-4">
            @csrf
            <div class="space-y-4">
              <div class="control">
                <x-label for="title" :value="__('Title')" />
                <x-input x-model="title" id="title" class="block mt-1 w-full" type="text"
                  placeholder="Title of the dataset" name="title" :value="old('title')" required autofocus />
              </div>
              <div class="control">
                <x-label for="description" :value="__('Description about the dataset')" />
                <x-textarea x-model="description" required id="description" class="block mt-1 w-full h-56"
                  placeholder="A brief description about the dataset" name="description" />
              </div>
              <div class="control">
                <x-label for="categories" :value="__('Category')" />
                <select name="categories" class="block w-full mt-1 id="category">
                  <option value="1">Category1</option>
                  <option value="2">Category2</option>
                </select>
              </div>
              <div class="control">
                <x-label for="keywords" :value="__('Keywords')" />
                <x-input x-model="keywords" required id="keywords" class="block mt-1 w-full" type="text"
                  placeholder="Keywords seperated by comma" name="keywords" />
              </div>
            </div>
            <div class="border-4 border-gray-300 rounded-lg border-dashed flex flex-col justify-center"
              @drop="dropHandler(event)" @dragover.prevent="">
              <table>
                <thead class="border-b">
                  <tr class="bg-gray-100 py-4 px-4 text-gray-500">
                    <th class="text-left py-2 px-4">File name</th>
                    <th class="pr-4 text-right">File size</th>
                  </tr>
                </thead>
                <template x-for="file in fileList">
                  <tr class="border-b hover:bg-gray-50">
                    <td class="p-4" x-text="file.file.name"></td>
                    <td class="p-4 text-right" x-text="formatFileSize(file.file.size)"></td>
                  </tr>
                </template>
              </table>
              <div x-show="isError" class="rounded-lg bg-red-100 text-red-800 font-bold px-4 py-3 text-center"
                x-text="errorMessage"></div>
              <div class="flex-grow flex flex-col justify-center px-6">
                <h1 class="text-3xl text-center w-full text-gray-400 font-bold">Drag and drop your
                  dataset files</h1>
                <input
                  accept=".xlsx, .xls, .csv, .json, text/csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel, application/json"
                  name="files" multiple type="file" @change="fileSelect()" id="fileUpload" x-ref="fileUploadInput"
                  hidden />
                <button type="button" class="bg-gray-200 font-bold text-gray-500 rounded-md px-4 py-3"
                  @click="fileuploadclick()">Select files</button>
              </div>
            </div>
            <x-button class="font-bold">
              {{ __('Upload Dataset') }}
            </x-button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

<script>
  const fileMimeTypes = ['text/csv', 'application/json',
    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel'
  ]
  const fileUploadComponent = () => {
    const data = {
      errorMessage: "texting",
      isError: false,
      title: "",
      description: "",
      keywords: "",
      categories: "",
      fileList: [],
      fileuploadclick() {
        return this.$refs.fileUploadInput.click()
      },
      appendFileList() {
        if (!this.isError) {
          const dataTransferList = new DataTransfer();
          this.fileList.forEach((file) => {
            dataTransferList.items.add(file.file)
          })
          this.$refs.fileUploadInput.files = dataTransferList.files
          console.log(this.$refs.fileUploadInput.files)
        }
      },
      formatFileSize(fileSize) {
        return new Intl.NumberFormat('en', {
          style: 'decimal',
          notation: 'compact'
        }).format(fileSize)
      },
      fileSelect() {
        const files = this.$refs.fileUploadInput.files
        for (const file of files) {
          if (fileMimeTypes.indexOf(file.type) === -1) {
            this.errorMessage = 'Only CSV, Excel and JSON files are currently accepted';
            this.isError = true;
          } else {
            this.isError = false;
            this.fileList.push({
              fileName: file.name,
              fileSize: file.size,
              file: file
            });
          }
          this.appendFileList()
        }
      },
      dropHandler(ev) {
        ev.preventDefault()
        if (ev.dataTransfer.items) {
          // Use DataTransferItemList interface to access the file(s)
          [...ev.dataTransfer.items].forEach((item, i) => {
            // If dropped items aren't files, reject them
            if (item.kind === 'file') {
              const file = item.getAsFile();
              if (fileMimeTypes.indexOf(file.type) === -1) {
                this.errorMessage =
                  "Only CSV, Excel and JSON files are currently accepted";
                this.isError = true;
                return;
              }
              this.isError = false;
              this.fileList.push({
                fileName: file.name,
                fileSize: file.size,
                file: file
              });
            }
          });
          this.appendFileList()
        } else {
          // Use DataTransfer interface to access the file(s)
          [...ev.dataTransfer.files].forEach((file, i) => {
            console.log(`… file[${i}].name = ${file.name}`);
          });
        }
      },
    }
    return data
  }
</script>
