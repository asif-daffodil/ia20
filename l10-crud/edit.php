<?php  
    $id = $_GET["id"] ?? header("location: ./");
    $conn = mysqli_connect("localhost","root","", "ia20");
    $check = $conn->query("SELECT * FROM `students` WHERE `id` = '$id'");
    $check->num_rows == 0 ? header("location: ./"):true;
    $row = $check->fetch_assoc();
    if (isset($_POST["upStu"])) {
        $name = $_POST["name"];
        $city = $_POST["city"];
        $gender = $_POST["gender"];
        $update = $conn->query("UPDATE `students` SET `name`='$name',`city`='$city',`gender`='$gender' WHERE `id` = '$id'");
        if($update){
            echo "<script>alert('Student Updated Successfully')</script>";
        }else{
            echo "<script>alert('Failed to update student')</script>";
        }
    }
?>

<h2>Update Student</h2>
<form action="" method="post">
    <input type="text" name="name" placeholder="Student Name" required value="<?= $row['name'] ?>">
    <br><br>
    <input type="text" name="city" placeholder="Student City" required value="<?= $row['city'] ?>">
    <br><br>
    <input type="radio" name="gender" value="Male" required <?= $row['gender'] == "Male" ? 'checked':null ?>>Male
    <input type="radio" name="gender" value="Female" required <?= $row['gender'] == "Female" ? 'checked':null ?>>Female
    <br><br>
    <input type="submit" value="Edit Student" name="upStu">
</form>
<a href="./">Back</a>