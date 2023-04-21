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
    <style>
        .container {
            padding: 2rem 0rem;
        }

        h4 {
            margin: 2rem 0rem 1rem;
        }

        .table-image {

            td,
            th {
                vertical-align: middle;
            }
        }

        .page-link {
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }

        .site-block-27 {
            display: flex;
            text-align: center;
            justify-content: center;
        }
    </style>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background-color: #fff!important;">

                @include('layouts.adminnavbar')
                <div class="px-5">
                    <div class="row g-0 my-3 ">
                        <div class="col-md-6 d-flex justify-content-start">
                            <button style="margin-right: 10px;" type="button" class="btn btn-info btn-sm"
                                data-toggle="modal" data-target="#addCategoryModal">Category hinzufügen</button>
                        </div>
                       <div class="col-md-6 d-flex justify-content-end">
                        <div >
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                data-target="#addNewsModal">
                                Add News
                            </button>
                        </div>
                        <div class=" ">
                            <button style="margin-left: 10px;" type="button" class="btn btn-info btn-sm"
                                data-toggle="modal" data-target="#addProductModal">Produkt hinzufügen</button>
                        </div>
                       </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-image">
                                    <thead>
                                        <tr>
                                            <th scope="col">Produktname</th>
                                            <th scope="col">Produktbild</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Preis</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col">Aktion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <th scope="row">{{ $product->title }}</th>
                                                <td class="w-25">
                                                    <img src="{{ asset($product->img) }}" class="img-fluid img-thumbnail"
                                                        alt="Sheep" style="height:150px; width:100px;">
                                                </td>
                                                <td>{{ $product->category->title ?? "Don't have" }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ strlen($product->detail) > 50 ? substr($product->detail, 0, 50) . '...' : $product->detail }}
                                                </td>
                                                <td style="display: flex">
                                                    <button style="margin-right: 20px;" type="button"
                                                        class="btn btn-info btn-sm" data-toggle="modal"
                                                        data-target="#updateModal{{ $product->id }}">Aktualisieren</button>
                                                    <form method="POST"
                                                        action="{{ route('delete', ['id' => $product->id]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            onclick="return confirm('Are you sure you want to delete?')"
                                                            class="btn btn-danger btn-sm">Löschen</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @if (Illuminate\Support\Facades\Session::has('success'))
                                <span style="color:green">
                                    {{ Illuminate\Support\Facades\Session::get('success') }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>


            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <div class="site-block-27">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
            <!-- Add News Modal -->
            <div class="modal fade" id="addNewsModal" tabindex="-1" role="dialog" aria-labelledby="addNewsModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('createNews') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="addNewsModalLabel">Add News</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="category" class="col-form-label">Kategorie</label>
                                    <select id="category" class="form-control" name="category" required>
                                        <option value="" disabled selected>Wählen Sie eine Kategorie</option>
                                        <option value="Aktuelle Aktionen">Aktuelle Aktionen</option>
                                        <option value="Corona Pandemie">Corona Pandemie</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="url" class="form-control" id="link" name="link">
                                </div>
                                <div class="form-group">
                                    <label for="img" class="col-form-label">Img</label>
                                    <input type="file" class="form-control-file" id="img" name="img"
                                        required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Add Category-->
            <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog"
                aria-labelledby="addCategoryModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addCategoryModal">Category hinzufügen</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @if (Illuminate\Support\Facades\Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Illuminate\Support\Facades\Session::get('success') }}</div>
                            @endif

                            <form method="POST" action="{{ route('addCategory') }}" class="user"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="title" class="col-form-label">Categoryname<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="titleCategory"
                                        name="titleCategory" required>
                                </div>

                                <div class="form-group">
                                    <label for="detail" class="col-form-label">Detail</label>
                                    <textarea name="detailCategory" id="detailCategory" cols="30" rows="5" class="form-control" required></textarea>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Schließen</button>
                                    <button type="submit" class="btn btn-primary">Category hinzufügen</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Add Product-->
            <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog"
                aria-labelledby="addProductModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addProductModalLabel">Produkt hinzufügen</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @if (Illuminate\Support\Facades\Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Illuminate\Support\Facades\Session::get('success') }}</div>
                            @endif

                            <form method="POST" action="{{ route('addproduct') }}" class="user"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="title" class="col-form-label">Produktname<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        required>
                                </div>
                                <tr>
                                    <th>Category<span class="text-danger">*</span></th>
                                    <td>
                                        <select class="form-control" name="category" required>
                                            @foreach ($category as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <div class="form-group">
                                    <label for="price" class="col-form-label">Preis<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="price" name="price"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="img" class="col-form-label">Produktbild</label>
                                    <input type="file" class="form-control-file" id="img" name="img"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="detail" class="col-form-label">Detail</label>
                                    <textarea name="detail" id="detail" cols="30" rows="5" class="form-control" required></textarea>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Schließen</button>
                                    <button type="submit" class="btn btn-primary">Produkt hinzufügen</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal  Update-->
            @foreach ($products as $product)
                <div class="modal fade" id="updateModal{{ $product->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="updateModal{{ $product->id }}Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form id="updateForm{{ $product->id }}"
                                action="{{ route('updateProduct', ['id' => $product->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-header">
                                    <h5 class="modal-title" id="updateModal{{ $product->id }}Label">Produkt
                                        aktualisieren</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="title">Produktname</label>
                                        <input type="text" name="title" id="title{{ $product->id }}"
                                            class="form-control" value="{{ old('title', $product->title) }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Preis</label>
                                        <input type="number" name="price" id="price{{ $product->id }}"
                                            class="form-control" value="{{ old('price', $product->price) }}"
                                            min="0" step="0.01" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="img">Produktbild</label>
                                        <input type="file" name="img" id="img{{ $product->id }}"
                                            class="form-control-file">
                                    </div>
                                    <div class="form-group">
                                        <label for="detail">Detail</label>
                                        <textarea name="detail" id="detail{{ $product->id }}" class="form-control" required>{{ old('detail', $product->detail) }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Kategorie</label>
                                        <select class="form-control" name="category">
                                            @foreach ($category as $cat)
                                                <option value="{{ $cat->id }}"
                                                    {{ $product->cat_id == $cat->id ? 'selected' : '' }}>
                                                    {{ $cat->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Schließen</button>
                                    <button type="submit" class="btn btn-primary update-btn">Produkt
                                        aktualisieren</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Bereit zu gehen?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Wählen Sie unten „Abmelden“, wenn Sie bereit sind, Ihre aktuelle
                            Sitzung zu beenden.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Stornieren</button>
                            <a class="btn btn-primary" href="{{ route('logout') }}">Ausloggen</a>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    // Show the modal when the button is clicked
                    $('.btn-info').click(function() {
                        $('#addProductModal').modal('show');
                    });
                });
            </script>
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
