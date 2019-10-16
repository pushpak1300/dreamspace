<!-- ============ Body content start ============= -->
            <div class="main-content-wrap sidenav-open d-flex flex-column">
                <div class="main-content">
                           <div class="breadcrumb">
                <h1>Student Dashboard</h1>
                
            </div>
            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <!-- CARD ICON -->
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Data-Upload"></i>
                                    <p class="text-muted mt-2 mb-2">Total Projects</p>
                                <p class="text-primary text-24 line-height-1 m-0">{{Auth::user()->projects->count()}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Add-User"></i>
                                    <p class="text-muted mt-2 mb-2">Your Department</p>
                                    <p class="text-primary text-24 line-height-1 m-0">@if(Auth::user()->studentdetails->branch=='it')IT @elseif(Auth::user()->studentdetails->branch=='comps')Comp's @elseif(Auth::user()->studentdetails->branch=='elex') Elex @elseif(Auth::user()->studentdetails->branch=='prod') Prod @endif</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Money-2"></i>
                                    <p class="text-muted mt-2 mb-2">Passing Year</p>
                                <p class="text-primary text-24 line-height-1 m-0">{{Auth::user()->studentdetails->passing_year}}</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h6 class="mb-0 text-muted">Your Project Insight</h6>
                                    <p class="text-24 font-weight-light mb-1"></p>
                                    <div id="echart1" style="height: 140px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1570036258851"><div style="position: relative; overflow: hidden; width: 178px; height: 140px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="178" height="140" style="position: absolute; left: 0px; top: 0px; width: 178px; height: 140px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div></div></div>
                                </div>
                            </div>
                        </div>
                        
                





            </div>
            <!-- end of row-->
            
            <!-- end of row-->
                </div>

                <!-- Footer Start -->
            {{-- <div class="flex-grow-1"></div> --}}
            <div class="app-footer text-center">
               
                <div class="footer-bottom text-center align-items-center">
                    <div class="d-flex align-items-center text-center">
                        <img class="logo" src="https://img.icons8.com/color/96/000000/shekel--v2.png" alt="">
                        <div>
                            <p class="m-0">&copy; 2019 Dreamspace Laravel</p>
                            <p class="m-0">All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fotter end -->
            </div>
            <!-- ============ B