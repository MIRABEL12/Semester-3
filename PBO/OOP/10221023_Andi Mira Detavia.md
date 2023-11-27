# TUGAS PRAKTIKUM OOP WEEK 9

## Nama : Andi Mira Detavia
## NIM : 10221023
## Kelas : PBO A

Membuat OOP PHP dengan menggunakan Inheritance, Objective dari Program : Menampilkan 2 Data Mahasiswa. 
Atribute : 4 -> Nama, NIM, Prodi dan Jurusan.
Inheritance :
Class 1 -> Nama , NIM
Class 2 (Rxtends Class) -> Prodi, Jurusan

```php
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
```

Output;

```
Nama saya Andi Mira Detavia dengan NIM 10221023 dari Program Studi Sistem Informasi Jurusan JMTI.
Dan saya Nandha Aulia dengan NIM 10221071 dari Program Studi Sistem Informasi Jurusan JMTI.
```
