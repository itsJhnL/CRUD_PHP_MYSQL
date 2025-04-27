<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>

<body>
    <?php include "connection.php" ?>
    <div class="container pt-5">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
            Add New
        </button>
        <table class="table">
            <thead>
                <tr>
                    <!-- <th scope="col">#</th> -->
                    <!-- <th scope="row">' . ($row['id']) . '</th> -->
                    <th class="col-3">Username</th>
                    <th class="col-3">Email</th>
                    <th class="col-3">Password</th>
                    <th class="col-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $query = mysqli_query($conn, "SELECT * FROM information");

                while ($row = mysqli_fetch_array($query)) {
                    echo '
                    <tr>
                    
                    <td>' . ($row['username']) . '</td>
                    <td>' . ($row['email']) . '</td>
                    <td>' . ($row['password']) . '</td>
                    ';
                ?>
                    <td>
                        <form action="function.php" method="post">
                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#Edit<?php echo $row['id']; ?>">
                                Edit
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Delete<?php echo $row['id']; ?>">
                                Delete
                            </button>
                        </form>
                    </td>
                    </tr>
                    <?php include "update.php" ?>
                    <?php include "delete.php" ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php include "create.php" ?>
</body>

</html>