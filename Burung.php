<!DOCTYPE html>
<?php
    
    include 'koneksi.php';
        $id='';
        $Nama = '';
        $tgl_lahir = '';
        $usia = '';
        $jk='';
        $Jenis = '';
        $Keluhan='';

        if(isset($_GET['ubah'])){
            $id = $_GET['ubah'];
     
            $query = "SELECT * FROM hewanpeliharaan WHERE id = '$id';";
            $sql = mysqli_query($conn,$query);
     
            $result = mysqli_fetch_assoc($sql);
     
            $Nama = $result['Nama'];
            $tgl_lahir = $result['tgl_lahir'];
            $usia = $result['usia'];
            $jk = $result['jk'];
            $Jenis = $result['Jenis'];
            $Keluhan = $result['Keluhan'];

            //var_dump($result);
            //die();
        }
?>

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
                Data Hewan di PetShop (Burung)
              </a>
            </div>
        </nav>
        <!--FORM-->
        <div class="container-fluid mt-3">
            <form method="POST" action="proses.php" enctype="multipart/form-data"> <!--ini form-->
            <input type="hidden" value="<?php echo $id;?>" name="id">
                <div class="mb-3 row">
                    <label for="Nama" class="col-sm-2 col-form-label">
                        Nama 
                    </label>
                    <div class="col-sm-10">
                    <input required type="text" name= "Nama"class="form-control" id="Nama" placeholder="" value="<?php echo $Nama; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tgl_lahir" class="col-sm-2 col-form-label">
                        Tanggal Lahir 
                    </label>
                    <div class="col-sm-10">
                    <input required type="date" name= "tgl_lahir"class="form-control" id="tgl_lahir" placeholder="" value="<?php echo $tgl_lahir; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="usia" class="col-sm-2 col-form-label">
                        Usia 
                    </label>
                    <div class="col-sm-10">
                    <input required type="int" name= "usia"class="form-control" id="usia" placeholder="" value="<?php echo $usia; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jk" class="col-sm-2 col-form-label">
                        Jenis Kelamin
                    </label>
                    <div class="col-sm-10">
                        <select required id="jk" name= "jk" class="form-select" aria-label="Default select example">
                            <option <?php if($jk == 'Jantan'){echo "selected";} ?>>Jantan</option>
                            <option <?php if($jk == 'Betina'){echo "selected";} ?>>Betina</option>
                        </select>
                    </div>
                <div class="mt-3 mb-3 row">
                    <label for="Jenis" class="col-sm-2 col-form-label">
                         Jenis
                    </label>
                    <div class="col-sm-10">
                    <select  required id="Jenis" name="Jenis" class="form-select" aria-label="Default select example">
                        <option <?php if($Jenis == 'Burung'){echo "selected";} ?>>Burung</option>
                        <option <?php if($Jenis == 'Anjing'){echo "selected";} ?>>Anjing</option>
                        <option <?php if($Jenis == 'Kucing'){echo "selected";} ?>>Kucing</option>
                    </select>
                </div>
                <div class="mb-3 mt-3 row">
                    <label for="Keluhan" class="col-sm-2 col-form-label">
                    Keluhan
                    </label>
                    <div class="col-sm-10">
                        <textarea required class="form-control" id="Keluhan" name="Keluhan" rows="3"><?php echo $Keluhan; ?></textarea>
                    </div>
                </div>   
                <div class="mb-3 mt-3 row">
                    <div class="col">
                        <?php
                        if(isset($_GET['ubah'])){
                        ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                Simpan
                        </button>
                        <?php
                        }else{
                        ?>
                         <button type="submit" name="aksi" value="add" class="btn btn-primary">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                            Tambah
                        </button>
                        <?php
                        }
                        ?>
                        <a href="index.php" type="button" class="btn btn-danger">
                            <i class="fa fa-reply" aria-hidden="true"></i>
                            Batal
                        </a>
                    </div>
                </div>
            </form>
    </body>
</html>