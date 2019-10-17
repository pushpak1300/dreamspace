@extends('layouts.dbapp')

@section('content')

<!-- ============ Body content start ============= -->
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <div class="main-content">
        <div class="breadcrumb">
            <h1>Staff</h1>

        </div>

        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title mb-3"> Add Staff</div>
                        <form action="{{ route('storestaff') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}"  id="name" placeholder="Jhon Traversy"
                                        name='name' required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                                <div class="col-md-6 form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" placeholder="abc@gmail.com"
                                        name='email' required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="*********"
                                        minlength="8" name='password' required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="confirmpassword"> Confirm Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="confirmpassword"
                                        placeholder="*********" minlength="8" name='password_confirmation' required>
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>




                                <div class="col-md-6">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>





        </div>


    </div>

    @include('common.footer')
</div>


@endsection

@push('script')
 @if (session()->has('success'))
    <script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 4000
    })

    Toast.fire({
    type: 'success',
    title: '{{session()->get('success')}}'
    })
</script>
@endif
@endpush