<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="flex items-center justify-center">
            <div class="overflow-x-auto">
              <table class="min-w-full bg-white shadow-md rounded-xl">
                <thead>
                  <tr class="bg-blue-gray-100 text-gray-700">
                    <th class="py-3 px-4 text-left">Reclamos por Trimestre</th>
                    <th class="py-3 px-4 text-left">Cantidad</th>
                    <th class="py-3 px-4 text-left">Resueltos</th>
                    <th class="py-3 px-4 text-left">No Resueltos</th>
                  </tr>
                </thead>
                <tbody class="text-blue-gray-900">
                  <tr class="border-b border-blue-gray-200">
                    <td class="py-3 px-4">Primer Trimestre</td>
                    <td class="py-3 px-4">25</td>
                    <td class="py-3 px-4">20</td>
                    <td class="py-3 px-4">5</td>
                  </tr>
                  <tr class="border-b border-blue-gray-200">
                    <td class="py-3 px-4">Segundo Trimestre</td>
                    <td class="py-3 px-4">15</td>
                    <td class="py-3 px-4">11</td>
                    <td class="py-3 px-4">4</td>
                  </tr>
                  <tr class="border-b border-blue-gray-200">
                    <td class="py-3 px-4">Tercer Trimestre</td>
                    <td class="py-3 px-4">20</td>
                    <td class="py-3 px-4">18</td>
                    <td class="py-3 px-4">2</td>
                  </tr>
                  <tr class="border-b border-blue-gray-200">
                    <td class="py-3 px-4">Cuarto Trimestre</td>
                    <td class="py-3 px-4">10</td>
                    <td class="py-3 px-4">7</td>
                    <td class="py-3 px-4">3</td>
                  </tr>
                  <!-- Add more rows as needed -->
                  <tr class="border-b border-blue-gray-200">
                    <td class="py-3 px-4 font-medium">Total</td>
                    <td class="py-3 px-4 font-medium">70</td>
                    <td class="py-3 px-4 font-medium">56</td>
                    <td class="py-3 px-4 font-medium">14</td>
                  </tr>
                </tbody>
              </table>
              <div class="w-full pt-5 px-4 mb-8 mx-auto ">
                
                </div>
              </div>
            </div>
          </div>
    </body>
</html> 