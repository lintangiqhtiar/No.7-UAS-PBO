<!DOCTYPE html>
<?php 
    class syarat
    {
        public $gol;
        public $gejala;
        public $atasi;

        public function __construct($gol,$gejala,$atasi = "Syarat-Syarat")
        {
            $this->gol = $gol;
            $this->gejala = $gejala;
            $this->atasi = $atasi;
        }

    }

    $syaratmedis = new syarat("Hewan Peliharaan","Penyakit","Medis");
    ?>

    <?php
        interface jenis{
            public function getJenis();
            public function getkeluhan();
        }

        abstract class Hewan{
            private $nama;

            public function jenis() {

            }

            public function keluhan() {

            }

            public function getnama($nama){
                $this->nama=$nama;
            }
        }

        class Burung extends Hewan implements jenis{

            public function getJenis(){
                echo "Burung, ";
            }
            public function getkeluhan(){
                echo "Mortalitas dan Status gizi";
            }
        }

        class Anjing extends Hewan implements jenis{
            public function getJenis(){
                echo "Anjing, ";
            }
            public function getkeluhan(){
                echo "Mortalitas dan Morbiditas";
            }
        }

        class Kucing extends Hewan implements jenis{
            public function getJenis(){
                echo "Kucing";
            }
            public function getkeluhan(){
                echo "Morbiditas dan Status gizi";
            }
        }

        $burung=new Burung;
        $anjing=new Anjing;
        $kucing=new Kucing;
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
                Data Hewan di PetShop
            </a>
            </div>
        </nav>
<div class="container-fluid">
    <center><h1>Data Master Hewan</h1></center>
    <table class="table table-striped">
    <br><h5 >Prosedur Penanganan <br></h5>
        <tr>
            <th> Hewan yang dibawa merupakan <?php echo $syaratmedis->gol; ?></th>
        </tr>
        <tr>
             <th> Gejala yang ditimbulkan tergolong <?php echo $syaratmedis->gejala; ?><br></th>
        </tr>
        <tr>
            <th> Petshop memberikan penanganan berupa penananganan <?php echo $syaratmedis->atasi; ?><br> </th>
        </tr>
    </table>
    <table class="table table-striped">
    <br><h5 >Data Dasar Hewan <br></h5>
        <tr>
            <th> Pada sistem terekan tiga jenis hewan yang dapat ditangani yakni 
                <?php 
                    $burung->getjenis();
                    $anjing->getjenis(); 
                    $kucing->getjenis();
                ?></th>
        </tr>
        <tr>
             <th> Tanpa ada batasan usia dan tingkat keadaan <?php echo $syaratmedis->gejala; ?> yang diderita<br></th>
        </tr>
        <tr>
            <th> Menjelaskan keluhan secara rinci secara <?php echo $syaratmedis->atasi; ?><br> </th>
        </tr>
    </table>
    <table class="table table-striped">
    <br><h5 >Penanganan Keluhan <br></h5>
        <tr>
            <th> Penanganan pada burung memperhatikan derajat kesehatan berupa <?php echo $burung->getkeluhan(); ?> </th>
        </tr>
        <tr>
             <th> Penanganan pada anjing memperhatikan derajat kesehatan berupa <?php echo $anjing->getkeluhan(); ?><br></th>
        </tr>
        <tr>
            <th> Penanganan pada kucing memperhatikan derajat kesehatan berupa <?php echo $kucing->getkeluhan(); ?><br> </th>
        </tr>
    </table>
    <div class="mt-3 mb-3">
    <a href=index.php type="button" class="btn btn-secondary">Kembali</a>
    </div>
</div>


    </body>
</html>