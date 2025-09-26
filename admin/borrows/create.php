<?php
include_once "../_header.php";

?>
<h2>borrows</h2>
<form action="insert.php" method="post" enctype="multipart/form-data">
    <label>name-readers</label>
    <input type="text" name="readers_id" required>
    <br>
    <label>id-book</label>
    <select name="books_id" required>
        <option value="">select book</option>
        <?php foreach($authors as $a): ?>
            <option value="<?=$a['id']?>"><?=$a['name']?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <label>borrow-date</label>
    <input type="date" name="borrow_date" required></input>
     <br>       
    <label>return-date</label>
    <input type="date" name="return_date" min="15000" max="<?=date("Y")?>">
     <br>       
    <label>status</label>
    <select name="status">
        <option value="null">None</option>
        <option value="borrowed-books">borrowed books</option>
        <option value="return">return</option>
    </select>
    <br>
    <button type="submit">continue</button>
    <br>
    <a href="/library/admin/borrows">🔙BACK</a>
</form>

<?php include_once "../_footer.php"; ?>
