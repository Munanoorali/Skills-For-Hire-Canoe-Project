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

<div class="wrapper">
    <main class="main">
        <article>
            <header>
               <div class= "content-header">
                  <h1>Admin - Confirm</h1>
                  <hr>
               </div>
            </header>


            <!--Section Blocks-->
            <section>
                <div class="section-content">
            
                <!--------------------------To retrieve data from form---------------------------->
                <?php

                
                 $heading=$_POST["heading"];
                 $tripDate=$_POST["tripDate"];
                 $duration=$_POST["duration"];
                 $summary=$_POST["summary"];

                    $sql = "INSERT INTO tripsdetails (heading, tripDate, duration,summary)
                    VALUES ('$heading', '$tripDate', '$duration', '$summary')";

                      if (mysqli_query($conn, $sql)) {
                           echo "Data has been successfully added to DB";


                       } else {
                           echo "Error: " . $sql . "
                       " . mysqli_error($conn);
                       }


                ?>

     
                
                   
                </div>
            </section>
                <br>
                <br>
                <br>
                <p style="text-align:center; font-size:2.5rem; color:black;"><a href ="index.php">View All Adventures</a></p>
            
        </article>
    </main>
</div>

<?php
    include 'footer.php'; 
    ?>
