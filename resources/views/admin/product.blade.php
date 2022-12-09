<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />

    <style>
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->

      @include('admin.header')
      <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('message'))

                    <div class="alert alert-success">

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{session()->get('message')}}

                    </div>

                @endif

                <div class="text-center mt-4">
                    <h1 class="mb-4 text-xl"> Add Product</h1>

                    <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="mt-1 mb-1">
                            <label> Title </label>
                            <input class="text-black rounded-lg" type="text" name="title" required="" placeholder="write a title">
                        </div>
                        <div class="mt-1 mb-1">
                            <label> Description </label>
                            <input class="text-black rounded-lg" type="text" name="description" required="" placeholder="write a description">
                        </div>
                        <div class="mt-1 mb-1">
                            <label> Price </label>
                            <input class="text-black rounded-lg" type="number" name="price" required="" placeholder="price of product">
                        </div>
                        <div class="mt-1 mb-1">
                            <label> Discounted Price </label>
                            <input class="text-black rounded-lg" type="number" name="discount" placeholder="discount">
                        </div>
                        <div class="mt-1 mb-1">
                            <label> Quantity </label>
                            <input class="text-black rounded-lg" type="number" name="quantity" min="0" required="" placeholder="enter quantity">
                        </div>
                        <div class="mt-1 mb-1">
                            <label> Category </label>
                            <select name="category" id="">
                                <option value="" selected=""> Select a category </option>

                                @foreach ($category as $category)
                                  <option value="{{ $category->category_name }}"> {{ $category->category_name }}</option>  
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-1 mb-1">
                            <label> Image </label>
                            <input type="file" name="image">
                        </div>
                        <div class="mt-1 mb-1">
                            <input class="btn btn-primary text-xl" type="submit" name="submit" value="Add Product">
                        </div>

                    </form>
                </div>

            </div>
        </div>
      
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>