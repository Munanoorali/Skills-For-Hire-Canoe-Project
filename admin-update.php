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
                <h1>Admin - Update Adventure Trip Data</h1>
                <hr>
            </div>
            </header>


        <!--Section Blocks-->
            <section>
            
                <div class="section-content">
                <h2 style ="font-weight:400">Update details about the trip</h2>

    

<form name="frmUser" method="post" action="update-confirm.php">

<div><?php
$result = mysqli_query($conn,"SELECT * FROM tripsdetails WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
// if(isset($message)) { echo $message; } ?>
</div>

<!--Username: <br>-->
<?php 
/**$ID_v=$row["id"];
$Heading_v=$row["heading"];
**/
?>
<input type="hidden" name="id" value="<?php echo $row['id'];?>">
<!-- 
<input type="text" name="id"  
value="--><?php 
/*echo $row['id'];*/ ?><!--">-->


<br>
<label for="heading">Heading</label>
<input type="text" name="heading"  value="<?php echo $row['heading']; ?>">

<br>
<label for="tripDate">Trip Date</label>
<input type="date" name="tripDate"  value="<?php echo $row['tripDate']; ?>">
<br>
<label for="duration">Duration</label>
<input type="number" id ="duration" name="duration" min="1" max="999" required value="<?php echo $row['duration']; ?>" >
<br>
<label for="summary">Summary</label>
<input type="text" id ="summary" name="summary" required value="<?php echo $row['summary']; ?>">
<br>

<input type="submit" name="submit" value="Update Record">

</form>



               <!---------------------Form----------------------
                    <form action="admin-confirm.php" method="POST">
                        <label for="heading">Heading</label>
                        <input type="text" id ="heading" name="heading" autofocus required>
                        <br>
    
                        <label for="tripDate">Trip Date</label>
                        <input type="date" id="tripDate" name="tripDate" required >
                        <br>

                        <label for="duration">Duration</label>
                        <input type="number" id ="duration" name="duration" min="1" max="999" required>
                        <br>
                        <label for="summary">Summary</label>
                        <input type="text" id ="summary" name="summary" required>
                        <br>

                        <input type="submit" name="Submit">


                    </form> --> 
                </div>

            </section>
            </article>
</main>            
</div>

<?php
    include 'footer.php'; 
    ?>