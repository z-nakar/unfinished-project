
<?php
include("connect.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>HOME Page</title>
</head>
<body>
    
<?php include('header.php')?>
 

        <!--HOME-->
        <section id="home">
            <div class="container">
                <h1>Avocado Street Cafe</h1>
                <h5>Good Days Start with Great Coffee!</span></h5>
                <p>Where Every Sip Tells a Story.</p>
               <a href="shops.php"><button>Shop Now</button> </a>
            </div>
        </section>



        <!--Hot Products-->
        <section id="new" class="w-100">
            <div class="row p-0 m-0">
                <!--ONE-->
                <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                    <img class="img-fluid" src="assets/img/pastry3.jpg">
                    <div class="details">
                        <h2>Coffee</h2>
                        <button href="#featured"class="text-uppercase">Shop Now</button>
                    </div>
                </div>
                  <!--TWO-->
                  <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                    <img class="img-fluid" src="assets/img/pastry4.jpg">
                    <div class="details">
                        <h2>Iced Coffee</h2>
                        <button href="#featured"class="text-uppercase">Shop Now</button>
                    </div>
                </div>
                  <!--THREE-->
                  <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                    <img class="img-fluid" src="assets/img/pastry2.jpg">
                    <div class="details">
                        <h2>Frappes</h2>
                        <button href="#featured"class="text-uppercase">Shop Now</button>
                    </div>
                </div>
            </div>
        </section>

        <!--Featured-->
        <section id="featured" class="my-5 pb-5">
            <div class="container text-center mt-5 py-5">
                <h3>Our Famous Products</h3>
                <hr class=" mx-auto">
                <p>
                "Experience Excellence in Every Sip and Bite!"</p>
            </div>
            <div class="row mx-auto container-fluid">

            <?php include('get_products.php'); ?>



            <?php while($row = $_products->fetch_assoc()){
                ?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assets/img/<?php echo $row['product_image'];?>">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name'];?></h5>
                    <h4 class="p-price">₱ <?php echo $row['product_price'];?></h4>
                    <button class="buy-btn">Buy now</button>
                </div>
            <?php } ?>
            </div>
        </section>

        <!--Banner-->
        <section id="banner" class="my-5 py-5">
            <div class="container">
                <h4>Avocadoodles</h4>
                <h1>Your Daily Dose of Delights</h1>
                <button class="btn text-uppercase">Coffee Time!</button>
            </div>
        </section>

   

        <!--Coffees-->
        <section id="featured" class="my-5 pb-5">
            <div class="container text-center mt-5 py-5">
                <h3>Coffee</h3>
                <hr class=" mx-auto">
                <p>Here you can check our featured Coffee!</p>
            </div>
            <div class="row mx-auto container-fluid">
                <?php include('get_coffee.php');?>

                <?php while($row=$coffee_products->fetch_assoc()) { ?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assets/img/<?php echo $row['product_image'];?>">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name'];?></h5>
                    <h4 class="p-price">₱ <?php echo $row['product_price'];?></h4>
                    <a href="single_product.php?product_id=<?php echo $row['product_id'];?>"><button class="buy-btn">Buy now</button></a>
                </div>
                <?php } ?>
              
            </div>
        </section>




        <!--Iced Coffee-->
        <section id="featured" class="my-5 pb-5">
            <div class="container text-center mt-5 py-5">
                <h3>Iced Coffee</h3>
                <hr class=" mx-auto">
                <p>Here you can check our featured Iced Coffee!</p>
            </div>
            <div class="row mx-auto container-fluid">
                <?php include('get_icedcoffee.php'); ?>
                <?php while($row=$icedcoffee_products->fetch_assoc()) { ?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assets/img/<?php echo $row['product_image'];?>">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name'];?></h5>
                    <h4 class="p-price">₱ <?php echo $row['product_price'];?></h4>
                    <a href="single_product.php?product_id=<?php echo $row['product_id'];?>"><button class="buy-btn">Buy now</button></a>
                </div>

              <?php }?>
            </div>
        </section>






        <!--Non-Coffee Club-->
        <section id="featured" class="my-5 pb-5">
            <div class="container text-center mt-5 py-5">
                <h3>Non-Coffee Club</h3>
                <hr class=" mx-auto">
                <p>Here you can check our featured Non-Coffee Club!</p>
            </div>
            <div class="row mx-auto container-fluid">
                <?php include('get_noncoffeeclub.php'); ?>
                <?php while($row=$noncoffeeclub_products->fetch_assoc()) { ?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assets/img/<?php echo $row['product_image'];?>">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name'];?></h5>
                    <h4 class="p-price">₱ <?php echo $row['product_price'];?></h4>
                    <a href="single_product.php?product_id=<?php echo $row['product_id'];?>"><button class="buy-btn">Buy now</button></a>
                </div>

               <?php }?>
            </div>
        </section>


         <!--Pastries-->
         <section id="featured" class="my-5 pb-5">
            <div class="container text-center mt-5 py-5">
                <h3>Pastries</h3>
                <hr class=" mx-auto">
                <p>Here you can check our featured Pastries!</p>
            </div>
            <div class="row mx-auto container-fluid">
                <?php include('get_pastries.php'); ?>
                <?php while($row=$pastries_products->fetch_assoc()) {?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3" src="assets/img/<?php echo $row['product_image'];?>">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name'];?></h5>
                    <h4 class="p-price">₱ <?php echo $row['product_price'];?></h4>
                    <a href="single_product.php?product_id=<?php echo $row['product_id'];?>"><button class="buy-btn">Buy now</button></a>
                </div>

               <?php }?>
            </div>
        </section>
                    

    <div class="banner2">
        <img src="assets/img/yellow2.jpg" alt="Banner Image" class="banner-image">
        <div class="overlay3">

            
            <h1><b>Up to <span><b>70%</b></span> Off on selected products with freebies and coupons</b></h1>
            <p>Tune in this July 22 for the Avocado Street Cafe 8.8 Sale!</p>
        
           
        </div>
    </div>


                        <!--FEEDBACK FORM-->
            <div class="container1">
                <div class="feedback-form">
                    <h2>Customer's Review</h2>
                    <form action="#" method="post">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
        
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" required>
        
                        <label for="feedback">Feedback:</label>
                        <textarea id="feedback" name="feedback" rows="6" required></textarea>
        
                        <button type="submit">Submit</button>
                    </form>
                </div>
                <div class="picture">
                    <img src="assets/img/Logo1.png" alt="Placeholder Image">
                </div>
            </div>


        <?php include('footer.php')?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>