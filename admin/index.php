        <?php include_once __DIR__. "/../include/common.php"; 
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>wed read book</title>
            <link rel="stylesheet" href="<?= asset('css/admin.css') ?>" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        </head>
        <body>
            
            <div class="btn-home"><a href="/library"><i class="fa-solid fa-house" style="font-size:20px;">Home</i></a></div>
            <nav class="nav">
                <ul>
                    <li><a href="/library/admin/users">👤user account</a></li>
                    <li><a href="/library/admin/readers">➕ADD readers</a></li>
                    <li><a href="/library/admin/authors"><i class="fa-solid fa-plus"></i>Insert authors</a></li>
                    <li><a href="/library/admin/categories"><i class="fa-solid fa-plus"></i>Insert categories</a></li>
                    <li><a href="/library/admin/books"><i class="fa-solid fa-plus"></i>ADD BOOKS</a></li>
                    <li><a href="/library/admin/borrows"><i class="fa-solid fa-plus"></i>borrowed books</a></li>
                </ul>
            </nav>