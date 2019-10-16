@extends('layouts.dbapp')

@section('content')

<div class="main-content-wrap sidenav-open d-flex flex-column">
                <div class="main-content">
                    
<div class="breadcrumb">
    <h1>Project Details</h1>
    
</div>
<div class="separator-breadcrumb border-top"></div>

<!-- content goes here -->

<section class="ul-Project-detail">
    <div class="row">
        <div class="col-lg-6 col-xl-6">
            <div class="card mb-4 mt-4">
                <div class="card-body">
                    <div class="ul-Project-detail__info">
                        <div class="row">
                            <div class="col-12 text-center mb-2">
                                <div class="ul-Project-detail__info-1">
                                    <h4 class='text-primary'>Topic</h4>
                                    <h4>{{$project->topic}}</h5>
                                </div>
                                
                            </div>
                            <div class="col-12 text-center m-2">
                                <div class="ul-Project-detail__info-1">
                                    <h4 class='text-primary'>Domain</h4>
                                    <h4>{{strtoupper($project->domain)}}</h5>
                                </div>
                                 
                            </div>
                            <div class="col-12 text-center m-2">
                                <div class="ul-Project-detail__info-1">
                                    <h4 class='text-primary'>Mentor</h4>
                                    <h4>{{($project->mentor->name)}}</h5>
                                </div>
                                 
                            </div>
                            <div class="col-12 text-center m-2">
                                <div class="ul-Project-detail__info-1">
                                    <h4 class='text-primary'>Upload By</h4>
                                    <h4>Roll No:{{($project->user->roll_no)}}</h5>
                                </div>
                                 
                            </div>
                            
                            <div class="col-12 text-center mb-4 mt-4">
                                @if ($project->github_link)
                                <a href="{{$project->github_link}}" target="_blank">
                                 <button type="button" class="btn btn-dark btn-icon m-1">
                                      <span class="ul-btn__icon"><i class="i-Coding"></i></span>
                                      <span class="ul-btn__text">Github Link</span>
                                  </button> 
                                  </a>  
                                @endif
                                    @if ($project->video)
                                <a href="{{$project->video}}">
                                <button type="button" class="btn btn-danger btn-icon m-1">
                                      <span class="ul-btn__icon"><i class="i-Youtube"></i></span>
                                      <span class="ul-btn__text">Video Link</span>
                                  </button>
                                  </a>  
                                @endif
                                  
                                
                            </div>
                            <div class="col-12 text-center mb-4 mt-4">
                                <div class="ul-bottom__line mb-3">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://dreamspace.ml/{{$project->id}}&title={{$project->topic}}">
                                <button type="button" class="btn btn-facebook btn-icon m-1">
                                      <span class="ul-btn__icon"><i class="i-Facebook-2"></i></span>
                                  </button></a>
                                <a href="http://mailto:?subject={{$project->topic}}&body=https://dreamspace.ml/{{$project->id}}">
                                <button type="button" class="btn btn-primary btn-icon m-1">
                                      <span class="ul-btn__icon"><i class="i-Mail"></i></span>
                                  </button></a>
                                  <a href="https://twitter.com/intent/tweet?url=https://dreamspace.ml/{{$project->id}}&text={{$project->topic}} shared by dreamspace">
                                <button type="button" class="btn btn-twitter btn-icon m-1">
                                      <span class="ul-btn__icon"><i class="i-Twitter"></i></span>
                                  </button>        
                                </a>                       
                            </div>
                                  
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-6">
            <div class="card mb-4 mt-4">
                <div class="card-header bg-transparent">Project Details</div>
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Details</a>
                            {{-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a> --}}
                            @if(Auth::id()===$project->user->id)
                            <a class="nav-item nav-link" id="nav-Project-tab" data-toggle="tab" href="#nav-Project" role="tab" aria-controls="nav-Project" aria-selected="false">Edit Project</a>
                            @endif
                        </div>
                    </nav>
                    <div class="tab-content ul-tab__content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                           <div class="ul-Project-detail__timeline">
                             <div class="row">
                                <div class="col-lg-12 col-xl-12">
                                   
                                    <div class="ul-Project-detail__timeline-row">
                                            <div class="row">
                                                    
                                                    <div class="col-lg-12 text-center">
                                                        @if ($project->report)
                                                           <div class="ul-Project-detail__right-timeline">
                                                            <a href="" class="ul-widget4__title d-block">Project Report</a> 
                                                            <small class="text-mute"></small>
                                                            
                                                            <div class="ul-Project-detail__timeline-image-2 mt-3">
                                                                <div class="ul-Project-detail__timeline-image-info">
                                                                    <button type="button" class="btn btn-primary btn-lg m-1"  data-toggle="modal" data-target="#exampleModal">View Project Report</button>
                                                                    <a href="/{{$project->report}}" target="_blank"><button type="button" class="btn btn-primary btn-lg m-1" >Open in another tab</button></a>

                                                                </div>  
                                                            </div>
                                                            
                                                        </div>  
                                                        @endif
                                                        @if ($project->presentation)
                                                           <div class="ul-Project-detail__right-timeline mb-4 mt-4">
                                                            <a href="#" class="ul-widget4__title d-block">Project Presentation</a> 
                                                            <small class="text-mute"></small>
                                                            
                                                            <div class="ul-Project-detail__timeline-image-2 mt-3">
                                                                <div class="ul-Project-detail__timeline-image-info">
                                                                    <a href="/{{$project->presentation}}" target="_blank"><button type="button" class="btn btn-primary btn-lg m-1" >Download Presentation</button></a>
                                                                </div>  
                                                            </div>
                                                            
                                                        </div>  
                                                        @endif
                                                        @if ($project->is_research_published===1)
                                                           <div class="ul-Project-detail__right-timeline mb-4 mt-4">
                                                            <a href="#" class="ul-widget4__title d-block">Research Paper Link</a> 
                                                            <small class="text-mute"></small>
                                                            
                                                            <div class="ul-Project-detail__timeline-image-2 mt-3">
                                                                <div class="ul-Project-detail__timeline-image-info">
                                                                    <a href="/{{$project->research_paper}}" target="_blank"><button type="button" class="btn btn-primary btn-lg m-1" >Go to Link</button></a>
                                                                </div>  
                                                            </div>
                                                            
                                                        </div>  
                                                        @endif
                                                        
                                                    </div>
                                            </div>
                                    </div>

                    

                                  
                                    
                              
                                </div>
                                
                               
                            </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-lg-12 col-xl-12">
                                    <div class="ul-Project-detail__profile">
                                       <div class="ul-Project-detail__inner-profile">
                                          <h4 class="heading">Full Name</h4>
                                          <span class="tetx-muted">Timity Clarkson</span>
                                       </div>

                                       <div class="ul-Project-detail__inner-profile">
                                            <h4 class="heading">Full Name</h4>
                                            <span class="tetx-muted">Timity Clarkson</span>
                                         </div>
                                       <div class="ul-Project-detail__inner-profile">
                                            <h4 class="heading">Full Name</h4>
                                            <span class="tetx-muted">Timity Clarkson</span>
                                         </div>
                                       <div class="ul-Project-detail__inner-profile">
                                            <h4 class="heading">Full Name</h4>
                                            <span class="tetx-muted">Timity Clarkson</span>
                                         </div>
                                    </div>
                                    <div class="custom-separator"></div>
                                </div>
                               
                                <div class="col-lg-12 col-xl-12">
                                    <div class="ul-Project-dwtail__profile-swcription">
                                        <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-xl-12">
                                    <h4 class="card-title mb-3">Skills</h4>
                                    <div class="custom-separator"></div>
                                    
                                    <span class=""> Wordpress</span>
                                    <div class="progress mb-3 mt-2">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                                    </div>

                                    <span class=""> HTML 5</span>
                                    <div class="progress mb-3 mt-2">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>

                                    <span>React.js</span>
                                    <div class="progress mb-3 mt-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>

                                    <span>Photoshop</span>
                                    <div class="progress mb-3 mt-2">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-Project" role="tabpanel" aria-labelledby="nav-Project-tab">
                                <form >
                                    
                                    <input type="hidden" name="_token" value="FcTqO4oAd6QxesbEPhGoTiNYdIkry9PjBeGSi1re">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                            </div>
                                        </div>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <div class="col-form-label col-sm-2 pt-0">Radios</div>
                                                <div class="col-sm-10">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                                                        <label class="form-check-label ml-3" for="gridRadios1">
                                                            First radio
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                        <label class="form-check-label ml-3" for="gridRadios2">
                                                            Second radio
                                                        </label>
                                                    </div>
                                                    <div class="form-check disabled ">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled="">
                                                        <label class="form-check-label ml-3" for="gridRadios3">
                                                            Third disabled radio
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-sm-2">Checkbox</div>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                    <label class="form-check-label ml-3" for="gridCheck1">
                                                        Example checkbox
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::basic-tab -->
        </div>
    </div>
</section>


                </div>@include('common.footer')
                
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Project Report</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="report"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
           


@endsection

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js"></script>
<script>
PDFObject.embed("/{{$project->report}}", "#report");</script>
@endpush