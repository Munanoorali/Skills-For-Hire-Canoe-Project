<?php
    include 'header.php';
    ?>

<?php
    include 'nav.php'; 
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
                <h1>Book A Trip</h1>
                <hr>
            </div>
            </header>


        <!--Section Blocks-->
            <section>
            
                <div class="section-content">
                <h2 style ="font-weight:400">Just some Quick Details</h2>

               <!---------------------Form------------------------>
                    <form action="thank-you.php" method="get">
                        <label for="email">Email</label>
                        <input type="text" id ="email" name="email" autofocus placeholder="Type email here" required>
                        <br>
                        
                        <label for="locations">Location</label>
                        <select id="locations" name="locations" required>
                               <option value="" >Select</option>
                               <option value="Clarenville NL">Clarenville NL</option>
                               <option value="Valley NS">Valley NS</option>
                        </select> 
                        <br>
    
                        <label for="tripDate">Trip Date</label>
                        <input type="date" id="tripDate" name="tripDate" required >
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