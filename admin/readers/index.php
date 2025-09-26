    <?php include_once "../_header.php";
    $sql = "SELECT id, name,email,phone,created_at,address FROM readers  ORDER BY id DESC";
    $data = db_select($sql);
    ?>
    <span>
    <a href="create.php">Insert readers</a>
    <a href="/library"  style="margin-left:20px">🔙HOME</a>
    </span>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>name readers</th>
                <th>email</th>
                <th>phone</th>
                <th>address</th>
                <th>create_at</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $d): ?>
                <tr>
                    <td><?= $d["id"] ?></td>
                    <td><?= $d["name"] ?></td>
                    <td><?= $d["email"] ?></td>
                    <td><?= $d["phone"] ?></td>
                    <td><?= $d["address"] ?></td>
                    <td><?= $d["created_at"] ?></td>
                    <td></td>
                    <td>
                        <a href="edit.php?id=<?= $d["id"] ?>">edit</a>
                        <a href="delete.php?id=<?= $d["id"] ?>">delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <?php include_once "../_footer.php" ?>