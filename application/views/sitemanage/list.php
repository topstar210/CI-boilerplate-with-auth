  <!-- header -->
  <?php require_once __DIR__ . '/../layout/header.php'; ?>
  <!-- End of header -->

  <!-- Sidebar -->
  <?php require_once __DIR__ . '/../layout/sidebar.php'; ?>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

          <!-- Topbar -->
          <?php require_once __DIR__ . '/../layout/topbar.php'; ?>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
              <!-- Page Heading -->
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">Companies</h1>
                  <a class="btn btn-outline-primary" href="<?php echo base_url('sitemanage/new'); ?>"> New </a>
              </div>
              <div class="col-md-12">
                  <table class="table">
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Site URL</th>
                            <th>Asigned Database</th>
                            <th>Activate/Diactivate Modules</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                  </table>
              </div>
          </div>
          <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php  echo require_once __DIR__.'/../layout/footer.php'; ?>
      <!-- End of Footer -->