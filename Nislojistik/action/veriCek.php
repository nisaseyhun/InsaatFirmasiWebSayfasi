<?php

require 'baglan.php';

$stmt = $conn->prepare("SELECT * FROM cart WHERE KategoriID = ?");
$stmt->bind_param("i", $kategoriID);
$stmt->execute();
$result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

$stmtKategori = $conn->prepare("SELECT * FROM kategoriler WHERE kategoriID = ?");
$stmtKategori->bind_param("i", $kategoriID);
$stmtKategori->execute();
$resultKategori = $stmtKategori->get_result()->fetch_assoc();