<?php

namespace MyApp;

include_once 'conn.php';

class User
{
    private $conn;

    public function __construct()
    { 
        global $conn;
        $this->conn = $conn;
    }

    public function getAllUsers()
    {
        $stmt = $this->conn->query("SELECT * FROM user");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getUserById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function addUser($nama)
    {
        $stmt = $this->conn->prepare("INSERT INTO user (nama) VALUES (:nama)");
        $stmt->bindParam(':nama', $nama);
        $stmt->execute();
    }

    public function updateUser($id, $nama)
    {
        $stmt = $this->conn->prepare("UPDATE user SET nama = :nama WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nama', $nama);
        $stmt->execute();
    }

    public function deleteUser($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM user WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>
