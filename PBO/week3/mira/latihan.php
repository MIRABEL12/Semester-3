<!DOCTYPE html>
<html>
    <head>
        <title>TEMEN BARU</title>
    </head>

    <body>    
        <?php echo "hi temen baru! nandha, galur, baqi!";?>
        
        <?php 
                $NIM = 10221071;
                echo $NIM;
        ?>

        <?php
            $umur = "57";
            $nim = "03221091";
            var_dump($umur);
            echo "<br />";
            var_dump($nim);
        ?>

        <?php
            $array = array (121,12.1,"galur starboi");
            var_dump($array[0]);
            echo "<br />";
            var_dump($array[1]);
            echo "<br />";
            var_dump($array[2]);
        ?>

        <?php
            class Mahasiswa {
            Public $nama;
            Public $nim;
            public $prodi;
            public $ipk;
        }

            $bhanu = new Mahasiswa;
            $bhanu->nama = "Bhanu";
            $bhanu->nim = "03221091";
            $bhanu->prodi = "Teknik Mesin";
            $bhanu->ipk = 4;
            echo "<pre>";
            print_r($bhanu);
            echo "</pre>";
        ?>

        <?php
            $nama = "Bhanu";
            $nim = "03221091";
            $prodi = "Teknik Mesin";
            $ipk = 4;
            return [
                "nama" => $nama,
                "nim" => $nim,
                "prodi" => $prodi,
                "ipk" => $ipk
            ];
        ?>
    </body>

    <?php
    $data = include('data.php');
    ?>

        <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TEMEN BARU</title>
    </head>

    <body>
        <p>Nama : <?php echo $data ['Nama'] ?></p>
        <p>NIM : <?php echo $data ['NIM'] ?></p>
        <p>Program Studi : <?php echo $data ['Program Studi'] ?></p>
        <p>IPK : <?php echo $data ['IPK'] ?></p>
    </body>

</html>
 
<!-- kalau int angka depan gblh 0 -galur, kalimat langsung tdk pakai tanda petik -->
<!-- kalau mau pake 0 depannya pake string "" -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS</title>
</head>

<body>
    <?php
        $nama = " Andi Mira Detavia ";
        $nim = 10221023;
        $prodi = " Sistem Informasi ";
        $jurusan = "JMTI";
        ?>
    <p>Selamat Datang!</p>
    <p>Nama :<?php echo $nama ?></p>
    <p>NIM :<?php echo $nim ?></p>
    <p>Program Studi :<?php echo $prodi ?></p>
    <p>Jurusan : <?php echo $jurusan ?></p>
    
</body>
</html>

