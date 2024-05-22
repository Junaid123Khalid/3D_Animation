<?php
include 'db.php';

$model = $_GET['model'];
$query = $db->prepare("SELECT * FROM models WHERE name = :model");
$query->bindParam(':model', $model);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

echo json_encode($result);
?>
    