<?php include('partial-front/menu.php'); ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    



    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>


            <?php 

            $sql="SELECT * FROM tbl_food WHERE active='Yes'";

            $res=mysqli_query($conn, $sql);
            $count=mysqli_num_rows($res);
            if($count>0)
            {
                while($row=mysqli_fetch_assoc($res))
                {
                    $id=$row['id'];
                    $title=$row['title'];
                    $price=$row['price'];
                    $image_name=$row['image_name'];
                    ?>

<div class="food-menu-box">
                <div class="food-menu-img">

                <?php
                 
                 if($image_name=="")
                 {
                     echo "<div class='error'>Image not found </div>";
                 }
                 else{
                     ?>
                    <img src="images/food/<?php echo $image_name; ?>" alt="" height="150" width="100" class="img-responsive img-curve">
                    <?php
                 }
                ?>

                    
                </div>

                <div class="food-menu-desc" >
                    <h4><?php echo $title; ?></h4>
                    <p class="food-price"><?php echo $price; ?> 
                    BDT</p>
                                      <p class="food-detail">
                   
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>


                    <?php
                }
            }
            else{
                echo "<div class='error'>Not found </div>";
            }

              ?>


            <!-- <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/vani1.jpg" alt="" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Vanila Cake</h4>
                    <p class="food-price">500 BDT</p>
                                      <p class="food-detail">
                    Basic vanilla cake topped with fondant
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/vani2.jpg" alt="" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Vanilla Sponge</h4>
                    <p class="food-price">500 BDT</p>
                    <p class="food-detail">
                        Basic vanilla sponge cake with vanilla frosting
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/choc1.jpg" alt="" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Basic Chocolate Cake</h4>
                    <p class="food-price">500 BDT</p>
                    <p class="food-detail">
                        Topped with chocolate ganache
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/brownie.jpg" alt="" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Fudgy Brownie</h4>
                    <p class="food-price">80 BDT</p>
                    <p class="food-detail">
                    Fudgy brownies whith chocolate chips
                    </p>
                    <br>  

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/red.jpg" alt="" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Red velvet Cake</h4>
                    <p class="food-price">600 BDT</p>
                    <p class="food-detail">
                    Delicious red velvet with vanilla frosting
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/cust1.jpg" alt="" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Customised Cake</h4>
                    <p class="food-price">900 BDT</p>
                    <p class="food-detail">
                        Customised cake according to your choice!
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/cupcake.jpg" alt="" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Cupcake</h4>
                    <p class="food-price">100 BDT</p>
                    <p class="food-detail">
                        Customised cupcake according to your choice!
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/cheese.jpg" alt="" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Mango cheese cake</h4>
                    <p class="food-price">900 BDT</p>
                    <p class="food-detail">
                        Customised cheesecake according to your choice!
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div> -->

            


            <div class="clearfix"></div>

            

        </div>

    </section>
  

    <?php include('partial-front/footer.php'); ?>