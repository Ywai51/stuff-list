<?php 
    session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WEB Test</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style4all.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
            <div class="outer">
                <div class="head">
                    <table>
                        <tr>
                            <header class="py-4 bg-dark text-white-50"><div class="container text-center">
                                <medium><> S t u f f  L i s t <i><img class="title-logo" width="40px" height="40px" src="logo/title-logo-2.png" alt="logo"></i></medium>
                              </div></header>
                        </tr>
                        <tr><ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link active">
                                    <i class="fas fa-home"></i>Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-warning" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i><img width="20px" height="20px" src="logo/game-logo.png" alt="logo"></i> Game List</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Mobile Game</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">PC Game</a>
                                </div>
                            </li><li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-warning" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i><img width="20px" height="20px" src="logo/video-logo.png" alt="logo"></i> Film List</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Animation</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Movie</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-dark"><i class="fas fa-search"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link disabled text-warning-50"><i><img width="20px" height="20px" src="logo/user-logo.png" alt="logo"></i> Account</a>
                            </li>
                        </ul></tr>
                    </table>
                </div>
                <div class="inner">
                    <!--CODE ####################################### HERE #################### -->
                    <!--ERROR CATCH!!-->
                        <?php 
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "emptyfields") {
                            echo '<script type="text/javascript"> alert("Pastikan mengisi semua kolom!!"); </script>';
                            }
                            else if ($_GET['error'] == "passwordcheck") {
                                echo '<script type="text/javascript"> alert("Password anda berbeda!"); </script>';
                                }
                            else if ($_GET['error'] == "takenUser") {
                                    echo '<script type="text/javascript"> alert("Username atau Email sudah terdaftar"); </script>';
                            }
                            else if ($_GET['error'] == "ErrorWrongPass") {
                                echo '<script type="text/javascript"> alert("Password atau Username Salah"); </script>';
                            }
                            else if ($_GET['error'] == "ErrorNouserFoundLoginPage") {
                                    echo '<script type="text/javascript"> alert("Password atau Username Salah"); </script>';
                            }
                        }
                        else if (isset($_GET['signup'])) {
                            if ($_GET['signup'] == "success") {
                            echo '<script type="text/javascript"> alert("Register success!! Silahkan Login untuk masuk ke website."); </script>';
                        }
                    }
                        ?>
                    <!---->
                    
                    <div class="d-flex flex-column">
                    <div class="p-2 bg-warning ">
                        <div class="card-deck">
                            <div class="card bg-dark text-white ">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Login</h4>
                                    <div class="card-text">
                                    <form action="materials/login.mat.php" method="post">
                                        <div class="form-group">
                                            <label for="loginEmail">Username</label>
                                            <input name="loginEmail" class="form-control form-control-sm" type="text" placeholder="Enter Username or Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="loginPassword">Password</label>
                                            <input name="loginPassword" class="form-control form-control-sm" type="password" placeholder="Enter Password">
                                        </div>
                                        <div class="form-check text-right">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" id="loginCheckbox">
                                                <label class="custom-control-label" for="loginCheckbox">Remember my account</label>
                                            </div>
                                        </div>
                                        <button name="loginBtn" type="submit" class="btn bg-secondary text-white">Submit</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            <div class="card bg-dark text-white">
                                <h2 class="title text-center">Or</h2>
                            </div>
                            <div class="card bg-dark text-white">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Register</h4>
                                    <div class="card-text">
                                    <form action="materials/register.mat.php" method="post">
                                        <div class="form-group">
                                            <label for="registerUsername">Username</label>
                                            <input name="registerUsername" class="form-control form-control-sm" type="text" placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <label for="registerEmail">Email</label>
                                            <input name="registerEmail" class="form-control form-control-sm" type="email" placeholder="example@email.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="registerPassword">Password</label>
                                            <input name="registerPassword" class="form-control form-control-sm" type="password" placeholder="Enter Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="registerPassword2">Re-Password</label>
                                            <input name="registerPassword2" class="form-control form-control-sm" type="password" placeholder="Re-enter Password">
                                        </div>
                                        <div class="form-check">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" name="registerCheckbox">
                                                <label name="registerCheckbox" class="custom-control-label" for="registerCheckbox"> By register, you agree to the terms and conditions</label>
                                            </div>
                                        </div>
                                        <div class="form-check mt-3">
                                            <button name="registerBtn" type="submit" class="btn bg-secondary text-white">Register</button>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!--CODE ####################################### HERE #################### -->
                </div>
                <div class="foot">
                    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
                        <div class="container text-center">
                          <small>Copyright &copy; Yunas An</small>
                        </div>
                      </footer>
                </div>
            </div>
        <script src="" async defer></script>
         
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>

</html>