<?php 
include "header.php"; 
include "data.php";

 ?>

<div class="container">
    <div class="col-6 mx-auto">

        <h2 class="text-center text-success py-2 ">Pick your favourite country from down below...</h2>
        <form action="index.php" method="GET">
            <select class="form-select" onchange="changeValue(this.value)">
            <option selected value=""  class="text-center">-----Selet your favourite country for this Word cup-----
            </option>
            <?php 
                if(!$countries == null) {
                    foreach($countries as $key=>$country) {
                        if($country === "Bangladesh") {
                            $entity = "&hearts;";
                            $love = html_entity_decode($entity);

                            echo "<option value='{$country}' class='text-success'>".$love, $love, $love, $love, $country, $love, $love, $love, $love. "</option>";
                        }else {
                            echo "<option value='{$country}'>{$country}</option>";
                        }
                    }
                }
                else {
                    echo "<option>No Data here...</option>";
                }
            ?>
            </select>
        </form>

        <h2 class="text-center mt-5 text-info" id="show"></h2>
        
        
    </div>
</div>

<script>

                function changeValue(e) {
                    document.getElementById('show').innerHTML = "<-  " +e+ "  ->";
                    // alert(e);
                 }
    
</script>



<?php include "footer.php" ?>