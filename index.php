<?php
  include 'koneksi.php';
$query = "SELECT*FROM hewanpeliharaan;";
$sql = mysqli_query($conn,$query);
$no = 0;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pet</title>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <!--<img src="" alt="" width="30" height="24" class="d-inline-block align-text-top">-->
                Data Hewan di PetShop
              </a>
            </div>
          </nav>
          <!-- Judul -->
          <div class="container-fluid">
            
                <figure class="text-center">
                    <blockquote class="blockquote">
                    <p>Selamat datang di manajemen petshop</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                    Silahkan mengedit <cite title="Source Title"></cite>
                    </figcaption>
                </figure>
                <br> "Silahkan pilih hewan yang akan diinput"<br>
                <a href="Burung.php" type="button" class="btn btn-primary mb-3">
                  <i class="fa fa-user-plus" aria-hidden="true"></i>
                  Burung
                </a>
                <a href="Anjing.php" type="button" class="btn btn-primary mb-3">
                  <i class="fa fa-user-plus" aria-hidden="true"></i>
                  Anjing
                </a>
                <a href="Kucing.php" type="button" class="btn btn-primary mb-3">
                  <i class="fa fa-user-plus" aria-hidden="true"></i>
                  Kucing
                </a>
                <a href="Hewan.php" type="button" class="btn btn-primary mb-3">
                  <i class="fa fa-user-plus" aria-hidden="true"></i>
                  Biodata
                </a>
          </div>
          
          <div class="table-responsive mt-3">
          <h1>Data Sementara</h1>
            <table class="table align-middle table-hover" table-border>
            <thead>
                <tr>
                <th><center>No</center></th>
                <th>Nama</th>
                 <th>Tanggal Lahir</th>
                 <th>Usia</th>
                 <th>Jenis Kelamin</th>
                 <th>Jenis</th>
                 <th>Keluhan</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($result= mysqli_fetch_assoc($sql)){
            ?>
              <tr>
                <td><center>
                  <?php echo ++$no;?>.
                </center></td>
                <td><?php echo $result['Nama'];?></td>
                <td><?php echo $result['tgl_lahir'];?></td>
                <td><?php echo $result['usia'];?></td>
                <td><?php echo $result['jk'];?></td>
                <td><?php echo $result['Jenis'];?></td>
                <td><?php echo $result['Keluhan'];?></td>
                <td>
                <a href="kelola.php?ubah=<?php echo $result['id'];?>" type="button" class="btn btn-success btn-sm">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        Ubah
                    </a>
                <a href="proses.php?hapus=<?php echo $result['id'];?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin meghapus data tersebut?')">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        Hapus
                </a>
                </td>
            </tr>
            <?php
            }
            ?>
          </tbody>
          </table>
    </body>
</html>
