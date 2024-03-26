<?php
    $handle = fopen("users.csv", "r");
    $users = [];
    $index = 1;
    while (($line = fgetcsv($handle)) !== false) {

        # 1人の情報
        $user = [];

        $user['no'] = $line[0];
        $user['name'] = $line[1];
        $user['age'] = $line[2];

        # ユーザーのリストに追加
        $users[$index] = $user;
        $index++;

    }
    fclose($handle);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_http_users</title>
</head>
<body>
    <h3>Users</h3>
    <hr>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NAMES</th>
            <th>AGE</th>
        </tr>
        <?php
            foreach ($users as $user) {
        ?>
        <tr>
            <td><?php echo $user["no"]; ?></td>
            <td><?php echo $user["name"]; ?></td>
            <td><?php echo $user["age"]; ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>