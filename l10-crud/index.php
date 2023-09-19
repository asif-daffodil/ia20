<?php  
    $conn = mysqli_connect("localhost","root","", "ia20");

    if(isset($_POST["addStu"])){
        $name = $_POST["name"];
        $city = $_POST["city"];
        $gender = $_POST["gender"];
        $insert = $conn->query("INSERT INTO `students`(`name`, `city`, `gender`) VALUES ('$name', '$city', '$gender')");
        if($insert){
            echo "<script>alert('Student Added Successfully')</script>";
        }else{
            echo "<script>alert('Failed to add student')</script>";
        }
    }

    $select = $conn->query("SELECT * FROM `students`");
?>

<h2>Add Student</h2>
<form action="" method="post">
    <input type="text" name="name" placeholder="Student Name" required>
    <br><br>
    <input type="text" name="city" placeholder="Student City" required>
    <br><br>
    <input type="radio" name="gender" value="Male" required>Male
    <input type="radio" name="gender" value="Female" required>Female
    <br><br>
    <input type="submit" value="Add Student" name="addStu">
</form>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>City</th>
        <th>Action</th>
    </tr>
    <?php while($row = $select->fetch_assoc()){ ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["name"] ?></td>
            <td><?= $row["gender"] ?></td>
            <td><?= $row["city"] ?></td>
            <td>
                <a href="edit.php?id=<?= $row["id"] ?>">Edit</a>
                <a href="delete.php?id=<?= $row["id"] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                <!-- confirm delete button -->
            </td>
        </tr>
    <?php } ?>
</table>


