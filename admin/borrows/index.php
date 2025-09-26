<?php
include_once "../_header.php";

$sql = "SELECT br.id, br.borrow_date, br.return_date, br.status,
               r.name AS reader_name,
               b.title AS book_title
        FROM borrows br
        LEFT JOIN readers r ON br.readers_id = r.id
        LEFT JOIN books b ON br.books_id = b.id
        ORDER BY br.id DESC";
//dd($data);
$data = db_select($sql);
?>
<h2>List book borrow</h2>
<a href="create.php">borrowed books</a>
<a href="/library"  style="margin-left:20px">🔙HOME</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>readers_id</th>
            <th>books_id</th>
            <th>borrow_date</th>
            <th>return_date</th>
            <th>status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $d): ?>
            <tr>
                <td><?= $d["id"] ?></td>
                <td><?= $d["readers_id"] ?></td>
                <td><?= $d["books_id"] ?></td>
                <td><?= $d["borrow_date"] ?></td>
                <td><?= $d["return_date"] ?></td>
                <td><?= $d["status"] ?></td>
                <td></td>
                <td>
                    <a href="edit.php?id=<?= $d["id"] ?>">Sửa</a>
                    <a href="delete.php?id=<?= $d["id"] ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php include_once "../_footer.php" ?>