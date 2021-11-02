<?php
error_reporting(0);
    //User dan Pass untuk login ke aplikasi
        $user = array(
            //ini User dan Passwordnya
                        "user" => "bkipm",
                        "pass"=>"manado"            
                );
if (isset($_POST['submit'])) {
    //Sesion Login
    if ($_POST['username'] == $user['user'] && $_POST['password'] == $user['pass']){
        $_SESSION["username"] = $_POST['username']; 
        header("Location: Home.php");
    } else {
        display_login_form();
        //Pesan Error ketika salah user atau password
        echo "<script>alert('Username atau password salah!');</script>";
        echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
    }
}    
else { 
    display_login_form();
}
function display_login_form(){ ?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>BUKU TAMU BKIPM MANADO</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="container">
         <div class="page-header">
                    <h2>
                        <b><font color='#ffffff'>BUKU TAMU</b></font>
                        <small><br><font color='#ffffff'>BKIPM MANADO</small></font>
                    </h2>
                </div>
            </center></br>
            <div id="hasil"></div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' class="form-horizontal" onsubmit="loginpel(); return false">
    <div class="form-group">
    <label for="username" class="col-sm-3 control-label">Username</label>
    <div class="col-sm-9">
    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
    </div>
    </div>
    <div class="form-group">
    <label for="password" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-9">
    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required><br>
    <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </div> 
            </form>
        </div>
    </body>
</html>
<?php } ?>