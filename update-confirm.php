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
                <h1>Admin - Confirm Update </h1>
                <hr>
            </div>
            </header>


        <!--Section Blocks-->
            <section>
            
                <div class="section-content">
                <h2 style ="font-weight:400">Record Updated</h2>
                <?php
          


                   if(count($_POST)>0) {

                          // Get var from form
                     $ID_v = mysqli_real_escape_string($conn, $_POST['id']);
                     $Heading_v = mysqli_real_escape_string($conn, $_POST['heading']);
                     $TripDate_v = mysqli_real_escape_string($conn, $_POST['tripDate']);
                     $Duration_v = mysqli_real_escape_string($conn, $_POST['duration']);
                     $Summary_v = mysqli_real_escape_string($conn, $_POST['summary']);

                       $update=mysqli_query($conn,"UPDATE tripsdetails set 
                        id='" . $ID_v . "', heading='" . $Heading_v. "', tripDate='" . $TripDate_v . "', duration='" . $Duration_v . "' ,summary='" . $Summary_v . "' WHERE id='" . $ID_v. "'");
                        $message = "Record Modified Successfully";


                           if ($update===TRUE){
                             echo $message;

                           ?>
                           <br>

                           <?php
 
                             /**echo '<script>
                             window.location.replace("displaytr2.php");
                             </script>';
                             **/
                           }

                          else {
                            echo "error". $conn->error;   
                           }

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