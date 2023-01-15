<x-guest-layout>
  @include('components.publicNavigation')
  <div class="py-6" x-data="datasetView()">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold">{{ $dataset->title }}</h1>
      <div class="flex place-content-between py-3 border-b">
        <h2 class="text-lg font-semibold">Publisher: {{ $user->name }}</h2>
        <h2 class="text-lg font-semibold">Organization: {{ $user->organization }}</h2>
        <h2 class="text-lg font-semibold">Version : {{ $dataset->user_version }}</h2>
        <h2 class="text-lg font-semibold">Last updated: <span x-text="parseDate('{{ $dataset->updated_at }}')"></span>
        </h2>
      </div>
      <div class="py-6">
        <p>{{ $dataset->description }}</p>
      </div>
      <div class="grid grid-cols-2 gap-2 mt-4">
        <div>
          <h4 class="text-lg font-semibold mb-2">Categories</h4>
          @foreach ($categories as $category)
            <span class="py-2 mr-2 px-2.5  bg-blue-900 text-white font-semibold">
              <label class="text-sm">{{ $category->category }}</label>
            </span>
          @endforeach
        </div>
        <div>
          <h4 class="text-lg font-semibold mb-2">Keywords</h4>
          @foreach ($keywords as $keyword)
            <span class="text-blue-900 mr-2 font-semibold">
              <label class="text-sm">{{ $keyword->keyword }}</label>
            </span>
          @endforeach
        </div>

      </div>
      <div class="py-6">
        <h2 class="text-2xl font-semibold">Distributions</h2>
        <div class="mt-4">
          <div class="grid grid-cols-4 gap-4 py-4 bg-blue-100 font-semibold">
            <div class="flex justify-center items-center">File Name</div>
            <div class="flex justify-center items-center">Format</div>
            <div class="flex justify-center items-center">Downloads</div>
            <div class="flex justify-center items-center">Actions</div>
          </div>
          @foreach ($files as $file)
            <div class="grid grid-cols-4 gap-4 my-2">
              <div class="flex items-center font-semibold">
                @if ($file->filetype === 'text/csv')
                  <span class="h-12 w-12">
                    <svg height="48" width="48" data-name="Layer 1" id="Layer_1" viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <defs>
                        <style>
                          .cls-1 {
                            fill: #4caf50;
                          }

                          .cls-2 {
                            fill: #b9f6ca;
                          }

                          .cls-3 {
                            fill: #e8f5e9;
                          }
                        </style>
                      </defs>
                      <title />
                      <path class="cls-1"
                        d="M16.5,22h-9a3,3,0,0,1-3-3V5a3,3,0,0,1,3-3h6.59a1,1,0,0,1,.7.29l4.42,4.42a1,1,0,0,1,.29.7V19A3,3,0,0,1,16.5,22Z" />
                      <path class="cls-2"
                        d="M18.8,7.74H15.2a1.5,1.5,0,0,1-1.5-1.5V2.64a.55.55,0,0,1,.94-.39L19.19,6.8A.55.55,0,0,1,18.8,7.74Z" />
                      <path class="cls-3"
                        d="M9.19,18.11a1.77,1.77,0,0,1-.82-.17,1.29,1.29,0,0,1-.55-.51,1.54,1.54,0,0,1-.2-.79,1.52,1.52,0,0,1,.2-.79,1.21,1.21,0,0,1,.55-.5,1.77,1.77,0,0,1,.82-.18,1.45,1.45,0,0,1,.35,0,1.47,1.47,0,0,1,.38.11.38.38,0,0,1,.19.16.43.43,0,0,1,.05.23.48.48,0,0,1-.07.21.27.27,0,0,1-.17.13.27.27,0,0,1-.23,0,.92.92,0,0,0-.39-.09.61.61,0,0,0-.47.18.77.77,0,0,0-.16.52.75.75,0,0,0,.16.52.58.58,0,0,0,.47.19l.19,0,.2-.07a.27.27,0,0,1,.23,0,.26.26,0,0,1,.16.13.38.38,0,0,1,.07.21.37.37,0,0,1-.05.23.38.38,0,0,1-.19.16,2.15,2.15,0,0,1-.37.11Z" />
                      <path class="cls-3"
                        d="M11.79,18.11a2.92,2.92,0,0,1-.51,0,1.62,1.62,0,0,1-.47-.13.38.38,0,0,1-.24-.2.39.39,0,0,1,0-.26.35.35,0,0,1,.16-.2.3.3,0,0,1,.28,0,1.93,1.93,0,0,0,.42.12,1.69,1.69,0,0,0,.38,0,.56.56,0,0,0,.3-.06.18.18,0,0,0,.09-.16.15.15,0,0,0-.06-.13A.38.38,0,0,0,12,17l-.63-.11a.91.91,0,0,1-.55-.25.74.74,0,0,1-.2-.53.85.85,0,0,1,.17-.51,1.07,1.07,0,0,1,.46-.33,1.83,1.83,0,0,1,.68-.12,3.17,3.17,0,0,1,.47,0,2,2,0,0,1,.41.13.33.33,0,0,1,.2.2.39.39,0,0,1,0,.26.35.35,0,0,1-.17.19.3.3,0,0,1-.28,0,2.19,2.19,0,0,0-.34-.11,1.36,1.36,0,0,0-.27,0,.62.62,0,0,0-.33.07.18.18,0,0,0-.1.16c0,.1.07.16.21.19l.64.11a1,1,0,0,1,.56.24.7.7,0,0,1,.2.52.83.83,0,0,1-.36.72A1.56,1.56,0,0,1,11.79,18.11Z" />
                      <path class="cls-3"
                        d="M14.84,18.1a.59.59,0,0,1-.57-.4l-.82-1.87a.51.51,0,0,1,0-.45.46.46,0,0,1,.44-.2.44.44,0,0,1,.29.09.63.63,0,0,1,.21.32l.48,1.24.51-1.25a.72.72,0,0,1,.2-.31.53.53,0,0,1,.32-.09.4.4,0,0,1,.27.09.36.36,0,0,1,.13.24.53.53,0,0,1-.05.32l-.84,1.88A.58.58,0,0,1,14.84,18.1Z" />
                    </svg>

                  </span>
                @elseif ($file->filetype === 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' ||
                    $file->type === 'application/vnd.ms-excel')
                  <span class="h-12 w-12">
                    <svg height="48" width="48" data-name="Layer 1" id="Layer_1" viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <defs>
                        <style>
                          .cls-1 {
                            fill: #4caf50;
                          }

                          .cls-2 {
                            fill: #b9f6ca;
                          }

                          .cls-3 {
                            fill: #e8f5e9;
                          }
                        </style>
                      </defs>
                      <title />
                      <path class="cls-1"
                        d="M16.5,22h-9a3,3,0,0,1-3-3V5a3,3,0,0,1,3-3h6.59a1,1,0,0,1,.7.29l4.42,4.42a1,1,0,0,1,.29.7V19A3,3,0,0,1,16.5,22Z" />
                      <path class="cls-2"
                        d="M18.8,7.74H15.2a1.5,1.5,0,0,1-1.5-1.5V2.64a.55.55,0,0,1,.94-.39L19.19,6.8A.55.55,0,0,1,18.8,7.74Z" />
                      <path class="cls-3"
                        d="M6.75,18.1A.43.43,0,0,1,6.44,18a.33.33,0,0,1-.11-.26.48.48,0,0,1,.12-.32l.67-.81-.6-.72a.51.51,0,0,1-.13-.33.36.36,0,0,1,.12-.26.43.43,0,0,1,.31-.11.66.66,0,0,1,.3.07.75.75,0,0,1,.22.19l.36.46.35-.46a.66.66,0,0,1,.53-.26.44.44,0,0,1,.3.11.32.32,0,0,1,.12.26.48.48,0,0,1-.14.33l-.59.72.67.81a.49.49,0,0,1,.13.32A.31.31,0,0,1,9,18a.45.45,0,0,1-.31.11.67.67,0,0,1-.3-.06.82.82,0,0,1-.23-.2l-.42-.54-.42.54A.77.77,0,0,1,7,18,.5.5,0,0,1,6.75,18.1Z" />
                      <path class="cls-3"
                        d="M10.84,18.11a1,1,0,0,1-.81-.29,1.28,1.28,0,0,1-.26-.89V14.48a.45.45,0,0,1,.5-.51.47.47,0,0,1,.52.51V16.9a.46.46,0,0,0,.08.31.29.29,0,0,0,.21.09h.18a.16.16,0,0,1,.15.07.66.66,0,0,1,.05.31.51.51,0,0,1-.08.3.46.46,0,0,1-.25.13l-.13,0Z" />
                      <path class="cls-3"
                        d="M13,18.11a3,3,0,0,1-.52,0,1.71,1.71,0,0,1-.47-.13.36.36,0,0,1-.23-.2.33.33,0,0,1,0-.26.35.35,0,0,1,.16-.2.28.28,0,0,1,.27,0,2.18,2.18,0,0,0,.43.12,1.61,1.61,0,0,0,.37,0,.56.56,0,0,0,.3-.06.17.17,0,0,0,.1-.16.15.15,0,0,0-.06-.13.38.38,0,0,0-.17-.06l-.64-.11a.94.94,0,0,1-.55-.25.73.73,0,0,1-.19-.53.84.84,0,0,1,.16-.51,1.11,1.11,0,0,1,.47-.33,1.79,1.79,0,0,1,.68-.12,3.3,3.3,0,0,1,.47,0,2,2,0,0,1,.41.13.36.36,0,0,1,.2.2A.39.39,0,0,1,14,16a.32.32,0,0,1-.29,0,1.82,1.82,0,0,0-.33-.11,1.47,1.47,0,0,0-.27,0,.69.69,0,0,0-.34.07.19.19,0,0,0-.09.16c0,.1.07.16.21.19l.63.11a1,1,0,0,1,.57.24.7.7,0,0,1,.2.52.83.83,0,0,1-.36.72A1.58,1.58,0,0,1,13,18.11Z" />
                      <path class="cls-3"
                        d="M15.22,18.1a.41.41,0,0,1-.3-.11.31.31,0,0,1-.12-.26.49.49,0,0,1,.13-.32l.66-.81L15,15.88a.47.47,0,0,1-.13-.33.32.32,0,0,1,.12-.26.41.41,0,0,1,.3-.11.66.66,0,0,1,.53.26l.35.46.36-.46a.67.67,0,0,1,.23-.19.65.65,0,0,1,.29-.07.45.45,0,0,1,.31.11.35.35,0,0,1,.11.26.47.47,0,0,1-.13.33l-.59.72.66.81a.46.46,0,0,1,.14.32.35.35,0,0,1-.13.26.44.44,0,0,1-.3.11.67.67,0,0,1-.3-.06.7.7,0,0,1-.23-.2l-.42-.54-.43.54a.64.64,0,0,1-.22.19A.56.56,0,0,1,15.22,18.1Z" />
                    </svg>
                  </span>
                @elseif ($file->filetype === 'application/json')
                  <span class="h-12 w-12">
                    <svg height="48" viewBox="0 0 24 24" width="48" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M12.823 15.122c-.517 0-.816.491-.816 1.146 0 .661.311 1.126.82 1.126.517 0 .812-.49.812-1.146 0-.604-.291-1.126-.816-1.126z" />
                      <path
                        d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zM8.022 16.704c0 .961-.461 1.296-1.2 1.296-.176 0-.406-.029-.557-.08l.086-.615c.104.035.239.06.391.06.319 0 .52-.145.52-.67v-2.122h.761v2.131zm1.459 1.291c-.385 0-.766-.1-.955-.205l.155-.631c.204.105.521.211.846.211.35 0 .534-.146.534-.365 0-.211-.159-.331-.564-.476-.562-.195-.927-.506-.927-.996 0-.576.481-1.017 1.277-1.017.38 0 .659.08.861.171l-.172.615c-.135-.065-.375-.16-.705-.16s-.491.15-.491.325c0 .215.19.311.627.476.596.22.876.53.876 1.006.001.566-.436 1.046-1.362 1.046zm3.306.005c-1.001 0-1.586-.755-1.586-1.716 0-1.012.646-1.768 1.642-1.768 1.035 0 1.601.776 1.601 1.707C14.443 17.33 13.773 18 12.787 18zm4.947-.055h-.802l-.721-1.302a12.64 12.64 0 0 1-.585-1.19l-.016.005c.021.445.031.921.031 1.472v1.016h-.701v-3.373h.891l.701 1.236c.2.354.4.775.552 1.155h.014c-.05-.445-.065-.9-.065-1.406v-.985h.702v3.372zM14 9h-1V4l5 5h-4z" />
                    </svg>
                  </span>
                @elseif ($file->filetype === 'text/html')
                  <span class="h-12 w-12">
                    <svg height="48" preserveAspectRatio="xMidYMid" viewBox="0 0 49 64" width="48"
                      xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <defs>
                        <style>
                          .cls-1 {
                            fill: #bbcacf;
                          }

                          .cls-1,
                          .cls-2,
                          .cls-3 {
                            fill-rule: evenodd;
                          }

                          .cls-2 {
                            fill: #fff;
                          }

                          .cls-3 {
                            fill: #dfeaee;
                          }
                        </style>
                      </defs>
                      <g>
                        <path class="cls-1"
                          d="M49.000,16.842 L49.000,58.947 C49.000,61.738 46.730,64.000 43.931,64.000 L5.069,64.000 C2.269,64.000 -0.000,61.738 -0.000,58.947 L-0.000,5.053 C-0.000,2.262 2.269,-0.000 5.069,-0.000 L32.103,-0.000 L49.000,16.842 Z" />
                        <path class="cls-2"
                          d="M38.088,45.536 L38.088,32.066 L40.430,32.066 L40.430,45.536 L38.088,45.536 ZM34.489,39.945 C34.489,39.385 34.456,38.947 34.389,38.634 C34.322,38.320 34.221,38.108 34.085,37.996 C33.949,37.884 33.723,37.829 33.409,37.829 C33.052,37.829 32.674,37.961 32.274,38.227 C31.875,38.492 31.503,38.818 31.158,39.204 L31.158,45.536 L28.817,45.536 L28.817,39.945 C28.817,39.330 28.790,38.886 28.735,38.611 C28.681,38.337 28.584,38.138 28.445,38.014 C28.305,37.891 28.070,37.829 27.737,37.829 C27.446,37.829 27.111,37.939 26.729,38.159 C26.348,38.379 25.934,38.727 25.486,39.204 L25.486,45.536 L23.145,45.536 L23.145,36.047 L25.486,36.047 L25.486,37.277 C25.922,36.806 26.379,36.439 26.857,36.173 C27.334,35.908 27.864,35.775 28.445,35.775 C29.237,35.775 29.823,35.911 30.201,36.182 C30.579,36.454 30.837,36.855 30.977,37.385 C31.521,36.843 32.031,36.439 32.506,36.173 C32.981,35.908 33.536,35.775 34.171,35.775 C35.097,35.775 35.771,36.038 36.195,36.562 C36.618,37.087 36.830,37.967 36.830,39.204 L36.830,45.536 L34.489,45.536 L34.489,39.945 ZM18.638,45.075 C18.153,44.580 17.912,43.778 17.912,42.668 L17.912,37.901 L16.705,37.901 L16.705,36.047 L17.912,36.047 L17.912,33.405 L20.253,33.405 L20.253,36.047 L22.467,36.047 L22.467,37.901 L20.253,37.901 L20.253,42.370 C20.253,42.961 20.345,43.362 20.530,43.573 C20.714,43.784 20.976,43.889 21.315,43.889 C21.744,43.889 22.171,43.802 22.594,43.627 L23.003,45.536 C22.373,45.723 21.711,45.816 21.015,45.816 C19.914,45.816 19.122,45.569 18.638,45.075 ZM14.130,40.307 C14.130,39.306 14.037,38.643 13.849,38.317 C13.661,37.991 13.329,37.829 12.851,37.829 C12.155,37.829 11.317,38.287 10.337,39.204 L10.337,45.536 L7.996,45.536 L7.996,32.066 L10.337,32.066 L10.337,37.277 C10.833,36.782 11.362,36.408 11.925,36.155 C12.488,35.902 13.038,35.775 13.577,35.775 C14.642,35.775 15.390,36.074 15.823,36.671 C16.255,37.268 16.472,38.112 16.472,39.204 L16.472,45.536 L14.130,45.536 L14.130,40.307 Z" />
                        <path class="cls-3"
                          d="M49.000,15.899 L49.000,17.995 L35.187,17.995 C32.327,17.995 31.008,15.675 31.008,12.814 L31.008,-0.000 L33.100,-0.000 L49.000,15.899 Z" />
                      </g>
                    </svg>
                  </span>
                @else
                  <span class="h-12 w-12">
                    <svg height="48" version="1.1" width="48" xmlns="http://www.w3.org/2000/svg"
                      xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/"
                      xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                      <g transform="translate(0 -1028.4)">
                        <path
                          d="m5 1030.4c-1.1046 0-2 0.9-2 2v8 4 6c0 1.1 0.8954 2 2 2h14c1.105 0 2-0.9 2-2v-6-4-4l-6-6h-10z"
                          fill="#95a5a6" />
                        <path
                          d="m5 1029.4c-1.1046 0-2 0.9-2 2v8 4 6c0 1.1 0.8954 2 2 2h14c1.105 0 2-0.9 2-2v-6-4-4l-6-6h-10z"
                          fill="#bdc3c7" />
                        <path d="m21 1035.4-6-6v4c0 1.1 0.895 2 2 2h4z" fill="#95a5a6" />
                      </g>
                    </svg>
                  </span>
                @endif
                {{ $dataset->title }}
              </div>
              <div class="flex justify-center items-center">
                @if ($file->filetype === 'text/csv')
                  <span class="px-2 text-white text-sm font-bold bg-green-600">CSV</span>
                @elseif($file->filetype === 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' ||
                    $file->filetype === 'application/vnd.ms-excel')
                  <span class="px-2 text-white text-sm font-bold bg-green-600">XLSX</span>
                @elseif($file->filetype === 'application/json')
                  <span class="px-2 text-white text-sm font-bold bg-purple-700">JSON</span>
                @elseif($file->filetype === 'text/html')
                  <span class="px-2 text-white text-sm font-bold bg-blue-700">HTML</span>
                @else
                  <span class="px-2 text-white text-sm font-bold bg-gray-600">UNKNOWN</span>
                @endif
              </div>
              <div class="flex justify-center items-center">{{ $file->downloads }}</div>
              <div class="flex justify-center items-center">
                <a class="font-semibold flex space-x-2" href="/download/{{ $file->id }}">
                  <svg height="24" id="svg8" version="1.1" viewBox="0 0 185.20832 185.20832"
                    width="24">
                    <defs id="defs2" />
                    <g id="layer1" transform="translate(244.17261,202.68451)">
                      <g id="g2151" transform="translate(708.39452,-1395.2419)">
                        <path
                          d="m -172.90538,-1050.9226 c 3.39877,-2.5377 2.99925,-7.8285 0,-10.8277 l -36.20385,-36.2043 c -2.99924,-2.9992 -7.82831,-2.9992 -10.82755,0 l -58.71681,58.6149 -58.63793,58.53587 c -3.02589,18.77157 -6.1309,37.62221 -9.15691,56.3938 l 56.18187,-9.36844 c 30.37245,-30.37282 44.72497,-44.67089 59.21122,-59.10268 14.48613,-14.43185 28.73348,-28.62465 58.14996,-58.04145 z"
                          id="path851"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <rect height="67.306938" id="rect919" ry="5.0819001"
                          style="opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          transform="matrix(-0.70710294,0.70711062,-0.70710294,-0.70711062,0,0)" width="11.06725"
                          x="-601.16461" y="865.35944" />
                        <path d="m -312.8744,-925.23385 -32.29813,-32.29847 -1.2759,33.12229 z" id="path925"
                          style="fill:#000000;stroke:none;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
                        <rect height="67.306938" id="rect927" ry="5.0819001"
                          style="opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          transform="matrix(-0.70710294,0.70711062,-0.70710294,-0.70711062,0,0)" width="11.06725"
                          x="-467.45428" y="865.7829" />
                      </g>
                      <g id="g2099" transform="translate(-22.7253,-737.9912)">
                        <ellipse cx="-352.55511" cy="-1716.3115" id="path1009" rx="5.3341513" ry="5.3419828"
                          style="opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <path d="m -352.55512,-1698.4895 v 37.8585" id="path1011"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path
                          d="m -436.72159,-1743.2881 c -2.10926,0 -3.80747,1.7045 -3.80747,3.8223 v 103.5679 c 0,2.1178 1.69821,3.8231 3.80747,3.8231 h 23.24053 v 36.2859 l 71.37453,-36.2859 h 31.63448 42.08329 c 2.10914,0 3.80758,-1.7053 3.80758,-3.8231 v -103.5679 c 0,-2.1178 -1.69844,-3.8223 -3.80758,-3.8223 z"
                          id="rect1013"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                      </g>
                      <g id="g2242" transform="translate(556.42558,-843.56901)">
                        <path d="m -1849.9638,-304.30968 h 41.1225 l 69.633,-108.80316 h 23.9087 41.1225"
                          id="path1080"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -1674.1771,-413.11286 -39.6587,-19.99314" id="path1084"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -1674.1771,-413.11286 -39.6587,19.99316" id="path1100"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -1674.1771,-304.30968 -39.6587,-19.99316" id="path1106"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -1674.1771,-304.30968 -39.6587,19.99316" id="path1108"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -1850.0108,-413.10521 h 41.1225 l 69.6331,108.80316 h 23.9086 41.1226"
                          id="path1092"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2234" transform="translate(-396.85889,-1264.9155)">
                        <path
                          d="m -867.12106,-414.18708 h 104.67358 c 3.37276,0 6.08811,2.70492 6.08811,6.06485 v 144.09387 c 0,3.35992 -2.71535,6.06484 -6.08811,6.06484 h -104.67358 c -3.37287,0 -6.08822,-2.70492 -6.08822,-6.06484 v -144.09387 c 0,-3.35993 2.71535,-6.06485 6.08822,-6.06485 z"
                          id="rect989-9"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <path d="m -872.7638,-428.6037 h 116.31654" id="path1131"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -847.83449,-394.01058 v 115.87056" id="path1133"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -814.78433,-394.01058 v 115.87056" id="path1135"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -781.73416,-394.01058 v 115.87056" id="path1137"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -831.68517,-433.91096 h 34.15927" id="path1139"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2165" transform="translate(444.50245,591.94525)">
                        <path
                          d="m -508.09411,-666.26096 -2.7e-4,50.63486 c 0,1.26357 -0.84285,2.2808 -1.89013,2.2808 h -172.17305 c -1.04714,0 -1.89013,-1.01723 -1.89013,-2.2808 v -50.63486"
                          id="rect1147"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041508;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <g id="g1663" transform="matrix(1,0,0,-1,-440.26952,-837.77833)">
                          <path d="M -155.80138,-47.138367 V -197.97334" id="path1149"
                            style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                          <path d="m -155.80138,-197.97325 -43.48169,44.42384" id="path1151"
                            style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                          <path d="m -155.80138,-197.97325 43.4817,44.42384" id="path1153"
                            style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        </g>
                      </g>
                      <g id="g2170" transform="translate(-1852.3955,-902.05838)">
                        <path d="m -190.13824,-620.9037 -1.6e-4,-175.78177" id="path1239"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -154.99508,-620.80411 -70.28647,-1.5e-4" id="path1241"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -154.99492,-796.78492 -70.28647,-1.5e-4" id="path1243"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2065" transform="translate(150.40038,-731.4105)">
                        <path d="m -1004.9363,-1676.1193 h 175.8228" id="path1247"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -1004.9363,-1735.3048 h 175.8228" id="path1249"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -1004.9363,-1616.9339 h 175.8228" id="path1251"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g1580" style="stroke-width:0.69996077"
                        transform="matrix(1.4022306,0,0,1.4555701,666.00715,-1856.0442)">
                        <path d="m -127.05,-111.18531 v 84.939867 h -97.20364 v -120.685337 0 h 59.76009"
                          id="path1339"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:6.48192835;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <path
                          d="m -128.34411,-109.94993 h -36.14952 c -0.71698,0 -1.2941,-0.55098 -1.2941,-1.23539 v -34.51006 c 0,-0.6844 0.57712,-1.23539 1.2941,-1.23539 l 37.44363,35.74545 c 0,0.68441 -0.57721,1.23539 -1.29411,1.23539 z"
                          id="path1341"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:6.48192835;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                      </g>
                      <g id="g1592" style="stroke-width:0.71462166"
                        transform="matrix(1.4033843,0,0,1.3953112,-518.94303,-1492.0296)">
                        <g id="g1584" style="stroke-width:0.87175673"
                          transform="matrix(0.82034858,0,0,0.81914972,-1000.8153,8.5908661)">
                          <path d="M 1064.0341,-145.82398 V -37.473971 H 945.66383 v -153.947239 0 h 72.77317"
                            id="path1325"
                            style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:8.0728302;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                          <path
                            d="m 1062.4582,-144.24812 h -44.0213 c -0.8731,0 -1.5759,-0.70284 -1.5759,-1.57588 v -44.02132 c 0,-0.87303 0.7028,-1.57588 1.5759,-1.57588 l 45.5972,45.5972 c 0,0.87304 -0.7029,1.57588 -1.5759,1.57588 z"
                            id="rect1297"
                            style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:8.0728302;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        </g>
                        <path d="m -203.7267,-65.835945 h 56.15017" id="path1343"
                          style="fill:none;stroke:#000000;stroke-width:6.61769342;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -203.7267,-86.588292 h 56.15017" id="path1345"
                          style="fill:none;stroke:#000000;stroke-width:6.61769342;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -203.7267,-45.083597 h 56.15017" id="path1347"
                          style="fill:none;stroke:#000000;stroke-width:6.61769342;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2117" transform="translate(604.59967,-721.43969)">
                        <path
                          d="m -1479.3042,-1348.6137 c 43.987,0 87.974,0 131.9609,0 14.6624,14.6623 29.3246,29.3246 43.9869,43.9869 0,43.987 0,87.974 0,131.961 -58.6493,0 -117.2985,0 -175.9478,0 0,-58.6493 0,-117.2986 0,-175.9479 z"
                          id="rect1357"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041508;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <rect height="47.425125" id="rect1361"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041508;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          width="72.677277" x="-1427.6688" y="-1348.6138" />
                        <path d="m -1377.3937,-1332.8778 v 15.4954" id="path1365"
                          style="fill:none;stroke:#000000;stroke-width:9.26041508;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <g id="g1379" style="stroke-width:0.86788404"
                          transform="matrix(1.1522276,0,0,1.1522276,2485.573,-1321.0163)">
                          <rect height="61.570217" id="rect1363"
                            style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:8.03696728;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                            width="98.601219" x="-3414.0032" y="67.180763" />
                          <g id="g1373" style="stroke-width:0.86788404">
                            <path d="m -3332.2349,86.815572 h -64.9352" id="path1367"
                              style="fill:none;stroke:#000000;stroke-width:8.03696823;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                            <path d="m -3332.2349,109.11617 h -64.9352" id="path1369"
                              style="fill:none;stroke:#000000;stroke-width:8.03696823;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                          </g>
                        </g>
                      </g>
                      <g id="g1607" transform="translate(1226.3558,-2041.9376)">
                        <path d="m -270.94092,-413.33916 v 22.49361 m -104.45723,0 v -62.72064 0 h 64.21954"
                          id="path1381"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <path
                          d="m -272.33159,-411.94889 h -38.8471 c -0.77048,0 -1.39067,-0.62007 -1.39067,-1.39028 v -38.83674 c 0,-0.77021 0.62019,-1.39028 1.39067,-1.39028 l 40.23777,40.22702 c 0,0.77021 -0.62029,1.39028 -1.39067,1.39028 z"
                          id="path1383"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <path d="m -263.92908,-373.52177 h 12.75166" id="path1410"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -374.82216,-325.24597 h -36.32141 v -64.50356 0 h 175.9479 v 64.50356 h -33.49189"
                          id="path1402"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <g id="g1597" transform="translate(-171.60118,-248.72845)">
                          <path d="m -181.73851,-68.859629 h 60.34023" id="path1385"
                            style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                          <path d="m -181.73851,-50.007184 h 60.34023" id="path1389"
                            style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                          <rect height="61.087173" id="rect1393"
                            style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041698;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                            width="106.13478" x="-204.63582" y="-89.977005" />
                        </g>
                      </g>
                      <g id="g2246" transform="translate(-651.26232,-907.69052)">
                        <path d="m -1479.1986,143.76773 175.8543,-175.854357" id="path1419"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -1479.1986,-32.086627 175.8543,175.854387" id="path1421"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2077" transform="translate(238.12565,-1067.7833)">
                        <ellipse cx="-344.66565" cy="-2283.1392" id="ellipse1423" rx="57.371502" ry="56.435123"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          transform="matrix(0.70704084,-0.70717272,0.70704084,0.70717272,0,0)" />
                        <path d="m -1738.9413,-1251.8221 -79.1058,-79.1204" id="path1425"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2129" transform="translate(986.16305,-854.72512)">
                        <path d="m -925.98217,-1197.0125 h -35.14851 v -18.3158 0 h 35.14851 z" id="path1455"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <g id="g1632" transform="translate(-791.98798,-1017.274)">
                          <path d="M -80.133301,-22.106398 H -223.0036 v -157.632072 0 h 142.870299 z" id="path1451"
                            style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                          <path d="m -106.55211,-167.13593 h -90.03267 v -6.88925 0 h 90.03267 z" id="path1457"
                            style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        </g>
                        <g id="g1488" style="stroke-width:0.85923588"
                          transform="matrix(1.1649225,0,0,1.162728,3430.166,-880.5536)">
                          <g id="g1628">
                            <path d="m -3788.4218,-212.55864 h 68.3772" id="path1343-2"
                              style="fill:none;stroke:#000000;stroke-width:7.956882;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                            <path d="m -3788.4218,-237.18328 h 68.3772" id="path1345-2"
                              style="fill:none;stroke:#000000;stroke-width:7.956882;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                            <path d="m -3788.4218,-187.93401 h 68.3772" id="path1347-0"
                              style="fill:none;stroke:#000000;stroke-width:7.956882;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                            <path d="m -3788.9913,-163.30937 h 68.3772" id="path1347-0-7"
                              style="fill:none;stroke:#000000;stroke-width:7.956882;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                          </g>
                        </g>
                      </g>
                      <g id="g2178" transform="translate(-1784.9094,-907.8804)">
                        <ellipse cx="704.22473" cy="-258.69522" id="ellipse1490" rx="23.976822" ry="23.822092"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26110744;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          transform="matrix(0.50750515,-0.86164873,0.87029421,0.49253221,0,0)" />
                        <path d="m 185.26258,-702.97257 -32.84212,-18.58659" id="path1492"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <ellipse cx="-519.54413" cy="454.93579" id="ellipse1494" rx="23.976822" ry="23.822092"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26110744;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          transform="matrix(0.50750515,0.86164873,0.87029421,-0.49253221,0,0)" />
                        <path d="M 185.26258,-702.97257 152.42046,-684.386" id="path1496"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m 185.2703,-702.96933 98.805,-29.77729" id="path1498"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m 185.2703,-702.96933 98.805,29.7773" id="path1500"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2260" transform="translate(-375.2092,-976.96741)">
                        <g id="g1542" style="stroke-width:0.65704465"
                          transform="matrix(1.5226963,0,0,1.5212372,447.42158,-646.11163)">
                          <path d="m -5468.2984,2139.3147 -1e-4,-72.6955" id="path1537"
                            style="fill:none;stroke:#000000;stroke-width:22.99656296;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                            transform="matrix(0.26458332,0,0,0.26458332,-244.17261,-97.60714)" />
                          <path d="m -5468.2981,2503.45 -2e-4,-246.9574" id="path1506"
                            style="fill:none;stroke:#000000;stroke-width:22.99656296;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                            transform="matrix(0.26458332,0,0,0.26458332,-244.17261,-97.60714)" />
                          <circle cx="-1690.9932" cy="483.92142" id="path1512" r="15.501632"
                            style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:6.08450699;stroke-linecap:round;stroke-linejoin:bevel;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        </g>
                        <g id="g1547" style="stroke-width:0.65704465"
                          transform="matrix(1.5226963,0,0,1.5212372,449.92948,-646.11163)">
                          <path d="m -5314.7551,2305.2388 -10e-5,-238.6196" id="path1530"
                            style="fill:none;stroke:#000000;stroke-width:22.99656296;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                            transform="matrix(0.26458332,0,0,0.26458332,-244.17261,-97.60714)" />
                          <path d="m -5314.7548,2503.45 -2e-4,-81.0333" id="path1510"
                            style="fill:none;stroke:#000000;stroke-width:22.99656296;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                            transform="matrix(0.26458332,0,0,0.26458332,-244.17261,-97.60714)" />
                          <circle cx="-1650.3682" cy="527.8219" id="circle1514" r="15.501632"
                            style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:6.08450699;stroke-linecap:round;stroke-linejoin:bevel;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        </g>
                        <g id="g1552" style="stroke-width:0.65704465"
                          transform="matrix(1.5226963,0,0,1.5212372,405.22898,-644.48531)">
                          <path d="M -5044.0344,2186.7228 V 2062.5786" id="path1523"
                            style="fill:none;stroke:#000000;stroke-width:22.99656296;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                            transform="matrix(0.26458332,0,0,0.26458332,-244.17261,-97.60714)" />
                          <path d="M -5044.034,2499.4094 V 2303.9001" id="path1508"
                            style="fill:none;stroke:#000000;stroke-width:22.99656296;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                            transform="matrix(0.26458332,0,0,0.26458332,-244.17261,-97.60714)" />
                          <circle cx="-1578.74" cy="496.46475" id="circle1516" r="15.501632"
                            style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:6.08450699;stroke-linecap:round;stroke-linejoin:bevel;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        </g>
                      </g>
                      <g id="g2634" transform="translate(-228.22613,-219.40648)">
                        <rect height="175.95261" id="rect989-0"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          width="116.03008" x="-2262.1172" y="-1850.6493" />
                        <path d="m -2212.1083,-1762.673 h 132.0424" id="path993-1"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -2080.066,-1762.673 -38.8891,38.0512" id="path995-0"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -2080.066,-1762.673 -38.8891,-38.0511" id="path997-6"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2640" transform="translate(-215.52613,-196.22155)">
                        <rect height="175.95261" id="rect2604"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          width="116.03008" x="-1895.1715" y="-1873.8342" />
                        <path d="m -1713.1202,-1785.858 h -132.0424" id="path2606"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -1845.1625,-1785.858 38.8891,38.0512" id="path2608"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -1845.1625,-1785.858 38.8891,-38.0511" id="path2610"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2158" transform="translate(-1893.2508,-908.48397)">
                        <path
                          d="m -822.94577,-666.60436 -2.7e-4,50.63486 c 0,1.26358 -0.84285,2.28081 -1.89013,2.28081 h -172.17305 c -1.04714,0 -1.89013,-1.01723 -1.89013,-2.28081 v -50.63486"
                          id="rect1147-4"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041508;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <g id="g1663-9" transform="translate(-755.12118,-593.01002)">
                          <path d="M -155.80138,-47.138367 V -197.97334" id="path1149-7"
                            style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                          <path d="m -155.80138,-197.97325 -43.48169,44.42384" id="path1151-5"
                            style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                          <path d="m -155.80138,-197.97325 43.4817,44.42384" id="path1153-4"
                            style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        </g>
                      </g>
                      <path d="m 292.19891,-1203.8827 h 175.7822" id="path1245-9"
                        style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      <g id="g1713" transform="translate(152.39999,-1113.3666)">
                        <path d="M -239.45954,-110.08035 H -63.67736" id="path1245"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="M -151.56845,-197.97144 V -22.189261" id="path1709"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2089" transform="translate(-401.07507,-1192.8655)">
                        <ellipse cx="-840.60016" cy="-2602.1973" id="ellipse1717" rx="57.371502" ry="56.435123"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          transform="matrix(0.70704084,-0.70717272,0.70704084,0.70717272,0,0)" />
                        <path d="m -2315.1744,-1126.74 -79.1057,-79.1204" id="path1719"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -2472.2481,-1245.7533 h 76.0993" id="path1721"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -2434.1984,-1283.803 v 76.0993" id="path1723"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2094" transform="translate(63.36091,-1101.9938)">
                        <ellipse cx="-566.17584" cy="-2456.2729" id="ellipse1725" rx="57.371502" ry="56.435123"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          transform="matrix(0.70704084,-0.70717272,0.70704084,0.70717272,0,0)" />
                        <path d="m -2017.9707,-1217.6117 -79.1057,-79.1203" id="path1727"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -2175.0444,-1336.625 h 76.0993" id="path1729"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2083" transform="translate(-7.44964,-822.12455)"><text id="text1449"
                          style="font-style:normal;font-weight:normal;font-size:64.96838379px;line-height:3.3499999;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.26458332"
                          x="-2507.1326" xml:space="preserve" y="-1592.7974">
                          <tspan dx="0" dy="0" id="tspan1447"
                            style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-family:Verdana;-inkscape-font-specification:Verdana;letter-spacing:-11.87653065px;stroke-width:0.37970105"
                            transform="matrix(0.69682017,0,0,0.69682017,-67.153659,-55.007348)" x="-2507.1326"
                            y="-1592.7974" />
                        </text>
                        <ellipse cx="-598.08905" cy="-2883.9441" id="ellipse1731" rx="57.371502" ry="56.435123"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          transform="matrix(0.70704084,-0.70717272,0.70704084,0.70717272,0,0)" />
                        <path d="m -2342.9156,-1497.4809 -79.1058,-79.1204" id="path1733"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2189" transform="translate(-3120.8611,-421.04619)">
                        <rect height="153.94724" id="rect931"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          width="153.94724" x="228.71378" y="-496.77704" />
                        <path d="m 250.71444,-496.77699 v -22.00073 0 h 153.94724 v 153.94724 h -22.00073"
                          id="path1745"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                      </g>
                      <g id="g2202" transform="translate(-312.38402,-1532.9212)">
                        <path
                          d="m 392.74279,-12.27948 h -71.21026 c -61.03471,0 -61.03471,-93.20769 5.20191,-93.20769 h 90.48202 35.06893"
                          id="path993-9"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m 452.28539,-105.48717 -38.8891,38.05115" id="path995-1"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m 452.28539,-105.48717 -38.8891,-38.05115" id="path997-1"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2214" transform="translate(56.75471,-1230.2967)">
                        <path
                          d="m -460.4089,-314.90398 h 71.21026 c 61.0347,0 61.0347,-93.20769 -5.20191,-93.20769 h -90.48202 -35.06893"
                          id="path1801"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -519.9515,-408.11167 38.8891,38.05115" id="path1803"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -519.9515,-408.11167 38.8891,-38.05115" id="path1805"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2197" transform="translate(-1808.65,-1076.8045)">
                        <path d="M 184.0267,-110.90647 88.823128,-22.978113" id="path1803-1"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="M 184.0267,-110.90647 88.823128,-198.83482" id="path1805-1"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2193" transform="translate(-2672.4487,-836.66045)">
                        <path d="m -179.32648,-367.22226 95.203558,87.92835" id="path1803-1-2"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -179.32648,-367.22226 95.203558,-87.92836" id="path1805-1-8"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2226" transform="translate(164.23835,-1072.3573)">
                        <g id="g1871" style="stroke-width:0.97482073"
                          transform="matrix(1.0260175,0,0,1.0256418,-467.16513,-277.97446)">
                          <path d="m -158.46651,96.671625 38.88909,38.051155" id="path1803-14"
                            style="fill:none;stroke:#000000;stroke-width:9.02724552;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                          <path d="m -158.46651,96.671625 38.88909,-38.05115" id="path1805-8"
                            style="fill:none;stroke:#000000;stroke-width:9.02724552;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        </g>
                        <path
                          d="m -629.80255,-110.38615 c 0,27.680812 16.68063,52.63599 42.26373,63.228983 25.58311,10.592992 55.03053,4.737675 74.61101,-14.835612 19.58046,-19.573296 25.43792,-49.009931 14.84104,-74.583681 -10.59687,-25.57373 -35.13,-42.24554 -62.82095,-42.24554 l -68.84199,0.003"
                          id="path1884"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <path
                        d="m -1514.9723,-863.95421 h -175.9495 l 90.0418,-75.8658 z m -106.8185,100.0737 h -46.5326 v -100.0739 h 129.1794 v 100.0739 h -46.5326 m -36.1145,-0.1181 v -48.0593 0 h 36.1147 v 48.0593"
                        id="path1891"
                        style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                      <g id="g2220" transform="translate(-24.144967,-1106.224)">
                        <g id="g1919" style="stroke-width:0.97482073"
                          transform="matrix(-1.0260175,0,0,1.0256418,-903.16509,-277.97446)">
                          <path d="m -158.46651,96.671625 38.88909,38.051155" id="path1915"
                            style="fill:none;stroke:#000000;stroke-width:9.02724552;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                          <path d="m -158.46651,96.671625 38.88909,-38.05115" id="path1917"
                            style="fill:none;stroke:#000000;stroke-width:9.02724552;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        </g>
                        <path
                          d="m -740.52767,-110.38615 c 0,27.680812 -16.68063,52.63599 -42.26373,63.228983 -25.58311,10.592992 -55.03053,4.737675 -74.61101,-14.835612 -19.58046,-19.573296 -25.43792,-49.009931 -14.84104,-74.583681 10.59687,-25.57373 35.13,-42.24554 62.82095,-42.24554 l 68.84199,0.003"
                          id="path1921"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2107" transform="translate(-240.94651,-1137.5163)">
                        <circle cx="-690.90137" cy="-1105.1691" id="path1934" r="87.973946"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          transform="rotate(45)" />
                        <circle cx="-690.90137" cy="-1105.1691" id="circle1936" r="59.536469"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          transform="rotate(45)" />
                        <path d="m 335.03003,-1227.9151 20.04987,20.0499" id="path1962"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m 230.78314,-1332.162 20.04987,20.0499" id="path1940"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m 250.833,-1227.9151 -20.04986,20.0499" id="path1955"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m 355.0799,-1332.162 -20.04987,20.0499" id="path1942"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2185" transform="translate(-291.46694,-1158.5175)">
                        <ellipse cx="452.39822" cy="693.55414" id="ellipse1423-3" rx="31.198929" ry="31.634565"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          transform="matrix(-9.6138809e-5,-1,1,9.0481721e-5,0,0)" />
                        <path d="m 837.76177,-452.3395 -112.58661,-0.006" id="path1425-8"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m 781.1025,-426.26069 0.006,-26.05829" id="path1992"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m 799.02985,-430.77546 0.006,-21.57197" id="path1994"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m 816.9572,-426.2826 0.006,-26.0583" id="path1998"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <path
                        d="m -112.51194,-183.04153 38.319677,95.424145 102.595188,6.9565 -78.912325,65.931857 25.087632,99.723499 -87.090172,-54.676016 -87.09018,54.676012 25.08764,-99.723494 -78.91232,-65.931866 102.59518,-6.956492 z"
                        id="path2006"
                        style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:14.84131432;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                        transform="matrix(0.62426871,0,0,0.62365538,895.34637,-1173.309)" />
                      <g id="g2209" transform="translate(-1.4089037,-1533.7002)">
                        <ellipse cx="518.29993" cy="619.60132" id="ellipse1490-5" rx="23.976822" ry="23.822092"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26110744;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          transform="matrix(0.50750515,-0.86164873,0.87029421,0.49253221,0,0)" />
                        <ellipse cx="406.42236" cy="684.8418" id="ellipse2023" rx="23.976822" ry="23.822092"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26110744;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          transform="matrix(0.50750515,-0.86164873,0.87029421,0.49253221,0,0)" />
                        <ellipse cx="525.33441" cy="762.38867" id="ellipse2025" rx="23.976822" ry="23.822092"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26110744;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          transform="matrix(0.50750515,-0.86164873,0.87029421,0.49253221,0,0)" />
                        <path d="m 827.83933,-128.56733 76.63311,38.524913" id="path2042"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m 823.82442,-23.719791 84.73882,-42.599805" id="path2046"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2054" transform="rotate(90,-767.89394,-2037.6176)">
                        <path d="M 18.239132,-367.22227 113.4427,-455.15062" id="path2048"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m 18.23914,-367.22227 95.20356,87.92836" id="path2050"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2060" transform="matrix(0,-1,-1,0,-2440.5654,-1139.8306)">
                        <path d="M 18.239132,-367.22227 113.4427,-455.15062" id="path2056"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m 18.23914,-367.22227 95.20356,87.92836" id="path2058"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2314" transform="translate(-516.09273,-545.50889)">
                        <g id="g2266" transform="translate(-2502.509,196.92612)">
                          <g id="g2274-8" transform="translate(1989.0802,-136.04491)">
                            <path d="m -179.32648,-367.22226 95.203558,-62.4843" id="path2264-2"
                              style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                            <path d="m -179.32648,-367.22226 95.203558,62.4843" id="path2270-3"
                              style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                          </g>
                          <path d="m 1800.4444,-591.19554 v 175.8567" id="path2268-6"
                            style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        </g>
                      </g>
                      <g id="g2307" transform="translate(-398.88743,-550.17048)">
                        <g id="g2274" transform="matrix(-0.99999999,0,0,0.99999999,-537.4539,65.542778)">
                          <path d="m -179.32648,-367.22226 95.203558,-62.4843" id="path2264"
                            style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                          <path d="m -179.32648,-367.22226 95.203558,62.4843" id="path2270"
                            style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        </g>
                        <path d="m -348.81804,-389.60782 v 175.85669" id="path2268"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2390" transform="translate(1422.7737,-675.91523)">
                        <ellipse cx="-1833.8696" cy="-222.45903" id="circle2373" rx="41.306015" ry="41.448803"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <path
                          d="m -1921.5762,-88.029044 h 175.4132 m -175.4132,2e-6 a 87.974326,86.256897 0 0 1 -0.2678,-6.724292 87.974326,86.256897 0 0 1 87.9743,-86.256896 87.974326,86.256897 0 0 1 87.9744,86.256896 v 0 a 87.974326,86.256897 0 0 1 -0.2679,6.725982"
                          id="path2385"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2400" transform="translate(-4.6466675)" />
                      <path
                        d="m 67.944372,-879.66206 c -5.379,-20.22358 -23.8631,-34.31947 -45.0035,-34.31947 -1.6883,0 -3.3754,0.0908 -5.0537,0.27224 m -39.8743,34.0132 c -0.5235,-0.0196 -1.0473,-0.0294 -1.5711,-0.0294 -22.901,-10e-6 -41.4659,18.36411 -41.4659,41.01743 0,9.84637 2.1625,21.35929 10.0738,26.79863 42.6468,29.3213 113.1667,29.32745 155.809298,2e-5 7.9097,-5.43989 10.0648,-16.95225 10.0648,-26.79862 0,-22.65332 -18.564898,-41.01744 -41.465898,-41.01743 -0.5238,0 -1.0476,0.01 -1.5711,0.0294 m -89.9315,0.034 c 5.379,-20.22358 23.8630997,-34.31947 45.0035,-34.31947 1.6883,0 3.3754,0.0908 5.0537,0.27224"
                        id="path2510"
                        style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                      <rect height="175.94791" id="rect2519"
                        style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                        width="175.94791" x="-429.92664" y="-2070.0535" />
                      <g id="g2543" style="opacity:1" transform="translate(108.06574,-1823.5804)">
                        <rect height="25.929165" id="rect2525"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          width="25.929165" x="-516.69342" y="-200.03868" />
                        <rect height="25.929165" id="rect2527"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          width="25.929165" x="-462.983" y="-200.03868" />
                        <rect height="25.929165" id="rect2529"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          width="25.929165" x="-409.27258" y="-200.03868" />
                        <rect height="25.929165" id="rect2531"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          width="25.929165" x="-516.69342" y="-142.88869" />
                        <rect height="25.929165" id="rect2533"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          width="25.929165" x="-462.983" y="-142.88869" />
                        <rect height="25.929165" id="rect2535"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          width="25.929165" x="-409.27258" y="-142.88869" />
                      </g>
                      <rect height="139.34364" id="rect2545"
                        style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                        width="175.94791" x="-429.92664" y="-2051.7512" />
                      <g id="g2135-2" transform="translate(-65.37061,-968.71081)">
                        <rect height="175.95261" id="rect989-0-8"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          width="116.03008" x="-1630.547" y="-1101.345" />
                        <g id="g2645">
                          <path d="m -1696.5682,-1013.3687 h 132.0424" id="path993-1-6"
                            style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                          <path d="m -1564.5259,-1013.3687 -38.8891,38.05119" id="path995-0-7"
                            style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                          <path d="m -1564.5259,-1013.3687 -38.8891,-38.0511" id="path997-6-6"
                            style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        </g>
                      </g>
                      <g id="g2597" transform="translate(1196.0887,623.78773)">
                        <rect height="175.95261" id="rect2589"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:6.19999981;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          width="116.03008" x="-2486.6648" y="-2693.8435" />
                        <path d="m -2420.6435,-2605.8673 h -132.0424" id="path2591"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -2552.6858,-2605.8673 38.8891,38.0512" id="path2593"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m -2552.6858,-2605.8673 38.8891,-38.0511" id="path2595"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <g id="g2694" transform="translate(-131.23332,-432.5953)">
                        <path d="m 510.39322,-419.2546 h 99.0598" id="path2325"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m 510.39322,-478.4401 h 99.0598" id="path2327"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m 510.39322,-360.06921 h 99.0598" id="path2329"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <circle cx="491.23651" cy="-478.44009" id="path1755" r="4.630208"
                          style="opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:bevel;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <circle cx="491.23651" cy="-419.25464" id="path1755-5" r="4.630208"
                          style="opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:bevel;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <circle cx="491.23651" cy="-360.06921" id="path1755-2" r="4.630208"
                          style="opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:bevel;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <path d="m 433.62349,-419.2546 h 38.45635" id="path2653"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m 433.62349,-478.4401 h 38.45635" id="path2655"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                        <path d="m 433.62349,-360.06921 h 38.45635" id="path2657"
                          style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      </g>
                      <path
                        d="m -2794.5038,-2031.0828 c -7.0159,-7.7603 -14.0319,-15.5207 -21.0478,-23.281 -11.7868,0 -23.5737,0 -35.3605,0 m -32.9111,23.281 c 7.0159,-7.7603 14.0319,-15.5207 21.0478,-23.281 11.7868,0 23.5737,0 35.3605,0 m 111.2154,144.5691 c -58.6493,0 -117.2986,0 -175.9479,0 0,-40.4294 0,-80.8587 0,-121.2881 58.6493,0 117.2986,0 175.9479,0 0,40.4294 0,80.8587 0,121.2881 z"
                        id="path2662"
                        style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      <g id="g2742">
                        <rect height="105.58412" id="rect2666"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041508;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
                          width="175.94792" x="744.32074" y="-2034.8716" />
                        <path d="m 920.26868,-2034.8716 -175.96193,-0.3367 87.69092,78.011 z" id="path2668"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <path
                          d="m 803.84583,-1981.9173 -59.539,52.9667 175.96185,-0.3369 -59.79582,-52.6174 -28.46131,25.0444 z"
                          id="path2671"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                      </g>
                      <path
                        d="m -1185.807,-2341.5635 v -133.0631 h -42.6218 v 155.0684 h 61.8115 v -175.9433 h -83.0773 v 153.938"
                        id="path2677"
                        style="fill:none;stroke:#000000;stroke-width:9.26041603;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                      <g id="g2737" transform="translate(-30.107552,-18.971792)">
                        <path
                          d="m 763.41671,-840.01578 a 150.88508,154.11206 0 0 1 50.68894,-8.95671 150.88508,154.11206 0 0 1 50.68635,8.95576"
                          id="path2696"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <path
                          d="m 744.75814,-872.99241 a 187.68634,191.70036 0 0 1 69.35474,-13.56839 187.68634,191.70036 0 0 1 69.33769,13.56145"
                          id="circle2698"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <path
                          d="m 726.19227,-905.84079 a 224.48756,229.28865 0 0 1 87.90085,-18.30833 224.48756,229.28865 0 0 1 87.92332,18.3181"
                          id="circle2700"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                        <ellipse cx="814.10437" cy="-798.31799" id="path2723" rx="18.761122" ry="18.7672"
                          style="opacity:1;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:9.26041603;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
                      </g>
                    </g>
                  </svg>
                  <span>Download</span>
                </a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <button class="text-xs bg-gray-200 text-black p-1" @click="showPayload">Payload</button>
    </div>
    <div x-show="payload" class="p-4 whitespace-wrap bg-neutral-800 text-pink-200">
      <code>{{ $dataset }}</code>
    </div>
  </div>
  @include('components.footer')
</x-guest-layout>

<script>
  const datasetView = () => {
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

    return data;
  }
</script>
