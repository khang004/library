<?php
include_once "include/common.php";

// Lấy danh sách sách với tác giả và thể loại
$sql = "SELECT 
            b.id, 
            b.title, 
            b.publish_year,
            a.name AS author_name,
            c.name AS category_name
        FROM books b
        LEFT JOIN authors a ON b.author_id = a.id
        LEFT JOIN categories c ON b.category_id = c.id
        ORDER BY b.id DESC";

$data = db_select($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quản lý thư viện</title>
<style>

.row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}
.nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;      
    gap: 20px;
    font-size: 20px;          
}
.nav ul li a{
    text-decoration: none;
}
.nav ul li a:hover{
    color: violet;
}
.col {
    flex: 1 1 300px;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 15px;
    box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    background: #fff;
}
.p-detail h5 {
    margin-bottom: 10px;
}

.p-detail p {
    margin: 5px 0;
}
.p-action button {
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    background: #6B73FF;
    color: #fff;
    cursor: pointer;
    transition: 0.3s;
}
.p-action button:hover {
    background: #000DFF;
}
.center {
    color: rgba(255, 85, 0, 0.68);
    text-align: center;
}
</style>
</head>
<body>
<nav class="nav">
    <ul>
        <li><a href="/library/admin/books">book</a></li>
        <li><a href="/library/admin/borrows">borrow</a></li>
        <li><a href="/library/admin/authors">authors</a></li>
        <li><a href="/library/admin/categories">categories</a></li>
    </ul>
</nav>
<main>
    <h1 class="center">Quản Lý Thư Viện</h1>

    <div class="row">
        <?php foreach ($data as $b) : ?>
        <div class="col">
            <div class="p-detail">
                <h5><?=$b["title"]?></h5>
                <p><strong>authors:</strong> <?=$b["author_name"]?></p>
                <p><strong>categories:</strong> <?=$b["category_name"]?></p>
                <p><strong>publish_year:</strong> <?=$b["publish_year"]?></p>
                <?php if(!empty($b["description"])): ?>
                <p><strong>Mô tả:</strong> <?=$b["description"]?></p>
                <?php endif; ?>
            </div>
            <div class="p-action">
                <button>add book</button>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</main>
</body>
</html>
