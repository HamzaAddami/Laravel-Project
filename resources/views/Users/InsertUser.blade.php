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
                                <h2 class="mb-4 text-center pb-2">Sign In </h2>

                                <form method="POST" action="{{route('StoreUser')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-4 m-auto">

                                            <div class="form-outline">
                                                <label class="form-label text-success">Full Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Full Name" />
                                                @error('name')
                                                    <div class="div text-danger">{{$message}}</div>
                                                @enderror
                                            </div>


                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4 m-auto">
                                            <div class="form-outline">
                                                <label class="form-label text-success">Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email" />
                                                @error('email')
                                                    <div class="div text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4 m-auto">
                                            <div class="form-outline">
                                                <label class="form-label text-success">Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="Password" />
                                                @error('password')
                                                <div class="div text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        



                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4 m-auto">
                                            <div class="form-outline">
                                                <label class="form-label text-success">Confirmation Password</label>
                                                <input type="password" name="password_confirmation" class="form-control" placeholder="Password" />
                                                @error('password_confirmation')
                                                <div class="div text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                   
                                    <div class="row">

                                        <div class="d-grid col-md-7 mb-2 m-auto">
                                            <input class="btn btn-success btn-block" type="submit" value="Sign in" />
                                        </div>
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


 
