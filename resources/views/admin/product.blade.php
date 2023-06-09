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
            <div class="logo">
                <div class="site-logo" style="text-align: center; margin:auto;">
                  <a href="#"><img src="{{ asset('images/logo.svg') }}" style="width: 50px; margin:auto;"/></a>
                </div>
              </div>



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
                @include('layouts.adminnavbar')

                <body class="bg-gradient-primary">

                    <div class="container">

                        <!-- Outer Row -->
                        <div class="row justify-content-center">

                            <div class="col-xl-10 col-lg-12 col-md-9">

                                <div class="card o-hidden border-0 shadow-lg my-5">
                                    @if (Illuminate\Support\Facades\Session::has('success'))
                                    <span style="color:green">
                                        {{ Illuminate\Support\Facades\Session::get('success') }}
                                    </span>
                                  @endif
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
