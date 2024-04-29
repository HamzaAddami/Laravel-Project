<x-master title="Insert">
    @if ($errors->any())
        <x-alert type="danger" class="mb-4"> 
            <h3>Errors</h3>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </x-alert>
    @endif
    <section class="intro">
        <div class="mask d-flex align-items-center h-100 gradient-custom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card">
                            <div class="card-body p-4 p-md-5">
                                <h2 class="mb-4 text-center pb-2">Add Product</h2>

                                <form method="POST" action="{{route('Store')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <label class="form-label">Product Name</label>
                                                <input type="text" name="name" class="form-control" />
                                                @error('name')
                                                    <div class="div text-danger">{{$message}}</div>
                                                @enderror
                                            </div>


                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label">Price</label>
                                                <input type="number" class="form-control" name="price" />
                                                @error('price')
                                                    <div class="div text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label">Stock</label>
                                                <input type="number" name="stock" class="form-control" />
                                                @error('stock')
                                                <div class="div text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>



                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-4">

                                            <div class="form-outline">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control" name="description" placeholder="Description..." rows="3"></textarea>
                                                @error('description')
                                                    
                                                <div class="div text-danger">{{$message}}</div>
                                                    
                                                @enderror
                                            </div>

                                        </div>

                                    </div>

                                    <div class="d-grid">
                                        <input class="btn btn-success btn-block" type="submit" value="Add" />
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-master>  


 
