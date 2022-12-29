<!DOCTYPE html>
<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi']=="add"){


            $Nama = $_POST['Nama'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $usia = $_POST['usia'];
            $jk = $_POST['jk'];
            $Jenis = $_POST['Jenis'];
            $Keluhan = $_POST['Keluhan'];
    

            $query= "INSERT INTO hewanpeliharaan VALUES (null, '$Nama', '$tgl_lahir', '$usia', '$jk', '$Jenis', '$Keluhan')"; //akan berlanjut karena udah autoincremeent
            $sql = mysqli_query($conn, $query);
            if($sql){
                header("location:index.php" );
                
                //echo "data berhasil ditambahkan <a href='index.php'>Home</a>";
            } else {
                echo $query;
            }
            //echo $Nama." | ".$tgl_lahir." | ".$usia." | ".$jk." | ".$Jenis." | ".$Keluhan." | ".$email;

            //echo "<br>Tambah Data <a href='index.php'>Home</a>";
        } else if($_POST['aksi']=="edit"){
            
            //echo "Edit Data <a href='index.php'>Home</a>";
            //var_dump($_POST);
            $id= $_POST['id'];
            $Nama = $_POST['Nama'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $usia = $_POST['usia'];
            $jk = $_POST['jk'];
            $Jenis = $_POST['Jenis'];
            $Keluhan = $_POST['Keluhan'];
           
            $queryShow="SELECT*FROM hewanpeliharaan WHERE id = '$id'";
            $sqlShow=mysqli_query($conn,$queryShow);
            $result= mysqli_fetch_assoc($sqlShow);

            $query = "UPDATE tbl_mhs SET Nama = '$Nama', tgl_lahir='$tgl_lahir', usia='$usia', jk='$jk', Jenis='$Jenis', Keluhan = '$Keluhan' WHERE id='$id';";
            $sql = mysqli_query($conn,$query);
            header("location:index.php");

        }
    }
    if(isset($_GET['hapus'])){
        $id = $_GET['hapus'];
        $queryShow="SELECT*FROM tbl_mhs WHERE id = '$id'";
        $sqlShow=mysqli_query($conn,$queryShow);

        $query = "DELETE FROM tbl_mhs WHERE id = '$id';";
        $sql = mysqli_query($conn, $query);
        $result= mysqli_fetch_assoc($sqlShow);

        if($sql){
            header("location:index.php");
            //echo "data berhasil ditambahkan <a href='index.php'>Home</a>";
        } else {
            echo $query;
        }
        //echo "Hapus Data <a href='index.php'>Home</a>";

    }
?>