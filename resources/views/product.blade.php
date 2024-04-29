{{-- @extends('layouts.master')

@section('title')
    Profile
@endsection

@section('main')
@endsection --}}

<x-master title="Product" >

    <table class="table m-4">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Actions</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td><a class="btn btn-success" href="{{route('ProductDetail',$product->name)}}">Details</a></td>
            </tr>
        @endforeach
    </table>
    {{$products->links()}}

</x-master>