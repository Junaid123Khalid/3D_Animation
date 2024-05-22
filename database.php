 <?php
// db.php - This file should contain your database connection setup
try {
    $db = new PDO('mysql:host=localhost;dbname=database', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(['error' => 'Connection failed: ' . $e->getMessage()]);
    exit();
}

$model = isset($_GET['model']) ? $_GET['model'] : '';
if ($model) {
    $query = $db->prepare("SELECT title, description FROM models WHERE name = :model");
    $query->bindParam(':model', $model);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        echo json_encode($result);
    } else {
        echo json_encode(['error' => 'Model not found']);
    }
} else {
    echo json_encode(['error' => 'No model specified']);
}
?>
