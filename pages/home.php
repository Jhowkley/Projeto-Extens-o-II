<?php
include dirname(__FILE__) . '/../database/config.php';

$sql = "SELECT * FROM item";
$itens = $conn->query($sql) or die($conn->error);

print_r($itens);
exit;

include __DIR__ . '/../includes/home.html';