<?php include_once "../_header.php"?>
<form action="insert.php" method="post">
    
    <label>Name authors</label>
    <input type="text" name="name" placeholder="first name" rorequired />
    <br>
    <label>biography</label>
    <textarea name="biography" id="" maxlength="99999" rows="10"></textarea>    
    <br>
    <button>➕insert authors</button>
    
</form>

<?php include_once "../_footer.php" ?>