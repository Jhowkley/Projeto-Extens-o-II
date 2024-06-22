<?php
include dirname(__FILE__) . '/../database/config.php';

$sql = "SELECT * FROM item";
$itens = $conn->query($sql) or die($conn->error);

include "../includes/home.html";