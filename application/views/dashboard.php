  <!-- header -->
  <?php require_once __DIR__ . '/layout/header.php'; ?>
  <!-- End of header -->


  <!-- Sidebar -->
  <?php require_once __DIR__ . '/layout/sidebar.php'; ?>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

          
          <!-- Topbar -->
          <?php require_once __DIR__ . '/layout/topbar.php'; ?>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
              <!-- Page Heading -->
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
              </div>
              <?php if($this->sess['user_level'] != 1): ?>
              <div class="col-md-6">
                  <?php
                    $start = iconv('latin5','utf-8',strftime('%d %B %Y',strtotime($this->sess['license_start_date'])));
                    $finish = iconv('latin5','utf-8',strftime('%d %B %Y',strtotime($this->sess['license_end_date'])));
                    $turkey = now("Turkey");
                    $start_date= new DateTime(mdate("%Y-%m-%d",$turkey));
                    $end_date= new DateTime($this->sess['license_end_date']);
                    $interval= $start_date->diff($end_date);
                ?>
                  <h6 class="mb-0"><b>Lisans Type :</b>
                      <?php echo ($this->sess['license_type'] == 2) ? "Demo" : "License"; ?></h6>
                  <h6 class="mb-0"><b>Start Date :</b> <?php echo $start; ?></h6>
                  <h6 class="mb-0"><b>End Date :</b> <?php echo $finish; ?></h6>
                  <h6 class="mb-0">
                      <b>Days Left :</b>
                      <?php 
                        if($interval->invert > 0){
                            echo 'Expired';
                        } else {
                            if($interval->days == 0){
                                echo '<span class="text-danger font-weight-bold">The last day</span>';
                            } else {
                                echo $interval->days.' Days';
                            }
                        }
                    ?>
                  </h6>
              </div>
              <hr>
              <?php endif; ?>
              <?php 
              if($this->sess){
                echo '<h1 class="text-success">logged successfully!</h1>';
                echo '<pre>';
                  print_r($this->sess);
                echo '</pre>';
              }

            ?>
          </div>
          <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


      <!-- Footer -->
      <?php  echo require_once __DIR__.'/layout/footer.php'; ?>
      <!-- End of Footer -->