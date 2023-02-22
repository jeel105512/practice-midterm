<?php

    require_once("./connect.php");

    $sql = "SELECT *
            FROM students
            WHERE student_number = :student_number";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":student_number", $_GET["student_number"], PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
    <title>Students</title>
</head>
<body class="container">
        <header class="my-5">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./index.php">Students</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="./" class="nav-link">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="./new.php" class="nav-link">New Student</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <h1 class="display-1 text-center">Edit Student</h1>
        </header>

        <form action="./update.php" method="post">
            <input type="hidden" name="student_number" value="<?= $row->student_number ?>"> 

            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" name="first_name" placeholder="Jeelkumar" value="<?= $row->first_name ?>">
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="last_name" placeholder="Patel" value="<?= $row->last_name ?>">
            </div>

            <div class="mb-3">
                <label for="course" class="form-label">Course</label>
                <input type="text" class="form-control" name="course" placeholder="CMPG or Computer Programming" value="<?= $row->course ?>">
            </div>
            
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control" name="gender" placeholder="M/F" value="<?= $row->gender ?>">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </body>
</html>