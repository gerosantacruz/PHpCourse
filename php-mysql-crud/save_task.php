<?php
include("db.php");

if (isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query =  "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query failed");
    }

    $_SESSION['message'] = 'Task Saved';
    $_SESSION['message-type'] = 'success';


} else {
    echo 'Task or DB not found';
}

header("Location: index.php");
?>