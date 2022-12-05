<?php 
session_start();
require "../classes/User.php";

$user_obj= new User;
$user = $user_obj->getUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
        crossorigin="anonymous"
    >
    <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" 
    />
    <title>Edit User</title>
    <!-- <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style> -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="bg-light">    

    <?php include "user-menu.php" ?>

    <main class="row justify-content-center gx-0">
        <div class="col-4">
            <h2 class="text-center text-uppercase">Edit user</h2>
            <form action="../actions/edit-user.php" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-center mb-3">
                    <div class="col-6 text-center">
                        <?php if($user['photo']): ?>
                            <img src="../assets/images/<?= $user['photo'] ?>" alt="<?= $user['photo'] ?>" class="d-block mx-auto edit-photo">
                        <?php else: ?>
                            <i class="fa-solid fa-user text-secondary text-center edit-icon"></i>
                        <?php endif ?>
                        <input type="file" class="form-control mt-2" accept="image/*" name="photo">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" required autofocus value="<?= $user['first_name'] ?>">
                </div>
                
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" required value="<?= $user['last_name'] ?>">
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required value="<?= $user['username'] ?>">
                </div>

                <div class="text-end mt-2">
                    <a href="dashboard.php" class="btn btn-secondary btn-sm px-5">Cancel</a>
                    <button class="btn btn-warning btn-sm px-5">Save</button>
                </div>

            </form>
        </div>
    </main>
    

    <!-- JavaScript Bundle with Popper -->
<script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
    crossorigin="anonymous"
></script>
</body>
</html>