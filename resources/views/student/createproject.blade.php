@extends('layouts.dbapp')

@section('content')

<!-- ============ Body content start ============= -->
 <div class="main-content-wrap sidenav-open d-flex flex-column">
                <div class="main-content">
                      <div class="breadcrumb">
                <h1>Create Project</h1>
                
            </div>

            <div class="separator-breadcrumb border-top"></div>
            <div class="row mb-3">
              
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- SmartWizard html -->
                     <form action="/project" method="post" id='myform' enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                    <div id="smartwizard">
                        <ul>
                            <li><a href="#step-1">1<br><small>Enter Project Topic,Domain</small></a></li>
                            <li><a href="#step-2">2<br><small>Project Information</small></a></li>
                            <li><a href="#step-3">3<br><small>Paper Information</small></a></li>
                        </ul>
                           

                        <div>

                            <div id="step-1" class="">
                                <h3 class="border-bottom border-gray pb-2">Project Detail</h3>
                               <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="topic">Project Topic *</label>
                                    <input type="text" class="form-control @error('topic') is-invalid @enderror" value="{{old('topic')}}"  id="topic" placeholder="Project Name"
                                        name='topic' required>
                                    @error('topic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                 <div class="col-md-6 form-group mb-3">
                                    <label for="staff_id">Project Mentor *</label>
                                        <select class="form-control @error('staff_id') is-invalid @enderror" value="{{old('staff_id')}}"  id="staff_id" placeholder="select Professor"
                                        name='staff_id' required>
                                           @foreach ($staffs as $staff)
                                               <option value="{{$staff->id}} ">{{$staff->name}}</option>
                                           @endforeach
                                        </select>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group mb-3">
                                    <label for="domain">Project Domain *</label>
                                        <select class="form-control @error('domain') is-invalid @enderror" value="{{old('domain')}}"  id="domain" placeholder="select Professor"
                                        name='domain' required>
                                               <option value="ml">Machine Learning</option>
                                               <option value="dsa">DSA</option>
                                               <option value="iot">IOT</option>
                                               <option value="web">Web Devolopment</option>
                                        </select>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                                 <div class="row ">
                                <div class="col-md-12 form-group mb-3">
                                     <fieldset class="col-md-12 col-lg-12 form-group mb-3">
                                <label>Technologies Used *</label>
                                <div class="form-group">
                                    <div data-no-duplicate="true" data-pre-tags-separator="\n" data-no-duplicate-text="Duplicate tags" data-type-zone-class="type-zone" data-tag-box-class="tagging" data-edit-on-delete="false" class="tagBox"></div>
                                
                                </div>
                            </fieldset>
                                </div>
                            </div>
                            
                                
                            </div>
                            <div id="step-2" class="">
                                <h3 class="border-bottom border-gray pb-2">Project Information</h3>
                                <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="github_link">Project github_link </label>
                                    <input type="url" class="form-control @error('github_link') is-invalid @enderror" value="{{old('github_link')}}"  id="github_link" placeholder="Project Name"
                                        name='github_link'>
                                    @error('github_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                 <div class="col-md-6 form-group mb-3">
                                    <label for="video">Project Video Link</label>
                                    <input type="url" class="form-control @error('video') is-invalid @enderror" value="{{old('video')}}"  id="video" placeholder="Project Name"
                                        name='video' >
                                    @error('video')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                 <div class="col-md-6 col-lg-6 form-group col-md-12">
                                                        <label for="report" class="ul-form__label">Project Report</label>
                                                        <div class="input-group mb-3">
                                                            <div class="custom-file">
                                                                <input type="file" class="form-control-file" id="report" name="report">
                                                                <label class="custom-file-label" for="report" aria-describedby="report">Upload Project REPORT</label>
                                                            </div>
                                                            {{-- <div class="input-group-append">
                                                                <span class="input-group-text" id="report-label">Upload</span>
                                                            </div> --}}
                                                        </div>

                                                        <small  class="ul-form__text form-text ">
                                                                        Only Upload PDF Files
                                                                </small>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 form-group col-md-12">
                                                        <label for="presentation" class="ul-form__label">Project Presentation</label>
                                                        <div class="input-group mb-3">
                                                            <div class="custom-file">
                                                                <input type="file" class="form-control-file" id="presentation" name='presentation'>
                                                                <label class="custom-file-label" for="presentation" aria-describedby="presentation">Choose
                                                                        file</label>
                                                            </div>
                                                           
                                                        </div>

                                                        <small  class="ul-form__text form-text ">
                                                                        Only Upload PPT Files
                                                                </small>
                                                    </div>
                            </div>
                            </div>
                            <div id="step-3" class="">
                                <h3 class="border-bottom border-gray pb-2">Paper Information</h3>
                              
                                                       <div class="form-group row ">
                                                           <div class="col-sm-3"></div>
                                    <div class="col-sm-4 text-center">Do you have published paper?</div>
                                   
                                        <div class="form-check">
                                            <input class="form-check-input" value="1" type="checkbox" id="is_paper_published" name='is_paper_published' >
                                            <label for="is_paper_published" class=form-check-label>Yes</label>
                                        
                                        </div>
                                     <div class="col-md-12 form-group mb-3" id="re">
                                    <label for="research_paper">Project Research Paper Link</label>
                                    <input type="url" class="form-control @error('research_paper') is-invalid @enderror" value="{{old('research_paper')}}"  placeholder="Research Paper Link"
                                        name='research_paper' required>
                                    @error('research_paper')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                </div>
                                
                                
                                        </div> 
                                
                           
                            
                        </div>
                        
                    </div>
                </div>
                </form>
            </div>


                </div>

    @include('common.footer')
</div>


@endsection

@push('script')
<script>
$(document).ready(function() {
    //set initial state.
     $('#re').hide();

    $('#is_paper_published').change(function() {
        console.log('adjbadjj');
        
        if($("#is_paper_published").prop('checked') == true) {
            console.log('sdsjanjdnsjn');
            $('#re').show(); 
        }
        if($("#is_paper_published").prop('checked') == false) {
            console.log('sdsjanjdnsjn');
             $('#re').hide();  
        }
       
        // $('#is_paper_published').val(this.checked);        
    });
});
$(document).ready(function () {

    // Step show event
    $("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
        //alert("You are on step "+stepNumber+" now");
        if (stepPosition === 'first') {
            $("#prev-btn").addClass('disabled');
            $(".sumbit-btn").hide();
        } else if (stepPosition === 'final') {
            $("#next-btn").addClass('disabled');
            $(".sumbit-btn").show();
        } else {
            $("#prev-btn").removeClass('disabled');
            $("#next-btn").removeClass('disabled');
            $(".sumbit-btn").hide();

        }
    });

    $("#smartwizard").on("leaveStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
        // alert("You are on step "+stepNumber+" now");

         if(stepDirection === 'forward'){
        var trus=$("#myform").validate({
            errorClass: "is-invalid text-danger"
            });
        console.log(trus.form());
        return trus.form();
         }

    });
    

    // Toolbar extra buttons
    var btnFinish = $('<button></button>').text('Sumbit')
        .addClass('btn btn-info sumbit-btn')
        .on('click', function () { var trus=$("#myform").validate({
            submitHandler: function(form) {
    form.submit();
  }
            });
        console.log(trus.form()); });
    var btnCancel = $('<button></button>').text('Cancel')
        .addClass('btn btn-danger')
        .on('click', function () { $('#smartwizard').smartWizard("reset"); });


    // Smart Wizard
    $('#smartwizard').smartWizard({
        theme: 'default',
        transitionEffect: 'fade',
        showStepURLhash: false,
        toolbarSettings: {
            toolbarPosition: 'end',
            toolbarButtonPosition: 'end',
            toolbarExtraButtons: [btnFinish, btnCancel]
        }
    });
});
</script>

 @if(session()->has('success'))
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
@if ($errors->any())
 @foreach ($errors->all() as $error)

     <script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 4000
    })

    Toast.fire({
    type: 'warning',
    title: '{{$error}}'
    })
</script>
@endforeach
@endif
@endpush