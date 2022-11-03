<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>
    <div class="flex flex-col justify-center  text-center border-solid ">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8  ">
          <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8  flex justify-center" >
            <div class="overflow-hidden border-solid border-2 border-slate-600 my-5 "  style="padding:50px;">
              <table class="min-w-100 ">
                <thead class="bg-white ">
                  <tr>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-8 py-4 text-left">
                      #
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-12 py-4 text-left">
                     <b> Doctors</b>
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-12 py-4 text-left">
                      <b>Time</b>
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-12 py-4 text-left">
                      <b></b>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      Mark
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      10:00
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                <button style="background-color:rgb(15, 96, 247);color:white;padding:5px;">Select</button>

                    </td>
                  </tr>
                  <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      Jacob
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      11:00
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <button style="background-color:rgb(15, 96, 247);color:white;padding:5px;">Select</button>
                    </td>
                  </tr>
                  <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      Larry
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        12:00
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <button style="background-color:rgb(15, 96, 247);color:white;padding:5px;">Select</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

</x-app-layout>