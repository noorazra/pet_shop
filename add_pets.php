<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>add pets</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>


   
 
 <style>
        .header{
            padding: 10px;
            color: white;
            background-color: mediumvioletred;
            
        }
        .header:hover{
            color: black;
        }
        .header h1{
            font-size: 60px;
            
        }
        
        img{
            padding: 10px;
        }
      
      a{
        text-decoration: none;
        color:darkgoldenrod;
        font-size: 25px;
      }
       li a{
        
        font-size: 18px;
        font-weight: bold;
        margin-right: 25px;
       }
       
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-success">
    <div class="container-fluid">
        <a href="#" class="navbar-brand" style="color:rgb(16, 234, 212); font-size: 50px;">Pet Shop</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.html">HOME </a></li> 
            <li class="nav-item"><a class="nav-link" href="view_enquiry.php">View-Enquiry </a></li> 
            <li class="nav-item"><a class="nav-link" href="add_pets.php">Add Pets </a></li> 

            <li class="nav-item"><a class="nav-link" href="admin.php">ADMIN</a></li> 

        </ul>
    </div>
  </nav>
        
      <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 header" align="center">
                <h1>Add Pets</h1>
            </div>
        </div>
    </div>
    <br>
   
    <div class="container">
        <div class="row ">
            
            <div class="col-md-4 bg-warning form">
                <h2>Add Pets</h2>
                <form action="view_addpets.php" method="POST">
                    <label for="name">Pet Name</label>
                    <input type="text" name="petname" class="form-control" required>
                    <label for="phone">Price</label>
                    <input type="text" name="price" class="form-control" required>
                    <label for="category">Category</label>
                    <select  class="form-control" name="category" id="category">
                        <option value="CATS">Cats</option>
                        <option value="FISHES">Fishes</option>
                        <option value="DOGS">Dogs</option>
                        <option value="BIRDS">Birds</option>
    </select>
                   
                    <label  for="description">Description</label>
                    <textarea name="description" class="form-control" required></textarea>
                    <br>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <br><br>
                </form>
            </div>
            
          
            
            <div class="col-md-8">
               
                <table class="table table-striped">
                    <thead>
                        <tr class="bg-info" align="left">
                           <th>Sl.no</th>
                            <th>Pet Name</th>
                            <th>Price</th>
                            
                            <th>Category</th>
                            <th>Description</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php

                        $enq="select * from pets";
                        $result=mysqli_query($connection,$enq);
                        $count=0;
                        while($i=mysqli_fetch_assoc($result)){
                        $userid=$i['id'];
                        $petname=$i['petname'];
                        $price=$i['price'];
                        $category=$i['category'];
                        $description=$i['description'];
                        $count++;

                    ?>
                    <tr>
                    <td><?php echo $count; ?></td>

                        <td><?php echo $petname; ?></td>
                        <td><?php echo $price; ?></td>
                        <td><?php echo $category; ?></td>
                        <td><?php echo $description; ?></td>
                        <td><a href="delete2.php?user=<?php echo $userid; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
            
        </div>
    
    </div>
 
    
</body>
</html>