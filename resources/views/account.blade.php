{{-- @extends('layouts.master')

@section('title')
    Account
@endsection

@section('main') --}}
{{-- @endsection --}}
<x-master title="Account" >

    <table class="table m-4">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                {{-- <td><a class="btn btn-success" href="{{route('ProductDetail',$product->name)}}">Details</a></td> --}}
            </tr>
        @endforeach
    </table>
    {{$users->links()}}

    <a href="{{route('InsertUser')}}"  class="btn btn-success m-auto">Add User</a>

</x-master>