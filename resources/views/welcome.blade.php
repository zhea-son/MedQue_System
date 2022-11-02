@extends('users.layouts.main')

@section('content')
    
    <div class="main flex justify-between h-3/6 ">
        <div class="care h-3/6 w-3/6">
        Medicare
        <br>
        Best health service
        <br>
        <div class="flex space-x-2 ">
            <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button>
          </div>
        </div>
        <img src="">
    </div>
<br><br>
    <div class="flex justify-around border-solid ">
        <div class="block rounded-lg shadow-lg bg-white max-w-sm text-center">
          <div class="py-3 px-6 border-b border-gray-300">
            Appointment
          </div>
          <div class="p-6">
            <h5 class="text-gray-900 text-xl font-medium mb-2">Doctors</h5>
            <p class="text-gray-700 text-base mb-4">
            Cardiologist
                    </p>
            <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">See</button>
          </div>
         
        </div>
        {{--  --}}
        <div class="block rounded-lg shadow-lg bg-white max-w-sm text-center">
            <div class="py-3 px-6 border-b border-gray-300">
              Appointment
            </div>
            <div class="p-6">
              <h5 class="text-gray-900 text-xl font-medium mb-2">Doctors</h5>
              <p class="text-gray-700 text-base mb-4">
              Cardiologist
                      </p>
              <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">See</button>
            </div>
           
          </div>
          {{--  --}}

          <div class="block rounded-lg shadow-lg bg-white max-w-sm text-center">
            <div class="py-3 px-6 border-b border-gray-300">
              Appointment
            </div>
            <div class="p-6">
              <h5 class="text-gray-900 text-xl font-medium mb-2">Doctors</h5>
              <p class="text-gray-700 text-base mb-4">
              Cardiologist
                      </p>
              <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">See</button>
            </div>
           
          </div>
      </div>

    
@endsection