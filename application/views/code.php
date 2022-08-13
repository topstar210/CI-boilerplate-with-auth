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
  <link href="<?php echo base_url('assets'); ?>/css/style.css" rel="stylesheet">

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
                    <div class="text-center auth-logo-text">
                        <h4 class="mt-0 mb-3 mt-5">Enter Security Code</h4>
                        <p class="text-muted mb-0">You have logged in from the new device. You can enter the code sent to your e-mail address on this screen!</p>  
                    </div>
                    <form class="form-horizontal auth-form my-4" method="post" id="code_form">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <span class="auth-form-icon">
                                    <i class="dripicons-lock-open"></i> 
                                </span>                                                                                                              
                                <input type="text" maxlength="<?php echo $maxlength; ?>" class="form-control" name="user_code" placeholder="Enter Code">
                            </div>                                    
                        </div>    
                        <div data-role="countdown" data-minutes="<?php echo $timer->i; ?>" data-seconds="<?php echo $timer->s; ?>" data-on-alarm="window.location.href = '<?php echo base_url('login'); ?>'"></div>
                        <div class="form-group mb-0 row">
                            <div class="col-12 mt-2">
                                <button class="btn btn-primary btn-round btn-block waves-effect waves-light" type="submit">Send Code <i class="fas fa-lock-open ml-1"></i></button>
                            </div> 
                        </div>                           
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="<?php echo base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url('assets'); ?>/vendor/metro/metro.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#code_form').on('submit', function(e){
        e.preventDefault();
        $.ajax({
                url:'<?php echo base_url("login/input_code")?>',
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
