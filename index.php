<head>
    <link rel="stylesheet" href="style.css">
</head>

<?php 
$info = '';
try {
$dsn = 'mysql:host=localhost;dbname=reload;charset=utf8';
$username = 'root';
$pass = '';

$pdo = new PDO($dsn, $username, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['click'])) {
    $message = $_POST['message'];
    $sql = "INSERT INTO text (id, message) VALUES (1, :text) 
        ON DUPLICATE KEY UPDATE message = :text";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['text' => $message]);
 }

$array = $pdo->query("SELECT message FROM `text` WHERE id = 1");

foreach($array as $key => $value) {
    $info =  htmlspecialchars($value["message"], ENT_QUOTES ); } 

} catch(PDOException $e) {
    echo "Error " . $e->getMessage();
}

?>


<div>
<form action="" method="POST">
    <textarea name="message" placeholder="Your Text"><?= htmlspecialchars((string)$info, ENT_QUOTES) ?></textarea>
    <p>
    <input type="submit" name="click" class="reload" value="Reload">
    </p>
</form>
</div>



   
   

        