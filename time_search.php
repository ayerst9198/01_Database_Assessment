<?php include "topbit.php";


    // if find button pushed...
    if(isset($_POST['time_search']))

    {

    $time=test_input(mysqli_real_escape_string($dbconnect,$_POST['time']));

    $findall_sql="SELECT * FROM `food_reviews` WHERE `Time` LIKE '%$time%' ORDER BY `Time` ASC";
    $findall_query=mysqli_query($dbconnect, $findall_sql);
    $findall_rs=mysqli_fetch_assoc($findall_query);
    $count=mysqli_num_rows($findall_query);
    echo "$time";

?>

<div class="box main">

    <h2>Time search</h2>

    <?php

    echo "$time";

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
        
        <p>Food Name: <span class="sub_heading"><?php echo $findall_rs['Food Name']; ?></span>
        </p>

        <p>Time: <span class="sub_heading"><?php echo $findall_rs['time']; ?></span>
        </p>

        <p>Place: <span class="sub_heading"><?php echo $findall_rs['Place']; ?></span>
        </p>

        <p>Vegetarian: <span class="sub_heading"><?php echo $findall_rs['Vegetarian']; ?></span>
        </p>

        <p><span class="sub_heading"><?php echo $findall_rs['Review']; ?></span>
        </p>

        <p>Rating: <span class="sub_heading">
            
            <?php 
            for ($x=0; $x < $findall_rs['Rating']; $x++)

            {
                echo "&#9733";
            }
            
            ?>
        
    
        </span></p>

        </div>  <!-- / single result -->
        <br />

    <?php

        } // end of 'do'

        while($findall_rs=mysqli_fetch_assoc($findall_query));

    } // end else

    // if there are results, display them

    } // wnd isset

    ?>




</div>    <!-- / main -->

<?php
    include "bottombit.php";
?>

