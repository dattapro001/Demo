<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        form{
            background-color: #fff;
            padding : 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="conatiner-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="insert.php" method="post" enctype='multipart/form-data'>
                    <div class="mb-3">
                           <h3>Insert Product</h3> 
                    </div>
                    <div class="mb-3">
                      Name : 
                      <input type="text" class="form-control" name ="name">
                      
                    </div>
                    <div class="mb-3">
                      Price :
                      <input type="text" class="form-control" name="price">
                    </div> 
                    <div class="mb-3">
                      Image :
                      <input type="file" class="form-control" name="image">
                    </div>
                   
                   
                    <button type="submit" class="btn btn-primary col-12" name="submit">Insert</button>
                   
                </form>
            </div>
        </div>
    </div>

    <!-- product display -->
    <div class="container-fluid">
    <table class="table table-dark mt-4">
  <thead>
    <tr>
      <th scope="col">Number</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Update</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
       include 'config.php';
       $db_data = "SELECT * FROM `product`";
       $allData = mysqli_query($conn,$db_data);

       while($row=mysqli_fetch_array($allData)){
        echo "
        <tr>
           <td>$row[id]</td>
           <td>$row[name]</td>
           <td>$row[price]</td>
           <td><img width='100px' src='$row[image]' alt=''></td>
           <td><a  class='btn btn-warning' href = 'update.php'>Update</a></td>
           <td><a  class='btn btn-danger' href = 'delete.php? id=$row[id]'>Delate</a></td>
           </tr>
        ";
       }

   ?>
  </tbody>
</table>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>