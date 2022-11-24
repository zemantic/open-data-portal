<x-frontend-layout>
  <div class="bg-blue-900 py-8 px-4 md:px-0">
    <div class="container mx-auto">
      <h1 class="text-3xl text-white">Offical Open Data Portal for The Ministry of Health Sri Lanka</h1>
    </div>
  </div>
  <div class="bg-gray-200 py-8">
    <div class="container mx-auto">
      <div class="bg-white p-8">
        <form action="/search" class="flex" method="post">
          <input type="text" class="border-2 block w-full border-blue-800 px-3 py-2 h-12" placeholder="Search" />
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
  <div class="bg-blue-900 py-16" id="footer">
    <div class="container mx-auto">
      <div class="grid grid-cols-3 gap-4">
        <div></div>
        <div></div>
        <div>
          <a href="#" class="fill-white text-white flex items-center">
            <span>
              <svg height="36px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1"
                viewBox="0 0 512 512" width="36px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <style type="text/css">
                  <![CDATA[
                  .st0 {
                    fill-rule: evenodd;
                    clip-rule: evenodd;
                  }
                  ]]>
                </style>
                <g>
                  <path class="st0"
                    d="M256,32C132.3,32,32,134.8,32,261.7c0,101.5,64.2,187.5,153.2,217.9c11.2,2.1,15.3-5,15.3-11.1   c0-5.5-0.2-19.9-0.3-39.1c-62.3,13.9-75.5-30.8-75.5-30.8c-10.2-26.5-24.9-33.6-24.9-33.6c-20.3-14.3,1.5-14,1.5-14   c22.5,1.6,34.3,23.7,34.3,23.7c20,35.1,52.4,25,65.2,19.1c2-14.8,7.8-25,14.2-30.7c-49.7-5.8-102-25.5-102-113.5   c0-25.1,8.7-45.6,23-61.6c-2.3-5.8-10-29.2,2.2-60.8c0,0,18.8-6.2,61.6,23.5c17.9-5.1,37-7.6,56.1-7.7c19,0.1,38.2,2.6,56.1,7.7   c42.8-29.7,61.5-23.5,61.5-23.5c12.2,31.6,4.5,55,2.2,60.8c14.3,16.1,23,36.6,23,61.6c0,88.2-52.4,107.6-102.3,113.3   c8,7.1,15.2,21.1,15.2,42.5c0,30.7-0.3,55.5-0.3,63c0,6.1,4,13.3,15.4,11C415.9,449.1,480,363.1,480,261.7   C480,134.8,379.7,32,256,32z" />
                </g>
              </svg>
            </span>
            GitHub
          </a>
        </div>
      </div>
    </div>

  </div>
</x-frontend-layout>
