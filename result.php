<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Результаты</title>
    <?php
      $servername = "127.0.0.1";
      $username = "murotbek";
      $password = "7820";
      $db = "bd_auth";
      // Create connection
      $mysql = mysqli_connect($servername, $username, $password,$db);
      if (!$mysql) {
        die("Connection failed: " . mysqli_connect_error());
      }
    $custumers = $mysql->query("SELECT * FROM `users`");

    while ($result = mysqli_fetch_array($custumers, MYSQLI_ASSOC)) {
        $users[] = $result;
    }

    ?>
</head>
<body>

    <div class="container">
        <a href="index.php" class="badge badge-success">Регистрация</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">id</th>
                <th scope="col">Email</th>
                <th scope="col">First Name</th>
                <th scope="col">Password</th>
                <th scope="col">Position</th>
                <th scope="col">Level</th>
                <th scope="col">Language</th>
                <th scope="col">Comments</th>
                <th scope="col">File</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($users)):  foreach($users as $user): ?>
                    <tr>
                    <th scope="row"><?php echo $user['id'] ?></th>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['firstname'] ?></td>
                    <td><?php echo $user['pass'] ?></td>
                    <td><?php echo $user['positionjob'] ?></td>
                    <td><?php echo $user['level'] ?></td>
                    <td><?php echo $user['language'] ?></td>
                    <td><?php echo $user['comments'] ?></td>
                    <td><?php echo $user['file'] ?></td>
                    </tr>
                <?php endforeach; endif;?>
            </tbody>
        </table>

    </div>
</body>
</html>