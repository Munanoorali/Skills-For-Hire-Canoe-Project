<?php
    include 'header.php';
    ?>

<?php
    include 'nav.php'; 
    ?>

<?php
    include 'link.php'; 
    ?>

<?php
    include 'connection.php'; 
    ?>
<!--

-->



<div class="wrapper">
    <main class="main">
        <aside></aside>
        <article>
            <div class="box">
                <img class="banner1" src="images/canoe.jpg" alt="Canoe Image " width="800px">
                <div class="text">
                    <h1>Come Experience</h1>
                    <h1>Canada</h1>
                </div>
            </div>
            <header>
            <div class= "content-header">
                <h1>Upcoming Adventures</h1>
                <hr>
            <div>

            </header>




            <!--Section Blocks-->
            <section>

                <div class="section-content">
                    <!-- To add new trips-->
                   <div class= "align-link">
                      <div>
                         <?php
                            echo "<a href=admin-add.php".">Add New Trip</a>";
                         ?>
                      </div>
                   </div>               
                  <?php
	                $sql = "SELECT * FROM tripsdetails";
	                $result = mysqli_query($conn, $sql);

	                 if (mysqli_num_rows($result) > 0) {
	                 // output data of each row
	                 while($row = mysqli_fetch_assoc($result)) {
                      $heading=$row["heading"];
                      $tripDate=$row["tripDate"];
                      $duration=$row["duration"];
                      $summary=$row["summary"];

             echo "<h1> $heading </h1>";
             echo "<p>" . "Date: $tripDate <br>";
             echo "Duration: $duration days <br> </p>";
             echo "<h2>Summary</h2>";
             echo "<p>$summary</p> <br>";
//echo "<a href=".$row['text'].">some text</a>";
?>

<div class= "align-link">
        <!--<div>
             <?php
             //echo "<a href=admin-add.php".">Add Trip</a>";
             ?>
        </div>-->

        <div>
            <?php
             echo "<a href=admin-update.php?id=".$row["id"].">Update Trip</a>";
            ?>
        </div>
            
        <div>
            <?php
             echo "<a href=delete-trip.php?id=".$row["id"].">Delete Trip</a>";
             ?>
        </div>
</div>

             <?php
             echo"<br>";

	    }
	} else {
	    echo "0 results";
	}
?>

            </section>

        </article>         
    </main>
</div>

<?php
    include 'footer.php'; 
    ?>