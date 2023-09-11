<?php 
include "header.php"; 
include "data.php";

 ?>

<div class="container">
    <div class="col-6 mx-auto">
        <h2 class="text-center text-success py-2 ">Enter a year for leap year checking...</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="mb-3">
                <input type="number" class="form-control" name="year" placeholder="Enter a year..." autofocus>
            </div>
            <button type="submit" class="btn btn-warning bold col-12">Check</button>
        </form>

        <?php

        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $year = (int)$_POST['year'];
            // Function for all type of alert....
            function showAlert($type,$title,$text) {
                echo '<script>
                Swal.fire({
                    icon: "'.$type.'",
                    title: "'.$title.'",
                    text: "'.$text.'",
                    position: "center",
                    showConfirmButton: false,
                    timer: 3000 
                });
              </script>';
            }
            if(!empty($year)) {
                if(($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                    showAlert("success","Yesssss!","This is a leap year.");
                }else {
                    showAlert("info","Opppsss!","This is not a leap year.");
                }
            }else {
                showAlert("error","Error!","You must enter a valid year.");
            }
        }

        ?>
        
    </div>
</div>

<?php include "footer.php" ?>