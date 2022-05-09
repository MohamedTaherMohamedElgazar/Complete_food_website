<!--menu section starts here-->
<?php include('./partials/menu.php')?>
<!--menu section ends here-->


        <!--main_content section starts here-->
        <div class="main_content">
            <div class="wrapper">
                <h1>DASHBOARD</h1>
                <br/>

            <?php
            
            if(isset($_SESSION['logZAIn'])){
                echo $_SESSION['logZAIn'];
                unset($_SESSION['logZAIn']); // dispaly msg only one time
            };
            
            
            ?>
            <br/>
                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br/>
                    Categories
                </div>

                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br/>
                    Categories
                </div>

                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br/>
                    Categories
                </div>

                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br/>
                    Categories
                </div>

                

                <div class="clearfix">

                </div>
            </div>
        </div>
        <!--main_content ends here-->



<!--footer section starts here-->
<?php include('./partials/footer.php')?>
<!--footer section ends here-->
    </body>
</html>