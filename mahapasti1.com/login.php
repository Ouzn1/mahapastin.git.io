<?php
require "functions.php";

$mahasiswa = query(" SELECT * FROM users");

if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];

   $result =mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' && password ='$password'" );

   if(mysqli_num_rows($result)===1){
    header("Location: layout/akun.html");
    exit;
   }else{
    echo "
    <script>
    alert('data salah');
    document.location.href =login.php;
    </script>
";

   }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN AKUN</title>

    <style>
        body{
            background-color: rgb(102, 255, 47);
        }
        h3{
            display:flex;
            justify-content:center;
        }
        li{
            display:grid;
            justify-content:center;
            align-items:center;

        }
        a{
            color:black;
            font-size:1em;
        }
        p{
           
           font-size: 1.2em;
       }
    </style>
</head>
<body>
    <h3>Haloo selamat datang di web mahapastin</h3>
    <form action="" method="post">
    <fieldset>
    <legend><h3>Login</h3></legend><div class="uli"> 
         <li><label for="nama">Nama lengkap :</label>
            <input type="text" name="username" placeholder="Nama lengkap" autofocus  autocomplete="off" required></li>
        <li>   <label for="password">Kata sandi : </label>
            <input type="password" name="password" placeholder="password" autocomplete="off" required></li>
        <br>
        <li><button type="submit" name ="submit">Login</button></li>
        <li>belum punya akun? <p><a href="index.php">Daftar</a></p></li>
     </div>
      
    </fieldset>
    </form>
   
</body>
</html>