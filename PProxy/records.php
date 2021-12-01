<?php 
    require_once('SelectRecords.php');
?>
    <h4>Total record: <?= $stmt->rowCount() ?></h4>
    <small><?= "Updated: " . date('d M Y H:i:s') ?></small>
    <table>
        <thead>
            <tr>
                <th>Users</th>
                <th>Passwords</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($stmt as $row) : ?>
            <tr>
                <td><?= $row[1] ?></td>
                <td><?= $row[2] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
