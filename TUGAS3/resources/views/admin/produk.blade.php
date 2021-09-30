<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>VIVI SHOP </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('utama/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('utama/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('utama/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('utama/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('utama/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('utama/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('utama/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('utama/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('utama/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('utama/images/favicon.png')}}" />
</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar -->
    @include('sectionadmin.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel -->
      @include('sectionadmin.panel')
      <!-- partial -->
      <!-- partial:partials/_sidebar -->
      @include('sectionadmin.sidebar')
      <!-- partial -->
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">

            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambahkan Produk</h4>
                  <p class="card-description">
                    Isi Form untuk menambahkan produk
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama produk</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Kode Produk </label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Jenis Produk</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Produk Pria</option>
                          <option>Produk Wanita</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <label>Foto Produk</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">keterangan produk</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="isi keterangan">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Harga Produk</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
           
        <!-- content-wrapper ends -->
         <!-- partial:partials/_footer -->
         @include('sectionadmin.footer')
         <!-- partial -->
       </div>
       <!-- main-panel ends -->
     </div>
     <!-- page-body-wrapper ends -->
   </div>
   <!-- container-scroller -->
 
   <!-- plugins:js -->
   <script src="{{asset('utama/vendors/js/vendor.bundle.base.js')}}"></script>
   <!-- endinject -->
   <!-- Plugin js for this page -->
   <script src="{{asset('utama/vendors/chart.js/Chart.min.js')}}"></script>
   <script src="{{asset('utama/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
   <script src="{{asset('utama/vendors/progressbar.js/progressbar.min.js')}}"></script>
 
   <!-- End plugin js for this page -->
   <!-- inject:js -->
   <script src="{{asset('utama/js/off-canvas.js')}}"></script>
   <script src="{{asset('utama/js/hoverable-collapse.js')}}"></script>
   <script src="{{asset('utama/js/template.js')}}"></script>
   <script src="{{asset('utama/js/settings.js')}}"></script>
   <script src="{{asset('utama/js/todolist.js')}}"></script>
   <!-- endinject -->
   <!-- Custom js for this page-->
   <script src="{{asset('utama/js/dashboard.js')}}"></script>
   <script src="{{asset('utama/js/Chart.roundedBarCharts.js')}}"></script>
   <!-- End custom js for this page-->
 </body>
 
 </html>