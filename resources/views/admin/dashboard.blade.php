<!DOCTYPE html>
<html lang="en">
   <head>
      @include('admin/include/headerlink')
      <title> Admin-Dashboard - </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> 
   </head>
   <body>
      @include('admin/include/header')
      @include('admin/include/sidebar')
      <main id="main" class="main">
         <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
               </ol>
            </nav>
         </div>
         <!-- End Page Title -->
         <section class="section dashboard">
            <div class="row">
               <!-- Left side columns -->
               <div class="col-lg-12">
                  <div class="row">
                     <!-- Sales Card -->
                     <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card  bg-c-green-in">
                           
                           <div class="card-body">
                              <h5 class="card-title">Total Artist <span>| Today</span></h5>
                              <div class="d-flex align-items-center">
                                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                 </div>
                                 <div class="ps-3">
                                    <h6>6</h6>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card bg-c-pink-in">
                           
                           <div class="card-body">
                              <h5 class="card-title">Total Users <span>| Today</span></h5>
                              <div class="d-flex align-items-center">
                                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                 </div>
                                 <div class="ps-3">
                                    <h6>6</h6>
                                  
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-4 col-md-4">
                        <div class="card info-card bg-c-blue-in   sales-card ">
                           <div class="filter">
                              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                 <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                 </li>
                                 <li><a class="dropdown-item" href="#">Today</a></li>
                                 <li><a class="dropdown-item" href="#">This Month</a></li>
                                 <li><a class="dropdown-item" href="#">This Year</a></li>
                              </ul>
                           </div>
                           <div class="card-body">
                              <h5 class="card-title">Sales <span>| Today</span></h5>
                              <div class="d-flex align-items-center">
                                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cart"></i>
                                 </div>
                                 <div class="ps-3">
                                    <h6>145</h6>
                                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      @include('admin/include/footer')
   </body>
</html>
@if(session('success'))
<div class="modal fade custom-modal" id="successModal">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header bg-success text-white">
            <h4 class="modal-title" style="text-align:center;">{{ session('success') }}</h4>
         </div>
         <div class="modal-body">
            <p>You Are Logged In To Admin Dashboard!</p>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>
         </div>
      </div>
   </div>
</div>
<script>
   $(document).ready(function () {
       $("#successModal").modal('show');
       $("#successModal button[data-dismiss='modal']").on('click', function () {
           $("#successModal").modal('hide');
       });
   });
</script>
@endif