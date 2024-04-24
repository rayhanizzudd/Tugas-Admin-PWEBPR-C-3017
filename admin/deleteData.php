<?php 
require_once '../models/PlantModel.php';

// Membuat objek PlantModel
$plantModel = new PlantModel($conn);

// Mendapatkan ID tanaman yang akan dihapus dari parameter GET
$id = $_GET["id"];

// Memanggil metode deletePlant() dari objek $plantModel dan meneruskan ID tanaman
if ($plantModel->deletePlant($id) > 0) {  
    echo "
        <script>
            alert('DELETE DATA SUCCESS!');
            document.location.href = 'admin.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('DELETE DATA FAILED!');
            document.location.href = 'admin.php';
        </script>
    ";
}
?>
