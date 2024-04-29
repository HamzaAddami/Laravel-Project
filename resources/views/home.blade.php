{{-- @extends('layouts.master')
@section('title')
    Home Page
@endsection --}}
<x-master title="Home" >
    
    
    <x-usersTable :users="$users"/>
    <x-alert type='success' message='Salaaam'/>
    <x-alert type='warning' message='Salaaam'/>
    <x-card />
    
    
    
    
</x-master>