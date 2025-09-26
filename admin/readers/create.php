<?php include_once "../_header.php"?>
<form action="insert.php" method="post">
    
    <label>Name readers</label>
    <input type="text" name="name" placeholder="first name" rorequired />
    <br>
    <label>email</label>
    <input type="email" name="email" placeholder="enter password" required />
    <br>
    <label>number-phone</label>
    <input type="phone" name="phone" placeholder="enter phone" required />
    <br>
    <label>number-address</label>
    <input type="address" name="address" placeholder="enter address" required />
    <br>
    <button>➕insert readers</button>
    
</form>

<?php include_once "../_footer.php" ?>