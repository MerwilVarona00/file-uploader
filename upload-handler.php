<?php
include "File.php">
$dsn = "mysql:host=localhost;dbname=pdc10_db";
$user = "merwil";
$passwd = "asdfghjk";
$pdo = new PDO($dsn, $user, $passwd);
$result - File::handleUpload($_FILES['input_file']);

if($result !== FALSE) {
    $fileObj = new File($_POST['complete_name'], $_POST['email'], $password = $_POST['password'], $result['picture_path']);
    $result = $fileObh->save();
    header('location: index.php?success=1');
} else {
    Header('Location: index.php?error=' . $e->getMessage());
}
?>