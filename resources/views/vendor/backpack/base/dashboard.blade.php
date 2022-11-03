@extends(backpack_view('blank'))


@php
$widgets['before_content'][]=[
    'type'        => 'progress',
    'class'       => 'card text-white text-center d-flex justify-content-center bg-primary mb-2 py-2',
    'description' => 'Doctors Available',
    'value'       => '10',
 
];

$widgets['before_content'][]=[
    'type'        => 'progress',
    'class'       => 'card text-white text-center bg-primary mb-2 py-2',
    'description' => 'Nurse Available',
    'value'       => '20',
 
];
$widgets['before_content'][]=[
    'type'        => 'progress',
    'class'       => 'card text-white text-center bg-primary mb-2 py-2',
    'description' => 'Patients Available',
    'value'       => '100+',
    
];


@endphp 
@section('content')

@endsection