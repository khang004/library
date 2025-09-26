<?php
include_once "../../include/common.php";

$readers_id = $_POST["readers_id"] ?? "";
$books_id = $_POST["books_id"] ?? "";
$borrow_date = $_POST["borrow_date"] ?? "";
$return_date = $_POST["return_date"] ?? "";
$status = $_POST["status"] ?? "";

$sql = "INSERT INTO books(readers_id, books_id, borrow_date, status)
        VALUES(?, ?, ?, ?)";
db_execute($sql, [$readers_id, $books_id, $borrow_date, $status]);

redirect_to("/admin/books");
