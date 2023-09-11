<?php
$cities = [
    "Bagerhat", "Bandarban", "Barguna", "Barisal", "Bhola", "Bogra", "Brahmanbaria", "Chandpur", "Chapainawabganj", "Chhatak", "Chittagong", "Chuadanga", "Comilla", "Cox's Bazar", "Dhaka", "Dinajpur", "Faridpur", "Feni", "Gaibandha", "Gazipur", "Habiganj", "Jamalpur", "Jessore", "Jhalokati", "Jhenaidah", "Joypurhat", "Khagrachari", "Khulna", "Kishoreganj", "Kurigram", "Kushtia", "Lakshmipur", "Lalmonirhat", "Madaripur", "Magura", "Manikganj", "Meherpur", "Moulvibazar", "Munshiganj", "Mymensingh", "Narail", "Narayanganj", "Narsingdi", "Natore", "Nawabganj", "Netrakona", "Nilphamari", "Noakhali", "Pabna", "Panchagarh", "Patuakhali", "Pirojpur", "Rajbari", "Rajshahi", "Rangamati", "Rangpur", "Satkhira", "Shariatpur", "Sherpur", "Sirajganj", "Sunamganj", "Sylhet", "Tangail", "Thakurgaon"
];

if (isset($_POST["sub123"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];

    if (empty($name)) {
        $errName = "Name is required";
    } elseif (!preg_match("/^[A-Za-z. ]*$/", $name)) {
        $errName = "Invalid name format";
    } else {
        $crrName = $name;
    }

    if (empty($email)) {
        $errEmail = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errEmail = "Invalid email format";
    } else {
        $crrEmail = $email;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap 5.3 css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row min-vh-100 d-flex ">
            <div class="col-md-5 p-4 border rounded shadow m-auto">
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
                        <!-- bootstrap 5 radio button -->
                        <div class="mb-2">
                            <label for="" class="form-check-label">
                                Gender :
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label ">
                                <input type="radio" class="form-check-input" value="Male" name="gender"> Male
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label ">
                                <input type="radio" class="form-check-input" value="Female" name="gender"> Female
                            </label>
                        </div>
                    </div>
                    <div class="mb-3 border-bottom pb-2">
                        <div class="mb-2">
                            <label for="" class="form-check-label">
                                Skills :
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label ">
                                <input type="checkbox" class="form-check-input" value="Male" name="gender"> Male
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label ">
                                <input type="checkbox" class="form-check-input" value="Female" name="gender"> Female
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label ">
                                <input type="checkbox" class="form-check-input" value="Female" name="gender"> Female
                            </label>
                        </div>
                    </div>
                    <div class="border-bottom pb-3">
                        <select name="" id="" class="form-select ">
                            <option value="">--Select City--</option>
                            <?php foreach ($cities as $city) {  ?>
                                <option value="<?= $city ?>"><?= $city ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-floating ">
                        <input type="password" class="form-control border-0 border-bottom rounded-0 shadow-none" placeholder="Password" name="pass">
                        <label for="" class="form-label">Password</label>
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

    <!-- bootstrap 5 bundle js link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>