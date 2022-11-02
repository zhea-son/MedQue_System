<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <u><h1>Appointment</h1></u>
                <br>
                <h3 style="font-size:20px;">Request an appointment</h3>
                <br>
                <b>Date</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" placeholder="07/2/2022">
                <br><br>
                <b>Disease</b> &nbsp&nbsp<input type="text" >
                <br><br>
                <input type="submit" value="Search" style="background-color:rgb(76, 126, 252);padding:7px;color:white; border-radius:3px; cursor:pointer;">
                </div>
            </div>
        </div>
        {{-- table of search --}}
        <div class="flex flex-col text-center  mx-10 my-5">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 text-center">
              <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-full">
                    <thead class="border-b">
                      <tr>
                        <th scope="col" class="text-sm text-center font-medium text-gray-900 px-6 py-4 text-left">
                          <b>#</b>
                        </th>
                        <th scope="col" class="text-sm text-center font-medium text-gray-900 px-6 py-4 text-left">
                          <b>Disease</b>
                        </th>
                        <th scope="col" class="text-sm text-center font-medium text-gray-900 px-6 py-4 text-left">
                          <b>Date</b>
                        </th>
                      
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="border-b">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          Mark
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          6/11/2022
                        </td>
                       
                      </tr>
                      <tr class="bg-white border-b">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          Jacob
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            6/11/2022

                        </td>
                       
                      </tr>
                      <tr class="bg-white border-b">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          Larry
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            6/11/2022
                        </td>
                        
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</x-app-layout>
