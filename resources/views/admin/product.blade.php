<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('adminhome') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('ProductsAdmin') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Product</span></a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="admin/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <body class="bg-gradient-primary">

                    <div class="container">

                        <!-- Outer Row -->
                        <div class="row justify-content-center">

                            <div class="col-xl-10 col-lg-12 col-md-9">

                                <div class="card o-hidden border-0 shadow-lg my-5">
                                    <div class="card-body p-0">
                                        <!-- Nested Row within Card Body -->
                                        <form method="POST" action="{{ route('addproduct') }}"
                                        class="user" enctype="multipart/form-data">
                                            @csrf
                                            <div class="p-3 p-lg-5 border">
                                                <div class="form-group row">
                                                  <div class="col-md-12">
                                                    <label for="title" class="text-black">Ttile <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="title" name="title" required>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <div class="col-md-12">
                                                    <label for="price" class="text-black">Price <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="price" name="price" placeholder="" required>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <div class="col-md-12">
                                                    <label for="img" class="text-black">Image Of Product </label>
                                                    <input type="file" class="form-control" id="img" name="img" required>
                                                  </div>
                                                </div>

                                                <div class="form-group row">
                                                  <div class="col-md-12">
                                                    <label for="detail" class="text-black">Detail </label>
                                                    <textarea name="detail" id="detail" cols="30" rows="7" class="form-control" required></textarea>
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                  <div class="col-lg-12">
                                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Post">
                                                  </div>
                                                </div>
                                              </div>
                                            </form>

                                        {{-- <div class="row">
                                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                            <div class="col-lg-6">
                                                <div class="p-5">
                                                    <form method="POST" action="{{ route('addproduct') }}"
                                                        class="user" enctype="multipart/form-data">
                                                        @csrf
                                                        <tr>
                                                            <th>Title<span class="text-danger">*</span></th>
                                                            <td><input type="text" name="title" id="title"
                                                                    class="form-control" /></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Price<span class="text-danger">*</span></th>
                                                            <td><input type="number" name="price" id="price"
                                                                    class="form-control" /></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Image</th>
                                                            <td><input type="file" name="img"
                                                                    id="img" /></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Detail<span class="text-danger">*</span></th>
                                                            <td>
                                                                <textarea class="form-control" name="detail" id="detail"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <input type="submit" class="btn btn-primary" />
                                                            </td>
                                                        </tr>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- Logout Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Select "Logout" below if you are ready to end your current
                                    session.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button"
                                        data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bootstrap core JavaScript-->
                    <script src="admin/vendor/jquery/jquery.min.js"></script>
                    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

                    <!-- Custom scripts for all pages-->
                    <script src="admin/js/sb-admin-2.min.js"></script>

                    <!-- Page level plugins -->
                    <script src="admin/vendor/chart.js/Chart.min.js"></script>

                    <!-- Page level custom scripts -->
                    <script src="admin/js/demo/chart-area-demo.js"></script>
                    <script src="admin/js/demo/chart-pie-demo.js"></script>

                </body>

</html>
