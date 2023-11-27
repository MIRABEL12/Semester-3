<?php

namespace MyClass;

class MyClass
{
    private $nama;
    private $nim;

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setNim($nim)
    {
        if (preg_match('/^\d{8}$/', $nim)) {
            $this->nim = $nim;
        } else {
            throw new \InvalidArgumentException("Silahkan Periksa NIM Anda Kembali!");
        }
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getNim()
    {
        return $this->nim;
    }
}