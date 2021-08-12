<?php

    include "topbit.php";
    $showall_sql="SELECT * FROM `food_reviews` ORDER BY `food_reviews`.`Food Name` ASC";
    $showall_query=mysqli_query($dbconnect, $showall_sql);
    $showall_rs=mysqli_fetch_assoc($showall_query);
    $count=mysqli_num_rows($showall_query);

?>

<div class="box main">

    <h2>All Items</h2>

    <?php

    // check if there are any results

    if ($count<1)

    {
        ?>
        <div class="error">
            Sorry! There are no results that match your search.
            Please use the search box in the side bar to try again.
        </div>

        <?php
    }  // end count 'if'


    // if there are not results, output error
    else {
        
        do{
        ?>
            <!-- Results go here -->
        <div class="results">
        
        <p>Food Name: <span class="sub_heading"><?php echo $showall_rs['Food Name']; ?></span>
        </p>

        <p>Time: <span class="sub_heading"><?php echo $showall_rs['Time']; ?></span>
        </p>

        <p>Place: <span class="sub_heading"><?php echo $showall_rs['Place']; ?></span>
        </p>

        <p>Vegetarian: <span class="sub_heading"><?php echo $showall_rs['Vegetarian']; ?></span>
        </p>

        <p><span class="sub_heading"><?php echo $showall_rs['Review']; ?></span>
        </p>

        <p>Rating: <span class="sub_heading">
            
            <?php 
            for ($x=0; $x < $showall_rs['Rating']; $x++)

            {
                echo "&#9733";
            }
            
            ?>
        
    
        </span></p>


        </div>  <!-- / single result -->
        <br />

    <?php

        } // end of 'do'

        while($showall_rs=mysqli_fetch_assoc($showall_query));

    } // end else

    // if there are results, display them

    ?>




</div>    <!-- / main -->

<?php
    include "bottombit.php";
?>

