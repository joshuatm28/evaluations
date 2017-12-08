<div class="row">
</div>
      <!-- Area Chart Example-->
      <!-- Example DataTables Card-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-bookmark"></i>  WELCOME</div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row">
                    <div class=" col-lg-12 mb-3">
                      <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-calendar-check-o"></i>
                          </div>
                          <div class="mr-5">
                            <h1>
                            <?php
                            $Today = date('m:d:y');
                            $new = date('l, F d, Y', strtotime($Today));
                            echo $new;
                            ?>
                          </h1>
                          </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                          <span class="float-left"></span>
                          <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                          </span>
                        </a>
                      </div>
                    </div>
                    <!-- <div class="col-xl-3 col-sm-6 mb-3">
                      <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                          </div>
                          <div class="mr-5">11 New Tasks!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                          <span class="float-left">View Details</span>
                          <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                          </span>
                        </a>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                      <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-shopping-cart"></i>
                          </div>
                          <div class="mr-5">123 New Orders!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                          <span class="float-left">View Details</span>
                          <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                          </span>
                        </a>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                      <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-support"></i>
                          </div>
                          <div class="mr-5">13 New Tickets!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                          <span class="float-left">View Details</span>
                          <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                          </span>
                        </a>
                      </div>
                    </div> -->
                  </div>
                </div>
            </div>
        <div class="card-footer small text-muted">
          <!-- <div class="alert alert-success" style = "width:230px; height: 50px; float:right; margin-top:-50px;">
                        <i class="glyphicon glyphicon-calendar"></i>
                        
                   </div> -->
                 </div>
    </div>
    
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © StudentRecords 2017</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
  