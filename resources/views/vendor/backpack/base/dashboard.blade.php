@extends(backpack_view('blank'))

@php
   
     $widgets['before_content'][] = [
    'type'        => 'progress',
    'class'       => 'card text-white text-center bg-primary mb-2',
    'value'       => '30+',
    'description' => 'Doctors',
   
];

    $widgets['before_content'][] = [
    'type'        => 'progress',
    'class'       => 'card text-white text-center bg-primary mb-2',
    'value'       => '30+',
    'description' => 'Nurse',
   
];

    $widgets['before_content'][] = [
    'type'        => 'progress',
    'class'       => 'card text-white text-center bg-primary mb-2',
    'value'       => '100+',
    'description' => 'Patients',
//     'progress'    => 57, // integer
//     'hint'        => '8544 more until next milestone.',
 ];

 

  
   

    
@endphp

@section('content')
 
@endsection