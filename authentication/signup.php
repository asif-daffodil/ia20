<?php
include_once("./header.php");
$cities = [
    "Bagerhat", "Bandarban", "Barguna", "Barisal", "Bhola", "Bogra", "Brahmanbaria", "Chandpur", "Chapainawabganj", "Chhatak", "Chittagong", "Chuadanga", "Comilla", "Cox's Bazar", "Dhaka", "Dinajpur", "Faridpur", "Feni", "Gaibandha", "Gazipur", "Habiganj", "Jamalpur", "Jessore", "Jhalokati", "Jhenaidah", "Joypurhat", "Khagrachari", "Khulna", "Kishoreganj", "Kurigram", "Kushtia", "Lakshmipur", "Lalmonirhat", "Madaripur", "Magura", "Manikganj", "Meherpur", "Moulvibazar", "Munshiganj", "Mymensingh", "Narail", "Narayanganj", "Narsingdi", "Natore", "Nawabganj", "Netrakona", "Nilphamari", "Noakhali", "Pabna", "Panchagarh", "Patuakhali", "Pirojpur", "Rajbari", "Rajshahi", "Rangamati", "Rangpur", "Satkhira", "Shariatpur", "Sherpur", "Sirajganj", "Sunamganj", "Sylhet", "Tangail", "Thakurgaon"
];

$genders = ["Male", "Female"];
$allSkills = ["HTML" => null, "CSS" => null, "JS" => null, "PHP" => null, "MySQL" => null];
function safuda($data)
{
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

if (isset($_POST["sub123"])) {
    $name = safuda($_POST["name"]);
    $email = safuda($_POST["email"]);
    $gender = safuda($_POST["gender"] ?? null);
    $skills = $_POST["skills"] ?? null;
    $city = safuda($_POST["city"]) ?? null;
    $password = safuda($_POST["pass"]);
    $confirmPassword = safuda($_POST["cpass"]);

    if (empty($name)) {
        $errName = "Name is required";
    } elseif (!preg_match("/^[A-Za-z. ]*$/", $name)) {
        $errName = "Invalid name format";
    } else {
        $crrName = $conn->real_escape_string($name);
    }

    if (empty($email)) {
        $errEmail = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errEmail = "Invalid email format";
    } else {
        $checkEmail = "SELECT * FROM `users` WHERE `email` = '$email'";
        $check = $conn->query($checkEmail);
        if ($check->num_rows > 0) {
            $errEmail = "Email already exists";
        }else{
            $crrEmail = $conn->real_escape_string($email);
        }
    }

    if (empty($gender)) {
        $errGender = "Please select your gender";
    } elseif (!in_array($gender, $genders)) {
        $errGender = "Paknami bondho korun!";
    } else {
        $crrGender = $conn->real_escape_string($gender);
    }

    if (empty($skills)) {
        $errSkills = "Please select your skills";
    } else {
        $crrSkills = $skills;
        foreach ($skills as $skill) {
            $allSkills[$skill] = "checked";
        }
        $crrSkills = implode(", ", $crrSkills);
        $crrSkills = $conn->real_escape_string($crrSkills);
    }

    if (empty($city)) {
        $errCity = "Please select your city";
    } elseif (!in_array($city, $cities)) {
        $errCity = "Paknami bondho korun!";
    } else {
        $crrCity = $conn->real_escape_string($city);
    }

    if (empty($password)) {
        $errPassword = "Password is required";
    } elseif (strlen($password) < 8) {
        $errPassword = "Password must be at least 8 characters long";
    } elseif ($password !== $confirmPassword) {
        $errPassword = "Passwords do not match";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $crrPassword = $conn->real_escape_string($hashedPassword);
    }

    if (isset($crrName) && isset($crrEmail) && isset($crrGender) && isset($crrSkills) && isset($crrCity) && isset($crrPassword)) {
        $insert_query = "INSERT INTO `users`( `name`, `email`, `gender`, `skills`, `pass`) VALUES ('$crrName','$crrEmail','$crrGender','$crrSkills','$crrPassword')";
        $insert = $conn->query($insert_query);
        if ($insert) {
            // toastr succes alert
            echo "<script>toastr.success('Registration successful');setTimeout(()=>{location.href = './login.php'}, 2000)</script>";
        } else {
            echo "<script>toastr.error('Registration failed')</script>";
        }
    }

}
?>
<div class="container mt-5">
    <div class="row d-flex z-0 ">
        <div class="col-md-5 p-4 border rounded shadow m-auto ">
            <form action="" method="post">
                <h2 class="">Registration Form</h2>
                <div class="form-floating ">
                    <input type="text" class="form-control border-0 border-bottom rounded-0 shadow-none <?= isset($crrName) ? 'is-valid' : null ?> <?= isset($errName) ? 'is-invalid' : null ?> " placeholder="Your name" name="name" value="<?= $name ?? null ?>">
                    <label for="" class="form-label">Your name</label>
                    <div class="valid-feedback">
                        <?= isset($crrName) ? "Name is Okay" : null ?>
                    </div>
                    <div class="invalid-feedback">
                        <?= $errName ?>
                    </div>
                </div>
                <div class="mb-3 form-floating ">
                    <input type="text" class="form-control border-0 border-bottom rounded-0 shadow-none <?= isset($crrEmail) ? 'is-valid' : null ?> <?= isset($errEmail) ? 'is-invalid' : null ?>" placeholder="Your email" name="email" value="<?= $email ?? null ?>">
                    <label for="" class="form-label">Your email</label>
                    <div class="valid-feedback">
                        <?= isset($crrEmail) ? "Email is okay" : null ?>
                    </div>
                    <div class="invalid-feedback">
                        <?= $errEmail ?>
                    </div>
                </div>
                <div class="mb-3 border-bottom pb-2">
                    <div class="mb-2">
                        <label for="" class="form-check-label">
                            Gender :
                        </label>
                    </div>
                    <div class="<?= isset($errGender) ? 'is-invalid' : null ?>">
                        <div class="form-check-inline">
                            <label for="" class="form-check-label ">
                                <input type="radio" class="form-check-input" value="Male" name="gender" <?= isset($gender) && $gender === "Male" ? 'checked' : null  ?>> Male
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label ">
                                <input type="radio" class="form-check-input" value="Female" name="gender" <?= isset($gender) && $gender === "Female" ? 'checked' : null  ?>> Female
                            </label>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        <?= $errGender ?>
                    </div>
                </div>
                <div class="mb-3 border-bottom pb-2">
                    <div class="mb-2">
                        <label for="" class="form-check-label">
                            Skills :
                        </label>
                    </div>
                    <div class="<?= isset($errSkills) ? 'is-invalid' : null ?>">
                        <div class="form-check-inline">
                            <label for="" class="form-check-label ">
                                <input type="checkbox" class="form-check-input" value="HTML" name="skills[]" <?= $allSkills["HTML"] ?>> HTML
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label ">
                                <input type="checkbox" class="form-check-input" value="CSS" name="skills[]" <?= $allSkills["CSS"] ?>> CSS
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label ">
                                <input type="checkbox" class="form-check-input" value="JS" name="skills[]" <?= $allSkills["JS"] ?>> JS
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label ">
                                <input type="checkbox" class="form-check-input" value="PHP" name="skills[]" <?= $allSkills["PHP"] ?>> PHP
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label ">
                                <input type="checkbox" class="form-check-input" value="MySQL" name="skills[]"> MySQL
                            </label>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        <?= $errSkills ?>
                    </div>
                </div>
                <div class="border-bottom pb-3">
                    <select name="city" id="" class="form-select <?= isset($errCity) ? "is-invalid" : null ?>">
                        <option value="">--Select City--</option>
                        <?php foreach ($cities as $ct) {  ?>
                            <option value="<?= $ct ?>" <?= isset($city) && $city === $ct ? "selected" : null ?>><?= $ct ?></option>
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= $errCity ?>
                    </div>
                </div>
                <div class="form-floating ">
                    <input type="password" class="form-control border-0 border-bottom rounded-0 shadow-none <?= isset($errPassword) ? 'is-invalid' : null ?>" placeholder="Password" name="pass">
                    <label for="" class="form-label">Password</label>
                    <div class="invalid-feedback">
                        <?= $errPassword ?>
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control border-0 border-bottom rounded-0 shadow-none" placeholder="Confirm Password" name="cpass">
                    <label for="" class="form-label">Confirm Password</label>
                </div>
                <div>
                    <input type="submit" value="Sign up" class="btn btn-primary" name="sub123">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include_once("./footer.php");
?>