<!DOCTYPE html>
<html>
<head>
    <meta charset="=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Online Pet Shop </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <style >

        a{
            text-decoration: none;
           
        }
        .navbar{
            background-color: rgb(178, 246, 77);
           
           }

           .navdiv{
        display: flex;
        align-items: center;
        justify-content: space-between;
       }    

        .logo{
            color:darkblue;
            font-size: 30px;
            font-weight: bold;
           }
        
          

       li{
        list-style: none;
        display: inline-block;
        
       }
       li a{
        color: rgb(192, 0, 0);
        font-size: 18px;
        font-weight: bold;
        margin-right: 25px;
       }

        .imgee{
            width: 1350px;
            height: 600px;
            margin: 0px;
            background-repeat: no-repeat;
            background-size: 100% 400px;
            background-position: center;
            background-color: linen;
            
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
            <div class="col-md-12 imgee">
                <img src="admin.jpg" alt="pets image" width="1300px" height="500px"/>
            </div>
        </div>
    </div>
    </body>
    </html>
