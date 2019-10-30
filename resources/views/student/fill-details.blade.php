@extends('layouts.dbapp')

@section('content')

<!-- ============ Body content start ============= -->
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <div class="main-content">
        <div class="breadcrumb">
            <h1>Fill Details</h1>

        </div>

        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title mb-3">Complete Your Profile</div>
                        <form action="{{ route('storestudentdetails') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                     <label for="branch">Branch *</label>
                                        <select class="form-control @error('branch') is-invalid @enderror" value="{{old('branch')}}"  id="branch" placeholder="select Professor"
                                        name='branch' required>
                                               <option value="it">Information Technology</option>
                                               <option value="comps">Computer Science</option>
                                               <option value="elex">Electronics</option>
                                               <option value="prod">Production</option>
                                        </select>
                                    @error('branch')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                                <div class="col-md-12 form-group mb-3">
                                    <label for="passing_year">Passing Year *</label>
                                        <select class="form-control @error('passing_year') is-invalid @enderror" value="{{old('passing_year')}}"  id="passing_year" placeholder="select Professor"
                                        name='passing_year' required>
                                               <option >2020</option>
                                               <option >2021</option>
                                               <option >2022</option>
                                               <option >2023</option>
                                        </select>
                                    @error('passing_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group mb-3">
                                  <label for="twitter_id">Twitter Id</label>
                                    <input type="url" class="form-control @error('twitter_id') is-invalid @enderror" value="{{old('twitter_id')}}"  id="twitter_id" placeholder="Jhon Traversy"
                                        name='twitter_id'>
                                    @error('twitter_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group mb-3">
                                   <label for="github_id">Github Id</label>
                                    <input type="url" class="form-control @error('github_id') is-invalid @enderror" value="{{old('github_id')}}"  id="github_id" placeholder="Jhon Traversy"
                                        name='github_id' >
                                    @error('github_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>




                                <div class="col-md-12">
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