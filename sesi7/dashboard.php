<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("location: login.php");
    }
    if($_SESSION["login"] == ""){
        header("location: login.php");
    }
    $konten = "<h3> selamat datang ".$_SESSION["nama"]."</h3>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
    <ul>
        <li> <a href="?aksi=dtmhs">DataMahasiswa</a> </li>
        <li> <a href="?aksi=dtdsn">DataDosen</a> </li>
        <li> <a href="?aksi=dtmk">DataMataKuliah</a> </li>
        <li> <a href="?aksi=dtu">DataUser</a> </li>
        <li> <a href="?aksi=logout"><?=$_SESSION[user]?>-logout </a> </li>
     </ul>
    
<div> 
    <?php
    echo $konten;
    ?>
</div>


</body>
</html>