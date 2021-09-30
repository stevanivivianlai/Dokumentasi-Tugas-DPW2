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
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Produk VIVISHOP</h4>
                  <p class="card-description">
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
Nama Produk                          </th>
                          <th>
                            Product
                          </th>
                          <th>
                            Harga
                          </th>
                          <th>
                            Tanggal Input
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-info">
                          <td>
                            1
                          </td>
                          <td>
                            Kacamata Pria
                          </td>
                          <td>
                            Produk Pria
                          </td>
                          <td>
                            RP. 30.000
                          </td>
                          <td>
                            May 15, 2020
                          </td>
                        </tr>
                        <tr class="table-warning">
                          <td>
                            2
                          </td>
                          <td>
                            Lotion Wanita
                          </td>
                          <td>
                            Produk Wanita
                          </td>
                          <td>
                            RP. 40.000
                          </td>
                          <td>
                            July 1, 2020
                          </td>
                        </tr>
                        <tr class="table-danger">
                          <td>
                            3
                          </td>
                          <td>
                            Celana Wanita
                          </td>
                          <td>
                           Produk Wanita
                          </td>
                          <td>
RP. 138.000                          </td>
                          <td>
                            Apr 12, 2020
                          </td>
                        </tr>
                        <tr class="table-success">
                          <td>
                            4
                          </td>
                          <td>
                            HardCase
                          </td>
                          <td>
                            aksesoris
                          </td>
                          <td>
                        RP. 77.990
                          </td>
                          <td>
                            May 15, 2020
                          </td>
                        </tr>
                        <tr class="table-primary">
                          <td>
                            5
                          </td>
                          <td>
                            BAJU KEMEJA
                          </td>
                          <td>
                            Pakaian Pria
                          </td>
                          <td>
                            RP. 160.250
                          </td>
                          <td>
                            May 03, 2020
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
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
