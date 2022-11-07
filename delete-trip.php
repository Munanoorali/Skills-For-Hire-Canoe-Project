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
    <aside></aside>
        <article>
            <header>
            <div class= "content-header">
                <h1>Admin - Delete Adventure Trip</h1>
                <hr>
            </div>
            </header>


        <!--Section Blocks-->
            <section>
            
                <div class="section-content">
                <h2 style ="font-weight:400">Delete the trip</h2>
                
  

<?php

		// Get Var from URL
       
       $ID_v = mysqli_real_escape_string($conn, $_GET['id']);
      $sqlTripDelete= "DELETE FROM tripsdetails WHERE id='$ID_v' ";
      if ($conn->query($sqlTripDelete) === TRUE) {
           echo "Record deleted successfully";

  } else {
      echo "Error deleting record: " . $conn->error;
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