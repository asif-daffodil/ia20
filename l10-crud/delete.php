<?php  
    $id = $_GET["id"] ?? header("location: ./");
    $conn = mysqli_connect("localhost","root","", "ia20");
    $check = $conn->query("SELECT * FROM `students` WHERE `id` = '$id'");
    $isOkay = $check->num_rows == 0 ? header("location: ./"):true;
    if($isOkay){
        $delete = $conn->query("DELETE FROM `students` WHERE `id` = '$id'");
        if($delete){
            echo "<script>
                alert('Student Deleted Successfully');
                window.location.href = './';
            </script>";
        }else{
            echo "<script>
            alert('Failed to delete student');
            window.location.href = './';
            </script>";
        }
    }
?>