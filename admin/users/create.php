<?php include_once "../_header.php"?>
<form action="insert.php" method="post">
    
    <label>Name account</label>
    <input type="text" name="username" placeholder="first name" rorequired />
    
    <br>
    <label>Password</label>
    <input type="password" name="password" placeholder="enter password" required />
    <br>
    <button>➕insert account</button>
    
</form>

<?php include_once "../_footer.php" ?>