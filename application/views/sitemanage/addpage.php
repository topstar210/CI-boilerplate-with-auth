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
                  <h1 class="h3 mb-0 text-gray-800">Add Company</h1>
                  <div>    
                    <a class="btn btn-outline-primary" href="Javascript::void(0);"> Add </a>
                    <a class="btn btn-outline-primary" href="<?php echo base_url('sitemanage/index'); ?>"> Back </a>
                  </div>
              </div>
              <div class="row">
                  <form class="form-horizontal w3-panel col-sm-9">
                      <div class="form-group row">
                          <label class="col-sm-2 control-label" for="company_name">Company Name</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="company_name">
                              <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-2 control-label" for="site_url">Site URL</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="site_url" value="<?php echo base_url(); ?>" />
                              <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-2 control-label" for="db_name">DB Name</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="db_name">
                              <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-2 control-label" for="db_name">Module Settings</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="db_name">
                              <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
          <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php echo require_once __DIR__ . '/../layout/footer.php'; ?>
      <!-- End of Footer -->