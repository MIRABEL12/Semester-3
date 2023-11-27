<?php
    class mahasiswa1 { // This is class
        public function nama() { // This is method
        return "Andi Mira Detavia ";
        }
        public function NIM() {
        return "10221023 ";
        }
    } 

    class data1 extends mahasiswa1 { 
        public function jurusan(){
        return "JMTI. ";
        }
        public function prodi(){
        return "Sistem Informasi ";
        }
    }

    class mahasiswa2 { // This is class
        public function nama() { // This is method
        return "Nandha Aulia ";
        }
        public function NIM() {
        return "10221071 ";
        }
    }

    class data2 extends mahasiswa2 { 
        public function jurusan(){
        return "JMTI. ";
        }
        public function prodi(){
        return "Sistem Informasi ";
        }
    }

    // Try to call all methods from class
    $mahasiswa1 = new mahasiswa1();
    $data1 = new data1();
    $mahasiswa2 = new mahasiswa2();
    $data2 = new data2();

    echo "Nama saya ". $mahasiswa1->nama(). "dengan NIM ". $mahasiswa1->NIM().
    "dari Program Studi ". $data1->prodi(). "Jurusan ". $data1->jurusan()."<br>";

    echo "Nama Saya ". $mahasiswa2->nama(). "Dengan NIM ". $mahasiswa2->nim().
    "dari Program Studi ". $data2->prodi(). "Jurusan ". $data2->jurusan()."<br>"; 
?>