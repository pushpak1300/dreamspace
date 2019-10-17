<!-- ============ Body content start ============= -->
            <div class="main-content-wrap sidenav-open d-flex flex-column">
                <div class="main-content">
                           <div class="breadcrumb">
                <h1>Dashboard</h1>
                
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
                                    <p class="text-muted mt-2 mb-2">Total Staff</p>
                                <p class="text-primary text-24 line-height-1 m-0">{{$staff->count()}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Add-User"></i>
                                    <p class="text-muted mt-2 mb-2">Total Student</p>
                                    <p class="text-primary text-24 line-height-1 m-0">{{$student->count()}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Money-2"></i>
                                    <p class="text-muted mt-2 mb-2">Total sales</p>
                                    <p class="text-primary text-24 line-height-1 m-0">4021</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-big mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Money-2"></i>
                                    <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-big mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Gear"></i>
                                    <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-big mb-4">
                                <div class="card-body text-center">
                                    <i class="i-Bell"></i>
                                    <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h6 class="mb-0 text-muted">Subscription/Registration</h6>
                                    <p class="text-24 font-weight-light mb-1">20/80</p>
                                    <div id="echart1" style="height: 140px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1570036258851"><div style="position: relative; overflow: hidden; width: 178px; height: 140px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="178" height="140" style="position: absolute; left: 0px; top: 0px; width: 178px; height: 140px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div></div></div>
                                </div>
                            </div>
                        </div>
                        
                





            </div>
            <!-- end of row-->
            {{-- <div class="row">
                <div class="col-md-6">
                    <div class="card o-hidden mb-4">
                        <div class="card-header">
                            <h3 class="w-50 float-left card-title m-0">New Users</h3>
                            <div class="dropdown dropleft text-right w-50 float-right">
                                           <button class="btn bg-gray-100" type="button" id="dropdownMenuButton_table2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="nav-icon i-Gear-2"></i>
                                        </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_table2">
                                    <a class="dropdown-item" href="#">Add new user</a>
                                    <a class="dropdown-item" href="#">View All users</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">

                            <div class="table-responsive">

                                <table id="user_table" class=" table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Avatar</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Smith Doe</td>
                                            <td>

                                                <img class="rounded-circle m-0 avatar-sm-table " src="..\assets\images\faces\1.jpg" alt="">

                                            </td>

                                            <td>Smith@gmail.com</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jhon Doe</td>
                                            <td>

                                                <img class="rounded-circle m-0 avatar-sm-table " src="..\assets\images\faces\1.jpg" alt="">

                                            </td>

                                            <td>Jhon@gmail.com</td>
                                            <td><span class="badge badge-info">Pending</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Alex</td>
                                            <td>

                                                <img class="rounded-circle m-0 avatar-sm-table " src="..\assets\images\faces\1.jpg" alt="">

                                            </td>

                                            <td>Otto@gmail.com</td>
                                            <td><span class="badge badge-warning">Not Active</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- end of col-->
{{-- 
                <div class="col-md-6">
                    <div class="card o-hidden mb-4">
                        <div class="card-header">
                            <h3 class="w-50 float-left card-title m-0">Total Sales</h3>
                            <div class="dropdown dropleft text-right w-50 float-right">
                                           <button class="btn bg-gray-100" type="button" id="dropdownMenuButton_table_1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="nav-icon i-Gear-2"></i>
                                        </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_table_1">
                                    <a class="dropdown-item" href="#">Add new user</a>
                                    <a class="dropdown-item" href="#">View All users</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">

                            <div class="table-responsive">

                                <table id="sales_table" class="table  text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Date</th>

                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Watch</td>
                                            <td>

                                                12-10-2019

                                            </td>

                                            <td>$30</td>
                                            <td><span class="badge badge-success">Delivered</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Iphone</td>
                                            <td>

                                                23-10-2019

                                            </td>

                                            <td>$300</td>
                                            <td><span class="badge badge-info">Pending</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Watch</td>
                                            <td>

                                                12-10-2019

                                            </td>

                                            <td>$30</td>
                                            <td><span class="badge badge-warning">Not Delivered</span></td>
                                            <td>
                                                <a href="#" class="text-success mr-2">
                                                    <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                </a>
                                                <a href="#" class="text-danger mr-2">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col-->
            </div> --}}
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