<?php

$conn = mysqli_connect("localhost","root", "","mapala");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
function daftar($data){
    global $conn;
    $nama = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $jurusan_kelas= htmlspecialchars($data['jurusan_kelas']);
    $divisi =htmlspecialchars($data['divisi']);

    $query = "INSERT INTO users VALUES ('', '$nama','$password','$jurusan_kelas','$divisi')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}
function login($data){
    global $conn;
    $nama = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
   

    $query="SELECT * FROM users";
    mysqli_query($conn,$query);
   

  
}

?>