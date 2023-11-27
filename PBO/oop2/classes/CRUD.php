<?php
class CRUD extends Database {
    public function create($name, $nim, $prodi, $jurusan) {
        $query = "INSERT INTO users (name, nim, prodi, jurusan) VALUES ('$name', '$nim', '$prodi', '$jurusan')";
        return $this->conn->query($query);
    }

    public function read() {
        $query = "SELECT * FROM users";
        return $this->conn->query($query);
    }

    public function update($id, $name, $nim, $prodi, $jurusan) {
        $query = "UPDATE users SET name = '$name', nim = '$nim', prodi = '$prodi', jurusan = '$jurusan' WHERE id = $id";
        return $this->conn->query($query);
    }

    public function delete($id) {
        $query = "DELETE FROM users WHERE id = $id";
        return $this->conn->query($query);
    }
}
?>