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
                <form method="GET" action="/availability">
                <b>Date</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date">
                <br><br>
                <b>Department</b> &nbsp;&nbsp;
                <select class="form-select appearance-none
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding bg-no-repeat
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  @foreach ($depts as $dept)
                    <option value="{{ $dept->id }}">{{ $dept->name }} </option>
                  @endforeach
              </select>
                <br><br>
                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                  Search
                </button>
                </form>
              </div>
            </div>
        </div>
    </div>
</x-app-layout>
