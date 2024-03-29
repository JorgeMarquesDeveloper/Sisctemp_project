<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Login</title>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
      <!-- Custom styles for this page -->
      <style>
         .bg-gradient-primary {
            background: linear-gradient(90deg, rgba(101,178,46,1) 0%, rgba(178,185,0,1) 100%, rgba(151,203,0,0.6194852941176471) 100%);
         background-repeat: no-repeat;
         background-attachment: fixed;
         }
         .bg-login-image {
         background-image: url(''); /* Substitua pelo caminho da sua imagem */
         background-size: cover;
         background-position: center;
         }
         .btn-user {
         background-color: #4e73df; /* Azul do SB Admin 2 */
         color: #fff;
         }
         .btn-user:hover {
         background-color: #2e59d9; /* Cor mais escura no hover */
         }
         .btn-google {
         background-color: #ea4335; /* Vermelho do Google */
         color: #fff;
         }
         .btn-google:hover {
         background-color: #dc312b; /* Cor mais escura no hover */
         }
         .btn-facebook {
         background-color: #3b5998; /* Azul do Facebook */
         color: #fff;
         }
         .btn-facebook:hover {
         background-color: #2d4373; /* Cor mais escura no hover */
         }
      </style>
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
                        <div class="col-lg-6 d-none d-lg-block bg-login-image">                                
                            <img src="logo.png" alt="Logo" class="img-fluid"></div>
                        <div class="col-lg-6">
                           <div class="p-5">
                              <div class="text-center">
                                 <h1 class="h4 text-gray-900 mb-4">TCR | Login</h1>
                              </div>
                              <form class="user" action="verificar-login.php" method="POST">
                                 <div class="form-group">
                                    <input type="email" name="username" class="form-control form-control-user"
                                       id="exampleInputEmail" aria-describedby="emailHelp"
                                       placeholder="Enter Email Address..." required>
                                 </div>
                                 <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user"
                                       id="exampleInputPassword" placeholder="Password" required>
                                 </div>
                                 <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                       <input type="checkbox" class="custom-control-input" id="customCheck">
                                       <label class="custom-control-label" for="customCheck">Remember Me</label>
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-success btn-user btn-block" style="">
                                 Login
                                 </button>
                                 <hr>
                              </form>
                              <hr>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin-2.min.js"></script>
   </body>
</html>