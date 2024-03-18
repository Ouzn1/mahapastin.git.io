<?php

require 'functions.php';

$mahasiswa = query(" SELECT * FROM users");

if(isset($_POST['submit'])){
    if(daftar($_POST) > 0 ){
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>
    ";
    }else{
        echo "
        <script>
        alert('data gagal ditambahkan');
        document.location.href =index.php;
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
    <title>REGISTRASI AKUN</title>
    <style>
        body{
            background-color: rgb(102, 255, 47);
        }
        body>h2{
            
            display: flex;
            justify-content: center;
            font-size: 15px;
        }
 
       
       li{
        
            display: grid;
            justify-content: center;
            align-items: center;
        }
        a{
            
            color:black;
        }
        p{
           
            font-size: 1.2em;
        }
        .inputp{
            
            display: grid;
        }
        
    </style>
</head>
<body>
    <h2>form registrasi pendaftaran anggota baru MAHAPASTIN</h2>
    <hr>
    <form action="" method="post">
        <fieldset class="legend">
                    
                            
  <legend><h3>data peserta baru</h3></legend>
                                
        <div>
              <li><label for="nama">Nama lengkap : </label>
                   <input type="text" name="username" id="nama" class=inputp autocomplete ="off"  required autofocus>
                    </li>
                    <li>  <label for="password">Password:</label>
            <input type="password" name="password" id="nama" class=inputp autocomplete ="off"  required>
        </li>
             <li>
             <label for="jurusan">Jurusan/Kelas : </label>
                   <input type="text" name="jurusan_kelas" id="jurusan" class=inputp autocomplete ="off"  required>
       </li>
       <li><label for="divisi">divisi : </label>
                   <input type="text" name="divisi" id="divisi" class=inputp autocomplete ="off"  required>
                    </li>
                    <br>
    <li>
    <button type ="submit" name ="submit" >Daftar sekarang!</button>
    </li>
     <p>sudah memiliki akun? <a href="login.php">LOGIN</a></p>
            </fieldset>
                        </div>
    
    </form>

  
</body>
</html>