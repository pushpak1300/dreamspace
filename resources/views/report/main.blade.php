@extends('layouts.dbapp')

@section('content')

<!-- ============ Body content start ============= -->
<div class="main-content-wrap sidenav-open d-flex flex-column">
                <div class="main-content">
                      <div class="breadcrumb">
                <h1>Report</h1>
               
            </div>
            <div class="separator-breadcrumb border-top"></div>

            
            <!-- end of row -->

            <div class="row mb-4">
                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h2 class="card-title mb-3"> Report Genration</h2>
                            <form action="/report" method="POST">
                                @csrf
                                @method("POST")
                            <div class="col-md-12 form-group mb-3">
                                    <label for="report">Report *</label>
                                        <select class="form-control @error('report') is-invalid @enderror" value="{{old('report')}}"  id="report" placeholder="select Professor"
                                        name='report' required>
                                               <option value="year">YEAR WISE</option>
                                               <option value="dep">DEPARTMENT WISE</option>
                                               <option value="all">ALL</option>
                                               <option value="class">CLASS WISE</option>
                                        </select>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                 <div class="col-md-3 form-group mb-3">
                                         <button class="btn btn-primary">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
@include('common.footer')
                
                </div>
            </div>


@endsection

@push('script')

<script> 
</script>
@endpush