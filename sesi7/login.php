<?php
    session_start();

    if(isset ($_POST["txUSER"])){
        $user = $_POST["txUSER"];
        $pwd = $_POST["txUSER"];
        $sql = "SELECT tu.nama, tu.email, tu.username, tu.passkey, tu.iduser FROM tbuser tu WHERE tu.username='".$user."';";
        include_once("koneksi.php");
        $hsl = mysqli_query($cnn, $sql);
        $jdata = mysqli_num_rows($hsl);
        if($jdata > 0){
            $h = mysqli_fetcht_assoc($hsl);
            $nama = $h["nama"];
            $ema = $h["email"];
            $uname = $h["username"];
            $pass = $h["passkey"];
            $idusr = $h["iduser"];
            if($pass == $pwd){
                $_SESSION["login"] = $iduser;
                $_SESSION["user"] = $uname;
                $_SESSION["nama"] = $nama;
                $_SESSION["ema"] = $email;
                header("location: dashboard.php");
            }
            
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    
    <form methode="POST" action ="login.php">

    <h3> login </h3>

    <div>
        username
        <input type="text" name="txUSER">
    </div>
    <div>
        password
        <input type="password" name="txPASS">
    </div>

        <div>
            <button type="submit"> login </button>
            <a href="registrasi.php"> registrasi </a>
        </div>
    </form>

</body>
</html>