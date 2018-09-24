<?php
    session_start(); 
    if(isset($_POST["submit"])){
        $nama = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        $dir = "foto/";

        $uploadgambar = move_uploaded_file($tmp, $dir.$nama);
        if($uploadgambar){
            $hobi = $_POST['hobi'];
            $_SESSION['hobi'] = $hobi;
            $_SESSION['gambar'] = $dir.$nama;
            header('Location: halaman_akhir.php');      
        }
    }
    
    
?>