<?php

    require_once("./connect.php");

    $sql = "DELETE FROM students WHERE student_number = :student_number";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":student_number", $_GET["student_number"], PDO::PARAM_INT);
    $stmt->execute();

    header("Location: ./index.php");

?>