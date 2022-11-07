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
                <h1>Admin - Add Adventure</h1>
                <hr>
            </div>
            </header>


        <!--Section Blocks-->
            <section>
            
                <div class="section-content">
                <h2 style ="font-weight:400">Input details about the trip</h2>

               <!---------------------Form------------------------>
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


                    </form>  
                </div>

            </section>
            </article>
</main>            
</div>

<?php
    include 'footer.php'; 
    ?>