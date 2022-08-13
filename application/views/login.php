<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
              <div class="messages"></div>
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="form-horizontal auth-form my-4" method="post" id="login_form">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="user_email" id="user_email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="user_password" id="user_password" placeholder="Password">
                    </div>
                    <button class="btn btn-primary btn-round btn-block waves-effect waves-light" type="submit">Log IN <i class="fas fa-sign-in-alt ml-1"></i></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets'); ?>/js/sb-admin-2.min.js"></script>
  <script type="text/javascript">
$(document).ready(function(){
	$('#login_form').on('submit', function(e){
		e.preventDefault();
		$.ajax({
            url:'<?php echo base_url("login/auth")?>',
            method: "POST",
            data: new FormData(this),
            dataType:'json',
            contentType: false,
            cache: false,
            processData: false,
            success:function(data){
                if(data.error){
                    $('.messages').html(
                        '<div class="alert icon-custom-alert alert-danger alert-danger-shadow my-3" role="alert">'+
                            '<i class="mdi mdi-close-box-multiple-outline alert-icon mt-1"></i>'+
                            '<div class="alert-text">'+
                                '<strong class="alert-heading font-16">Christ No!</strong><br />'+data.error+
                            '</div>'+         
                        '</div>'
                    );
                    $('.messages p').addClass('m-0');
                } else if(data.warning) {
                    $('.messages').html(
                        '<div class="alert icon-custom-alert alert-warning alert-warning-shadow my-3" role="alert">'+
                            '<i class="mdi mdi-close-box-multiple-outline alert-icon mt-1"></i>'+
                            '<div class="alert-text">'+
                            '<strong class="alert-heading font-16">Ohh Attention!</strong><br />'+data.warning+
                            '</div>'+                                            
                        '</div>'
                    );
                    $('.messages p').addClass('m-0');
                    setTimeout(function(){
                        window.location.href = '<?php echo base_url('login/code'); ?>';
                    },2000);
                } else if(data.block) {
                    $('.messages').html(
                        '<div class="alert icon-custom-alert alert-danger alert-danger-shadow my-3" role="alert">'+
                            '<i class="mdi mdi-close-box-multiple-outline alert-icon mt-1"></i>'+
                            '<div class="alert-text">'+
                                '<strong class="alert-heading font-16">Christ No!</strong><br />'+data.block+
                            '</div>'+         
                        '</div>'
                    );
                    $('.messages p').addClass('m-0');
                    setTimeout(function(){
                        window.location.href = '<?php echo base_url('login/block'); ?>';
                    },2000);
                } else {
                    $('.messages').html(
                        '<div class="alert icon-custom-alert alert-success alert-success-shadow my-3" role="alert">'+
                            '<i class="mdi mdi-check-all alert-icon mt-1"></i>'+
                            '<div class="alert-text">'+
                            '<strong class="alert-heading font-16">That\'s it!</strong><br />'+data.success+
                            '</div>'+                                            
                        '</div>'
                    );
                    $('.messages p').addClass('m-0');
                    setTimeout(function(){
                        window.location.href = '<?php echo base_url(); ?>';
                    },2000);
                }
            }
        });
	});
});
</script>
</body>

</html>
