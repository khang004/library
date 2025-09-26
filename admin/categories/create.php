<?php include_once "../_header.php"?>
<form action="insert.php" method="post">
    
    <label>Name</label>
    <input type="text" name="name" placeholder="first name" rorequired />
    <br>
    <label>description</label>
    <textarea name="description" id="" maxlength="99999" rows="10"></textarea>    
    <br>
    <button>➕insert</button>
    
</form>

<?php include_once "../_footer.php" ?>