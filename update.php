<?php

    require_once("./connect.php");

    $sql = "UPDATE students SET
            first_name = :first_name,
            last_name = :last_name,
            course = :course,
            gender = :gender
            WHERE student_number = :student_number";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":student_number", $_POST["student_number"], PDO::PARAM_INT);
    $stmt->bindParam(":first_name", $_POST["first_name"], PDO::PARAM_STR);
    $stmt->bindParam(":last_name", $_POST["last_name"], PDO::PARAM_STR);
    $stmt->bindParam(":course", $_POST["course"], PDO::PARAM_STR);
    $stmt->bindParam(":gender", $_POST["gender"], PDO::PARAM_STR);
    $stmt->execute();

    header("Location: ./index.php");

?>