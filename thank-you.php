<?php
    include 'header.php';
    ?>

<?php
    include 'nav.php'; 
    ?>
<?php
    include 'link.php'; 
    ?>

<div class="wrapper">
    <main class="main">
        <article>
            <header>
               <div class= "content-header">
                  <h1>Thank you</h1>
                  <hr>
               </div>
            </header>


            <!--Section Blocks-->
            <section>
                <div class="section-content">
            
                <!--------------------------To retrieve data from form---------------------------->
                      <?php
 
                          $email=$_GET["email"];
                          $tripdate=$_GET["tripDate"];
                          $location=$_GET["locations"];
                          

                          echo "Thank you: " .$email ;
                          echo "<br>";
                          echo "<br> We will contact you about the: <br>" .$location." trip on the date ".$tripdate;
                       ?> 
                   
                </div>
            </section>
        </article>
    </main>
</div>

<?php
    include 'footer.php'; 
    ?>
