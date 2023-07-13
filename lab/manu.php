<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="homeStyle.css">
    <title>Bootstrap</title>
    
    <style>
      .carousel-item {
        height: 40rem;
      }
      .carousel-inner{
        height: 450px;
      }
    </style>
</head>
<body>

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
   
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/cal-1.jpg" class=" d-block w-100" style="height: 70%" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/cal-2.jpg" class=" d-block w-100" id="img" style="height: 70%"  alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/cal-3.jpg" class=" d-block w-100" id="img" style="height: 70%"  alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container-fluid bg-secondary">
        <div class=" col-12  text-center text-white ">
            <h3 class="text-info">Buy Your Favourite Games And Enjoy</h3>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-6 p-4">
                <img class="img-fluid img-thumbnail" src="img/img-1.webp" style="height:76%" alt="">
                <h4 class="text-center text-warning">Pubg-mobile</h4>
                <h5 class="text-center">Price : 7$</h5>
                <button class="btn btn-outline-warning d-block m-auto">Add to Cart</button>
            </div>

              <div class="col-lg-2 col-md-6 ml-1 p-4">
                  <img class="img-fluid img-thumbnail" src="img/img-2.jpg" style="height:76%"  alt="">
                  <h4 class="text-center text-warning">Gears Of War4</h4>
                  <h5 class="text-center">Price : 3$ tk</h5>
                  <button class="btn btn-outline-warning d-block m-auto">Add to Cart</button>
              </div>
              

              <div class="col-lg-2 col-md-6 ml-1 p-4">
                <img class="img-fluid img-thumbnail" src="img/img-3.jpg" style="height:75%"  alt="">
                <h4 class="text-center text-warning">Tomb Rider</h4>
                <h5 class="text-center">Price : 2$</h5>
                <button class="btn btn-outline-warning d-block m-auto">Add to Cart</button>
            </div>
            

              <div class="col-lg-2 col-md-6 ml-1 p-4">
                  <img class="img-fluid img-thumbnail" src="img/img-4.webp" style="height:75%" alt="">
                  <h4 class="text-center text-warning">Free Fire</h4>
                  <h5 class="text-center">Price : 4$</h5>
                  <button class="btn btn-outline-warning d-block m-auto">Add to Cart</button>
              </div>
              

              <div class="col-lg-2 col-md-6 ml-1 p-4">
                <img class="img-fluid img-thumbnail" src="img/img-5.webp" style="height:75%"  alt="">
                <h4 class="text-center text-warning">AssassinsCreed</h4>
                <h5 class="text-center">Price : 6$</h5>
                <button class="btn btn-outline-warning d-block m-auto">Add to Cart</button>
            </div>
            

              <div class="col-lg-2 col-md-6 ml-1 p-4">
                  <img class="img-fluid img-thumbnail" src="img/img-6.jpg" style="height:74%" alt="">
                  <h4 class="text-center text-warning">God Of War</h4>
                  <h5 class="text-center">Price : 8$</h5>
                  <button class="btn btn-outline-warning d-block m-auto">Add to Cart</button>
              </div>
              

              <div class="col-lg-2 col-md-6 ml-1 p-4">
                <img class="img-fluid img-thumbnail" src="img/img-7.jpg" style="height:77%" alt="">
                <h4 class="text-center text-warning">Valorant</h4>
                <h5 class="text-center">Price : 10$</h5>
                <button class="btn btn-outline-warning d-block m-auto">Add to Cart</button>
            </div>
            
            
              <div class="col-lg-2 col-md-6 ml-1 p-4">
                  <img class="img-fluid img-thumbnail" src="img/img-8.webp" style="height:77%" alt="">
                  <h4 class="text-center text-warning">Gow Ragnarok</h4>
                  <h5 class="text-center">Price : 6$</h5>
                  <button class="btn btn-outline-warning d-block m-auto">Add to Cart</button>
              </div>

              
              <div class="col-lg-2 col-md-6 ml-1 p-4">
                <img class="img-fluid img-thumbnail" src="img/img-9.jpg" style="height:77%" alt="">
                <h4 class="text-center text-warning">GTA-5</h4>
                <h5 class="text-center">Price : 12$</h5>
                <button class="btn btn-outline-warning d-block m-auto">Add to Cart</button>
            </div>

            <div class="col-lg-2 col-md-6 ml-1 p-4">
              <img class="img-fluid img-thumbnail" src="img/img-10.jpg" style="height:77%" alt="">
              <h4 class="text-center text-warning">FarCry5</h4>
              <h5 class="text-center">Price : 5$</h5>
              <button class="btn btn-outline-warning d-block m-auto">Add to Cart</button>
          </div>

          <div class="col-lg-2 col-md-6 ml-1 p-4">
            <img class="img-fluid img-thumbnail" src="img/img-11.jpg" style="height:77%" alt="">
            <h4 class="text-center text-warning">State Of Decry</h4>
            <h5 class="text-center">Price : 3$</h5>
            <button class="btn btn-outline-warning d-block m-auto ">Add to Cart</button>
        </div>

        <div class="col-lg-2 col-md-6 ml-1 p-4">
          <img class="img-fluid img-thumbnail" src="img/img-12.jpg" style="height:77%" alt="">
          <h4 class="text-center text-warning">Apex Legend</h4>
          <h5 class="text-center">Price : 8$</h5>
          <button class="btn btn-outline-warning d-block m-auto">Add to Cart</button>
      </div>

            </div> 
            <form action="logoutAction.php"> 
            <input type="submit" value="Logout" class="col-3 btn-outline-danger d-block m-auto" id="submit">
    </form>       
  </div>

  

</body>
</html>