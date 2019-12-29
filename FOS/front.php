
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="front.css">
    <title>Document</title>
</head>
<body>

  <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search Food" aria-label="Search">
        <button type="button" class="btn btn-outline-primary">Search</button>
      </form>
 
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href=""><i  style="padding-left:10px;" class="fa fa-motorcycle fa-2x" aria-hidden="true"></i></a> 
          <a href=""><i  style="padding-left:10px;" class="fa fa-user fa-2x" aria-hidden="true"></i></a>
          <a href="viewcart.php"><i  style="padding-left:10px;" class="fa fa-shopping-bag fa-2x" aria-hidden="true"></i></a>
        </li>
      </ul>

  </nav>


    <header>
        <div class="mainline">
            <h1></h1>
        </div>
    </header>
<!-- 
    
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="10000">
                <img src="img/background.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="img/burger.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/frenchfries.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
    </div> -->
 

    
    <div class="category">
    <div class="container">
    <div class="row">
        <h3>Pizza</h3>
    </div>
    </div>    
    </div>  
    
    
    
    <?php 
      include_once('connection.php');
      $stmt = $conn->prepare("SELECT * FROM pizza");
      $stmt->execute();
      $users = $stmt->fetchAll();
      foreach($users as $user) 
      {
    ?>

      <div class="container">
        <div class="row">
       
        <div class="col md-4">
        <form action="insertcart.php?id=<?php echo $user['id']; ?>"  method="POST" >
               <div class="card" style="width: 18rem;">
                  <img src=<?php echo $user['image']; ?> class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $user['pizzaname']; ?></h5>
                    <h6 class="text-danger">Rs <?php echo $user['price']; ?></h6>
                    <input type="hidden" name="hidden_name" value="<?php echo $user['pizzaname']; ?>" />
                    <input type="hidden" name="hidden_price" value="<?php echo $user['price']; ?>" />
                    <input type="text" name="quantity" class="form-control col-lg-6" placeholder="quantity">
                    <p class="card-text"></p>
                    <input type="submit" name="submit" value="Add To Cart" class="btn btn-primary"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></input>
                  </div>
                </div>
        </form> 
        </div>
        
      </div>
    </div>
    <?php
       }
    ?>

<!-- 2nd -->
    <div class="category">
    <div class="container">
    <div class="row">
        <h3>South Indian</h3>
    </div>
    </div>    
    </div>


    <?php 
      include_once('connection.php');
      $stmt = $conn->prepare("SELECT * FROM southindian");
      $stmt->execute();
      $users = $stmt->fetchAll();
      foreach($users as $user) 
      {
    ?>

      <div class="container">
        <div class="row">
       
        <div class="col md-4">
        <form action="insertcart.php?id=<?php echo $user['id']; ?>"  method="POST" >
               <div class="card" style="width: 18rem;">
                  <img src=<?php echo $user['image']; ?> class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $user['foodname']; ?></h5>
                    <h6 class="text-danger">Rs <?php echo $user['price']; ?></h6>
                    <input type="hidden" name="hidden_name" value="<?php echo $user['foodname']; ?>" />
                    <input type="hidden" name="hidden_price" value="<?php echo $user['price']; ?>" />           
                    <input type="text" name="quantity" class="form-control col-lg-6" placeholder="quantity">
                    <p class="card-text"></p>
                    <input type="submit" name="submit" value="Add To Cart" class="btn btn-primary"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></input>
                  </div>
                </div>
        </form>
        </div>

        </div>
    </div>
   
    <?php
       }
    ?>
        
      
        
        




</body>  
</html>