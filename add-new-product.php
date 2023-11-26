<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- meta data -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Voxo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Voxo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Add New Product</title>

    <!-- Google font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&amp;family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="assets/css/linearicon.css">

    <!-- Fontawesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- Themify icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">

    <!--Dropzon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/dropzone.css">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/date-picker.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- Bootstrap-tag input css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap-tagsinput.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper start -->
    <div class="page-wrapper compact-wrapper dark-sidebar" id="pageWrapper">

        <!-- Page Header start -->
         <?php include('header.php');?>
        <!-- Page Header end -->

        <!-- Page Body start -->
        <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
            <?php include('leftbar.php');?>
        <!-- Page Sidebar End-->

            <div class="page-body">
                <div class="title-header">
                    <h5>Add New Product</h5>
                </div>

                <!-- New Product Add Start -->

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                                    <form class="theme-form theme-form-2 mega-form"
                                                        action="insert-new-product.php" enctype="multipart/form-data"
                                                        name="insert" method="post" onclick="">
                                                        <div class="card-header-2">
                                                            <h5>Product Information</h5>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-4 row align-items-center">
                                                                <label class="form-label-title col-sm-2 mb-0"
                                                                    for="Product_Name">Product Name</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text"
                                                                        placeholder="Product Name" name="product_name"
                                                                        required>
                                                                </div>
                                                            </div>

                                                            <div class="mb-4 row align-items-center">
                                                                <label class="col-sm-2 col-form-label form-label-title"
                                                                    for="Category">Category</label>
                                                                <div class="col-sm-10">
                                                                    <select class="js-example-basic-single w-100"
                                                                        name="category" id="category" required>

                                                                        <option disabled>Category Menu</option>
                                                                        <option value="Men Fashion">Men's Fashion
                                                                        </option>
                                                                        <option value="Women Fashion">Women's Fashion
                                                                        </option>
                                                                        <option value="Kid Fashion">Kid's Fashion
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="mb-4 row align-items-center">
                                                                <label class="col-sm-2 col-form-label form-label-title"
                                                                    for="Brand">Brand</label>
                                                                <div class="col-sm-10">
                                                                    <select class="js-example-basic-single w-100"
                                                                        name="brand" id="brand" required>
                                                                        <option disabled>Brand Menu</option>
                                                                        <option value="van heusen">Van Heusen</option>
                                                                        <option value="blackberry">Blackberry</option>
                                                                        <option value="louis philippe">Louis Philippe</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center">
                                                                <label class="col-sm-2 col-form-label form-label-title"
                                                                    for="Unit">Unit</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="number"
                                                                        placeholder="no. of product" name="unit"
                                                                        required><br>
                                                                </div>
                                                            </div>

                                                            
                                                                    <!--<div class="row align-items-center">
                                                                        <label class="col-sm-2 col-form-label form-label-title"-->

                                                                            <div class="mb-4 row align-items-center">
                                                                                <label class="form-label-title col-sm-2 mb-0"
                        
                                                                    for="Price">Price</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="number"
                                                                        placeholder="Price" name="price"
                                                                        required>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="card-header-2">
                                                            <h5>Description</h5>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <label class="form-label-title col-sm-2 mb-0"
                                                                        for="Product_Description">Product
                                                                        Description</label>
                                                                    <div class="col-sm-10">

                                                                        <textarea id="editor"
                                                                            name="product_description"></textarea>

                                                                        <!-- <input class="form-control" type="text"
                                                                        placeholder="Product Name" name="product_description"
                                                                        required> -->


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><br>

                                                        <div class="card-header-2">
                                                            <h5>Product Images</h5>
                                                        </div>


                                                        <div class="row">
                                                            <div class="mb-4 row align-items-center">
                                                                <label class="col-sm-2 col-form-label form-label-title"
                                                                    for="Product_Image">Product Image</label>
                                                                <div class="col-sm-10">

                                                                    <input class="form-control" type="file"
                                                                        name="product_image" value="" required>

                                                                </div>
                                                            </div>

                                                            <div class="row align-items-center">
                                                                <label class="col-sm-2 col-form-label form-label-title"
                                                                    for="Thumbnail_Image">Thumbnail
                                                                    Image</label>
                                                                <div class="col-sm-10">

                                                                    <input class="form-control" type="file"
                                                                        name="thumbnail_image" value="" required>

                                                                </div>
                                                            </div>
                                                        </div><br>



                                                        <div class="card-header-2">
                                                            <h5>Inventory</h5>
                                                        </div>

                                                        <div class="row">

                                                            <div class="row align-items-center">
                                                                <label class="col-sm-2 col-form-label form-label-title"
                                                                    for="Stock_Status">Stock
                                                                    Status</label>
                                                                <div class="col-sm-10">
                                                                    <select class="js-example-basic-single w-100"
                                                                        name="stock_status" id="stock_status" required>
                                                                        <option>In Stock</option>
                                                                        <option>Out Of Stock</option>
                                                                        <option>On Backorder</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><br>
                                                        <input class="align-items-center btn btn-theme" type="submit" id="submit" name="submit" value="Submit">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- New Product Add End -->

                <!-- footer Start -->
                <div class="container-fluid">
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">© 2023, Subhash R.</p>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- footer En -->
            </div>
            <!-- Container-fluid End -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End -->

    <!-- Modal Start -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                    <p>Are you sure you want to log out?</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="button-box">
                        <button type="button" class="btn btn--no " data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn  btn--yes btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

    <!-- latest js -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js -->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- scrollbar simplebar js -->
    <script src="assets/js/scrollbar/simplebar.js"></script>
    <script src="assets/js/scrollbar/custom.js"></script>

    <!-- Sidebar js -->
    <script src="assets/js/config.js"></script>

    <!-- bootstrap tag-input js -->
    <script src="assets/js/bootstrap-tagsinput.min.js"></script>
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- customizer js 
    <script src="assets/js/customizer.js"></script>-->

    <!--Dropzon js -->
    <script src="assets/js/dropzone/dropzone.js"></script>
    <script src="assets/js/dropzone/dropzone-script.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/notify/index.js"></script>

    <!-- ck editor js -->
    <script src="assets/js/ckeditor.js"></script>
    <script src="assets/js/ckeditor-custom.js"></script>

    <!-- select2 js -->
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/select2-custom.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>


</body>
</html>