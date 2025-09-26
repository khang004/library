<?php
include_once "../_header.php";

$id = $_GET["id"] ?? "";
$sql = "SELECT 
            b.id, 
            b.title, 
            b.author_id,
            b.category_id,
            b.publish_year,
            a.name AS author_name,
            c.name AS category_name
        FROM books b
        LEFT JOIN authors a ON b.author_id = a.id
        LEFT JOIN categories c ON b.category_id = c.id
        WHERE b.id = ?";
        
$data = db_select($sql, [$id]);
$data = $data[0];
?>
<form action="update.php" method="post" enctype="multipart/form-data">
    <label>name book</label>
    <input type="text" name="title" required>
    <br>
    <label>authors</label>
    <select name="author_id" required>
        <option value="">select authors</option>
        <?php foreach($authors as $a): ?>
            <option value="<?=$a['id']?>"><?=$a['name']?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <label>categories</label>
    <select name="category_id" required>
        <option value="">select categories</option>
        <?php foreach($categories as $c): ?>
            <option value="<?=$c['id']?>"><?=$c['name']?></option>
        <?php endforeach; ?>
    </select>
     <br>       
    <label>published_year</label>
    <input type="date" name="published_year" min="1500" max="<?=date("Y")?>">
     <br>       
    <label>description</label>
    <textarea name="description" rows="4" cols="50"></textarea>
    <br>
    <button type="submit">ADD</button>
</form>
<br>
<?php include_once "../_footer.php" ?>