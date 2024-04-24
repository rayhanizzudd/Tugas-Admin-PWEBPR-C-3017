<?php
// PlantModel.php
require_once 'dbconnect.php';
class PlantModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllPlants() {
        $query = "SELECT * FROM plant";
        $result = $this->conn->query($query);
        $plants = [];
        while ($row = $result->fetch_assoc()) {
            $plants[] = $row;
        }
        return $plants;
    }

    public function getPlantById($id) {
    $stmt = $this->conn->prepare("SELECT * FROM plant WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
    }

    public function addPlant($data) {
        $stmt = $this->conn->prepare("INSERT INTO plant (name, kategori, jenis, harga) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $data['name'], $data['kategori'], $data['jenis'], $data['harga']);
        $stmt->execute();
        return $stmt->affected_rows;
    }

    public function updatePlant($data) {
        $stmt = $this->conn->prepare("UPDATE plant SET name=?, kategori=?, jenis=?, harga=? WHERE id=?");
        $stmt->bind_param("ssssi", $data['name'], $data['kategori'], $data['jenis'], $data['harga'], $data['id']);
        $stmt->execute();
        return $stmt->affected_rows;
    }

    public function deletePlant($id) {
        $stmt = $this->conn->prepare("DELETE FROM plant WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->affected_rows;
    }
}
?>
