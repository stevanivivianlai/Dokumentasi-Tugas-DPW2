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
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Promo Produk</h4>
                  <p class="card-description">
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Produk</th>
                          <th>Kode.</th>
                          <th>Created</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Kacamata</td>
                          <td>53275531</td>
                          <td>12 May 2020</td>
                          <td><label class="badge badge-danger">Pending</label></td>
                        </tr>
                        <tr>
                          <td>Celana wanita</td>
                          <td>53275532</td>
                          <td>15 May 2020</td>
                          <td><label class="badge badge-warning">In progress</label></td>
                        </tr>
                        <tr>
                          <td>Baju Pria</td>
                          <td>53275533</td>
                          <td>14 May 2020</td>
                          <td><label class="badge badge-info">Fixed</label></td>
                        </tr>
                        <tr>
                          <td>Baju Wanita</td>
                          <td>53275534</td>
                          <td>16 May 2020</td>
                          <td><label class="badge badge-success">Completed</label></td>
                        </tr>
                        <tr>
                          <td>Pulpen</td>
                          <td>53275535</td>
                          <td>20 May 2020</td>
                          <td><label class="badge badge-warning">In progress</label></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tabel Pembelian</h4>
                  <p class="card-description">
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Produk</th>
                          <th>Jenis</th>
                          <th>Sale</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Kacamata</td>
                          <td>Pria</td>
                          <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                          <td><label class="badge badge-danger">Pending</label></td>
                        </tr>
                        <tr>
                          <td>Jam Tangan</td>
                          <td>Wanita</td>
                          <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                          <td><label class="badge badge-warning">In progress</label></td>
                        </tr>
                        <tr>
                          <td>Kemeja</td>
                          <td>Pria</td>
                          <td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
                          <td><label class="badge badge-info">Fixed</label></td>
                        </tr>
                        <tr>
                          <td>Laptop</td>
                          <td>Elektronik</td>
                          <td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
                          <td><label class="badge badge-success">Completed</label></td>
                        </tr>
                        <tr>
                          <td>Earphone</td>
                          <td>aksesoris</td>
                          <td class="text-success"> 98.05% <i class="ti-arrow-up"></i></td>
                          <td><label class="badge badge-warning">In progress</label></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
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