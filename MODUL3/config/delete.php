<?php
require './connector.php';

$id = $_GET['id'];

$deletequery = "DELETE FROM showroom_table WHERE id_mobil = $id";

if (mysqli_query($conn, $deletequery)) {
  header("location: ../pages/ListCar.php?pesan=delete");
} else {
  header("location: ../pages/ListCar.php?pesan=failed");
}
