<?php
require_once '../models/PlantModel.php';

$plantModel = new PlantModel($conn);

$id = isset($_GET["id"]) ? $_GET["id"] : null;

if ($id !== null) {
    $plant = $plantModel->getPlantById($id);

    if ($plant) {
        if (isset($_POST["submit"])) {
            $data = [
                "id" => $_POST["id"],
                "name" => $_POST["name"],
                "kategori" => $_POST["kategori"],
                "jenis" => $_POST["jenis"],
                "harga" => $_POST["harga"]
            ];
            // echo $data['id'];
            // echo $plantModel->updatePlant($data);
            if ($plantModel->updatePlant($data) > 0) {
                echo "
                    <script>
                        alert('Data berhasil diperbarui!');
                        document.location.href = 'admin.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('Gagal memperbarui data!');
                        document.location.href = 'editData.php?id=$id';
                    </script>
                ";
            }
        }
    } else {
        echo "Data tidak ditemukan";
    }
} else {
    echo "ID tidak diberikan";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleadd.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="side-bar">
            <div class="header">| Panel Admin</div>
            <div class="profile">
                <img src="../asset/profileee.jpg" alt="">
                <h4>Rayhan</h4>
                <h5>Admin</h5>
            </div>
            <div class="menu-bar">
                <button class="dashbord">Dashboard</button>
                <button class="users">Users</button>
                <button class="settings">Settings</button>
                <a href="login.php"><button class="logout" onclick="">Log Out</button></a>
            </div>
        </div>
        <div class="content">
            <nav class="navbar">
                <a id="btnback" href="admin.php" class="bx bx-arrow-back"></a>
                <a id="search" href="#" class="bx bx-search"></a>
                <form action=""><input type="text" placeholder="Search" class="search"></form>
                <a id="notif" href="#" class="bx bx-bell"></a>
            </nav>
            <div class="mini-container">
                <div class="add-plant">
                    <h1>EDITT PLANT (NEXT TIMEE)</h1>
                </div>
                <hr width="100%" height="2px">
                <div class="box">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $plant["id"]?>">
                        <label class="input-group-text" id=nama >nama : 
                        <input type="text" placeholder="nama bunga" class="inp" name="name" id="name" required value="<?= $plant["name"]  ?>"></label>
                        <div class="input-group">
                            <label class="input-group-text" >Kategori : </label>
                            <select class="form-select" name="kategori" id="kategori" required value="<?= $plant["kategori"]?>">
                                <option selected ><?= $plant["kategori"]?></option>
                                <option value="Bibit" >Bibit</option>
                                <option value="Remaja">Remaja</option>
                                <option value="Dewasa">Dewasa</option>
                            </select>
                        </div>

                        <div class="input-group">
                            <label class="input-group-text" >Jenis : </label>
                            <select class="form-select" name="jenis" id="jenis" required>
                                <option selected><?= $plant["jenis"]?></option>
                                <option value="Varigata">Varigata</option>
                                <option value="Normal">Normal</option>
                                <option value="Unik">Unik</option>
                            </select>
                        </div>
                        <label class="input-group-text" >harga : 
                        <input type="text" placeholder="harga" class="inp" name="harga" id="harga" required value="<?= $plant["harga"]?>"></label>
                        <button class="btn-save" type="submit" name="submit">SIMPAN</button>
                        <button class="btn-cancel">BATAL</button>
                    </form>
                    
                </div>
                
            </div>
        </div>
    </div>
</body>
</html> 
