<?php

    require_once("./connect.php");

    $sql = "INSERT INTO students (
        first_name,
        last_name,
        course,
        gender
    ) VALUES (
        :first_name,
        :last_name,
        :course,
        :gender
    )";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":first_name", $_POST["first_name"], PDO::PARAM_STR);
    $stmt->bindParam(":last_name", $_POST["last_name"], PDO::PARAM_STR);
    $stmt->bindParam(":course", $_POST["course"], PDO::PARAM_STR);
    $stmt->bindParam(":gender", $_POST["gender"], PDO::PARAM_STR);
    $stmt->execute();

    header("Location: ./index.php");
?>