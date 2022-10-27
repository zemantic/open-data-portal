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
          <!-- TODO: Add notification element -->
          <h2 class="font-bold text-2xl">Desposit A Dataset</h2>
          <form action="/datasets/{{ $dataset->id ?? '' }}" enctype="multipart/form-data" method="post"
            class="grid grid-cols-2 gap-6 py-4">
            @if ($mode == 'edit')
              @method('PUT')
            @endif
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
            <div>
              <x-button class="font-bold">
                {{ __('Deposit Dataset') }}
              </x-button>

              <x-button type="button" @click="showDelete = !showDelete"
                class="font-bold bg-red-600 focus:bg-red-600 active:bg-red-600 hover:bg-red-500">
                {{ __('Delete Dataset') }}
              </x-button>

            </div>
          </form>

          <div x-show="showDelete" x-transition class="shadow rounded-lg border py-5 px-4 flex items-center mt-4">
            <span class="h-16 w-16 block mr-4">
              <svg enable-background="new 0 0 512 512" id="Layer_1" version="1.1" viewBox="0 0 512 512"
                xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <linearGradient gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="256" x2="256"
                  y1="512" y2="-9.094947e-013">
                  <stop offset="0" style="stop-color:#E73827" />
                  <stop offset="1" style="stop-color:#F85032" />
                </linearGradient>
                <circle cx="256" cy="256" fill="url(#SVGID_1_)" r="256" />
                <path
                  d="M268.7,256l119.6-119.6c3.2-3.2,3.2-8.3,0-11.4c-3.2-3.2-8.3-3.2-11.4,0L257.2,244.6L135.1,122.5  c-3.2-3.2-8.3-3.2-11.4,0c-3.2,3.2-3.2,8.3,0,11.4L245.8,256L123.7,378.1c-3.2,3.2-3.2,8.3,0,11.4c1.6,1.6,3.7,2.4,5.7,2.4  c2.1,0,4.1-0.8,5.7-2.4l122.1-122.1l119.6,119.6c1.6,1.6,3.7,2.4,5.7,2.4c2.1,0,4.1-0.8,5.7-2.4c3.2-3.2,3.2-8.3,0-11.4L268.7,256z"
                  fill="#FFFFFF" />
              </svg>
            </span>
            <div>
              <p class="font-bold">Are you sure to delete this dataset? <span class="text-red-700">This action cannot
                  be undone</span></p>
              <form action="/dataset/{{ $dataset->id ?? '' }}">
                @method('DELETE')
                @csrf
                <x-button class="font-bold text-xs bg-red-600 focus:bg-red-600 active:bg-red-600 hover:bg-red-500">
                  {{ __('Confirm and delete') }}
                </x-button>
              </form>
            </div>
          </div>
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
      showDelete: false,
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
