<?php 
require_once '../models/PlantModel.php';
// var_dump($result['id']);\
// Membuat objek PlantModel
$plantModel = new PlantModel($conn);

// Mendapatkan semua data tanaman
$result = $plantModel->getAllPlants();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleee.css">
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
                <button class="users">Tanaman</button>
                <button class="settings">Settings</button>
                <a href="../pages/login.php"><button class="logout" onclick="">Log Out</button></a>
            </div>
        </div>
        <div class="content">
            <nav class="navbar">
                <a id="btnback" href="#" class="bx bx-arrow-back"></a>
                <a id="search" href="#" class="bx bx-search"></a>
                <form action=""><input type="text" placeholder="Search" class="search"></form>
                <a id="notif" href="#" class="bx bx-bell"></a>
            </nav>
            <div class="mini-container">
                <div class="add-user">
                    <h4>Plant List</h4>
                    <a href="addData.php"><button>Add Plant</button></a>
                </div>
                <hr width="100%" height="2px">
                
                    <table width="100%" border="0" class="my-table">
                        <thead class="table-head">                            
                            <tr>
                                <th>No.</th>
                                <th>id</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Jenis</th>
                                <th>Harga</th>
                                <th class="text-edit-hps">Edit &#8195  &#8195  Hapus</th>
                            </tr>
                        </thead>
                        <!-- isiann -->
                        <tbody class="table-body">
                            <?php $i = 1; ?>
                            <<?php foreach( $result as $plant ) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $plant['id']?></td>
                                <td><?= $plant['name']?></td>
                                <td><?= $plant['kategori']?></td>
                                <td><?= $plant['jenis']?></td>
                                <td><?= $plant['harga']?></td>
                                <td class= "btn-edit-hps">
                                 <a href="editData.php?id=<?= $plant["id"]?>"><button class="bx bx-edit" Id="icon-edit"></button></a> 
                                 <a href="deleteData.php?id=<?= $plant["id"]?>" onclick="return confirm('Sure Delete Data?')"><button class= "bx bx-x-circle" Id="icon-delete"></button></a>
                                </td>
                            </tr>
                            <?php $i++;?>
                            <?php endforeach;?>
                        </tbody>                       
                    </table>                
            </div>
        </div>
    </div>
</body>
</html> 
