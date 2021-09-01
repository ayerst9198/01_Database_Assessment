<div class="box side">

        <h2>Search | <a class="side" href="showall.php">Show All</a></h2>

        <i>Type part of the food name if desired</i>

        <hr class="line"/>

        <!-- Start of Food Name Search -->

        <form method="post" action="food_search.php" enctype="multipart/form-data" >

        <input class="search" type="text" name="food_name" size="40" value="" required placeholder="Food Name..." />

        <input class="submit_wide" type ="submit" name="food_search" value="&#xf002;" />
        
        </form>

        <!-- end of Food Name search -->

        <hr class="line"/>

        <i>Please use the drop down box to select your search option</i>

        <hr class="line"/>

        <!-- start of time search !-->

        <form method="post" action="time_search.php" enctype="multipart/form-data" required placeholder="Time">
            <select class="half_width" name="yes/no">
             <option value="" disabled selected>Select a Time...</option>
                <option value="yes" >Breakfast...</option>
                <option value="no" >Lunch...</option>
                <option value="no" >Dinner...</option>
                <option value="no" >Dessert...</option>
                
            </select>

            <input type="submit" class="time_submit" name="findall_rating" value="&#xf002;" />
        
        </form>
        <!-- end of time search !-->

        <hr class="line"/>
        

        <!-- start of place search !-->

        
        <form method="post" action="place_search.php" enctype="multipart/form-data" required placeholder="Place">
            <select class="half_width" name="yes/no">
                <option value="" disabled selected>Place...</option>
                <option value="yes" >Home...</option>
                <option value="no" >Restaurant...</option>
            </select>

            <input type="submit" class="submit" name="findall_rating" value="&#xf002;" />
        
        </form>


        <!-- end of place search !-->

        <hr class="line"/>

        <!-- start of veg search !-->

        <form method="post" action="veg_search.php" enctype="multipart/form-data" required placeholder="Vegetarian">
            <select class="half_width" name="yes/no">
             <option value="" disabled selected>Vegetarian...</option>
                <option value="yes" >Yes...</option>
                <option value="no" >No...</option>
            </select>

            <input type="submit" class="submit" name="findall_rating" value="&#xf002;" />
        
        </form>

        <!-- end of veg search !-->

        <hr class="line"/>


        <!-- start of rating form !-->

        <form method="post" action="rating_search.php" enctype="multipart/form-data">
        
            <select class="half_width" name="amount">
                <option value="exactly" >Exactly...</option>
                <option value="more" selected>At least...</option>
                <option value="less">At most...</option>
            </select>

            <select class="half_width" name="stars">
                <option value=1>&#9733;</option>
                <option value=2>&#9733;&#9733;</option>
                <option value=3 selected>&#9733;&#9733;&#9733;</option>
                <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
                <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
            </select>

            <input type="submit" class="rating_submit" name="findall_rating" value="&#xf002;" />
            
            
            
        </form>

        <hr class="line"/>

        <!-- end of rating form !-->


        </div> <!-- / side bar -->


<div class="box footer">
            CC yourname 2021
        </div>    <!-- / footer -->
    
    </div>  <!-- / wrapper  -->
    
</body>        
