
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from gull-html-laravel.ui-lib.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2019 13:31:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/styles/vendor/toastr.css">
     <!-- CSRF Token -->
        <meta name="csrf-token" content="4BERB75i8hcFJWsN0lxFijpwzEwkwtPib52n5aNA">
    <title>Support Home</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">

<link id="gull-theme" rel="stylesheet" href="assets/styles/css/themes/lite-purple.min.css">
 <link rel="stylesheet" href="assets/styles/vendor/perfect-scrollbar.css">

 </head>

<body class="text-left">

      <!-- Pre Loader Strat  -->
    <div class='loadscreen' id="preloader">

        <div class="loader spinner-bubble spinner-bubble-primary">



        </div>
    </div>
    <!-- Pre Loader end  -->


  <!-- ============ Compact Layout start ============= -->
           <!-- ============Deafult  Large SIdebar Layout start ============= -->


        <div class="app-admin-wrap layout-sidebar-large clearfix">
             <div class="main-header">
            <div class="" style="margin-left:6px">
                <h4>Missing Person Portal</h4>
            </div>

            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="d-flex align-items-center">
                <!-- Mega menu -->

                <!-- / Mega menu -->

            </div>

            <div style="margin: auto"></div>

            <div class="header-part-right">
                <!-- Full screen toggle -->
                <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
                <!-- Grid menu Dropdown -->

                <!-- Notificaiton -->
                <!-- Notificaiton End -->

                <!-- User avatar dropdown -->
                <div class="dropdown">
                    <div  class="user col align-self-end">
                        <img src="assets/images/faces/1.jpg" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <div class="dropdown-header">
                                <i class="i-Lock-User mr-1"></i> {{Auth::User()->name}}
                            </div>

                            <a class="dropdown-item" href="/logout">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- header top menu end -->




       <div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
                <ul class="navigation-left">


                    <li class="nav-item">
                        <a class="nav-item-hold" href="/home" >
                            <i class="nav-icon i-Shop-4"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <div class="triangle"></div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-item-hold" href="/reports">
                            <i class="nav-icon i-Safe-Box1"></i>
                            <span class="nav-text">Reports</span>
                        </a>
                        <div class="triangle"></div>
                    </li>

                </ul>
            </div>

            <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
                <!-- Submenu Dashboards -->

            </div>
            <div class="sidebar-overlay"></div>
        </div>
        <!--=============== Left side End ================-->


        <!-- ============ Body content start ============= -->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
<div class="main-content">


            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <!-- ICON BG -->

            </div>

            <div class="card text-left">

                        <div class="card-body">


                            <div class="row">
                                <div class="col-4">
                                    <div class="list-group" id="list-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Create Report</a>
                                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">My Reports</a>
                                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Found Cases</a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                        <form action="{{url('report')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName2">Name of person missing</label>
                                        <input type="text" class="form-control form-control-rounded" name="name" id="firstName2" placeholder="Full Name" required>
                                    </div>


                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName2">Age</label>
                                        <input type="text" class="form-control form-control-rounded" name="age" id="firstName2" placeholder="Age" required>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName2">Address</label>
                                        <input type="text" class="form-control form-control-rounded" name="address" id="firstName2" placeholder="Address" required>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName2">Home Number</label>
                                        <input type="text" class="form-control form-control-rounded" name="homeNumber" id="firstName2" placeholder="Home Number" required>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName2">Mobile</label>
                                        <input type="text" class="form-control form-control-rounded" name="mobile" id="firstName2" placeholder="Mobile" required>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName2">Description of Clothing</label>
                                        <input type="text" class="form-control form-control-rounded" name="clothing" id="firstName2" placeholder="Clothing Description" required>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName2">Last Seen</label>
                                        <input type="text" class="form-control form-control-rounded" name="lastSeen" id="firstName2" placeholder="Where and When?" required>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName2">Steps taken</label>
                                        <input type="text" class="form-control form-control-rounded" name="stepsTaken" id="firstName2" placeholder="Steps you have taken to find them" required>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName2">Your home number</label>
                                        <input type="text" class="form-control form-control-rounded" name="relationship" id="firstName2" placeholder="Where and When?" required>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName2">Relationship with the missing person</label>
                                        <input type="text" class="form-control form-control-rounded" name="yourNumber" id="firstName2" placeholder="Relationship" required>
                                    </div>


                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstName2">Select Image</label>
                                        <input type="file" id="image" name="image" class="form-control form-control-rounded" accept="image/*">
                                    </div>



                                    <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Description of missing person</span>
                                </div>
                                <textarea name="description" class="form-control" aria-label="With textarea" placeholder="Description of missing person, height, ethinicity and distinguishing features"></textarea>
                            </div>
                                    <div class="col-md-12"><br>
                                         <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">


                             @if($open->count() !==0)
                            <div class="table-responsive">
                                <table id="deafult_ordering_table" class="display table table-striped table-bordered" style="width:100%">
                            <thead>
                                        <tr>
                                            <th>Report No</th>
                                            <th>Name of missing</th>

                                            <th>Date filed</th>
                                            <th>Description</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($open as $op)
                                        <tr>
                                            <td>{{$op->id}}</td>
                                            <td>{{$op->fullName}}</td>
                                            <td>{{$op->created_at->diffForHumans()}}</td>
                                            <td>{{$op->description}}</td>
                                            <td><a href="view_more/{{$op->id}}">View More</a> | <a href="found/{{$op->id}}">Mark as found</a></td>
                                        </tr>
                                  @endforeach
                                    </tbody>

                                </table>
                            </div>
                            @else
                            <p>You have no reports at the moment</p>
                            @endif

                                            </div>
                                        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                        @if($closed->count() !==0)
                                        <div class="table-responsive">
                                <table id="deafult_ordering_table" class="display table table-striped table-bordered" style="width:100%">
                            <thead>
                                        <tr>
                                           <th>Ticket No</th>
                                            <th>Subject</th>

                                            <th>Date</th>
                                            <th>Description</th>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($closed as $op)
                                        <tr>
                                        <td>{{$op->id}}</td>
                                            <td>{{$op->fullName}}</td>
                                            <td>{{$op->created_at->diffForHumans()}}</td>
                                            <td>{{$op->description}}</td>
                                            <td><a href="view_more/{{$op->id}}" class="btn btn-primary sm">More</a></td>

                                        </tr>
                                  @endforeach
                                    </tbody>

                                </table>
                            </div>
                            @else
                            <p>You have no found persons at the moment</p>
                            @endif
                            </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                        </div>
                    </div>

                </div>




            </div>


</div>

            <!-- Footer Start -->

            <!-- fotter end -->
        </div>
        <!-- ============ Body content End ============= -->
    </div>
    <!--=============== End app-admin-wrap ================-->

    <!-- ============ Search UI Start ============= -->
  <!-- ============ Search UI Start ============= -->
  <div class="search-ui">
        <div class="search-header">
            <img src="assets/images/logo.png" alt="" class="logo">
            <button class="search-close btn btn-icon bg-transparent float-right mt-2">
                <i class="i-Close-Window text-22 text-muted"></i>
            </button>
        </div>

        <input type="text" placeholder="Type here" class="search-input" autofocus>

        <div class="search-title">
            <span class="text-muted">Search results</span>
        </div>

        <div class="search-results list-horizontal">
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="assets/images/products/headphone-1.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="#" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-danger">Sale</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="assets/images/products/headphone-2.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="#" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="assets/images/products/headphone-3.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="#" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="assets/images/products/headphone-4.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="#" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINATION CONTROL -->
        <div class="col-md-12 mt-5 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-inline-flex">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- ============ Search UI End ============= -->
    <!-- ============ Search UI End ============= -->

    <!-- ============ Customizer ============= -->
    <!-- ============ End Customizer ============= -->


      <!-- ============ Large Sidebar Layout End ============= -->








<script src="assets/js/common-bundle-script.js"></script>

         <script src="assets/js/vendor/echarts.min.js"></script>
     <script src="assets/js/es5/echart.options.min.js"></script>
     <script src="assets/js/es5/dashboard.v1.script.js"></script>




    <script src="assets/js/es5/script.min.js"></script>


    <script src="assets/js/es5/sidebar.large.script.min.js"></script>

    <script src="../assets/js/vendor/toastr.min.js"></script>
    <script src="../assets/js/toastr.script.js"></script>

    <script src="assets/js/es5/customizer.script.min.js"></script>

    <script>
            @if(session()->has('notif'))
                toastr.success("Report Created Successfully", "Process Completed")
            @endif

</script>

<script>
            @if(session()->has('found'))
                toastr.success("Report Updated Successfully", "Process Completed")
            @endif

</script>


    </body>


<!-- Mirrored from gull-html-laravel.ui-lib.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2019 13:42:19 GMT -->
</html>
