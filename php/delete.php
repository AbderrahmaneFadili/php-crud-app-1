<?php



function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_GET['id'])) {

    include '../dbConnection.php';

    $id = validate($_GET['id']);

    $sql = "DELETE FROM users WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../read.php?success=successfully deleted");
    } else {
        header("Location:../read.php?error=unknown error occurred");
    }
} else {
    header('Location: ../read.php');
}
