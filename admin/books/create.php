<?php
include_once "../_header.php";
?>

<h2>add-book</h2>
<form action="insert.php" method="post" enctype="multipart/form-data">
    <label>name book</label>
    <input type="text" name="title" required />
    <br>

    <label>description</label>
    <textarea name="description" rows="4" cols="50"></textarea>
    <br>

    <label>published_year</label>
    <input type="date" name="published_year" max="<?= date("Y") ?>" />
    <br>

    <label>author_id</label>
    <select name="author_id" required>
        <?php gen_option_ele('authors', 'id', 'name') ?>
    </select>
    <br>

    <label>category_id</label>
    <select name="category_id" required>
        <?php gen_option_ele('categories', 'id', 'name') ?>
    </select>
    <br>

    <button>ADD</button>
</form>

<?php include_once "../_footer.php"; ?>
