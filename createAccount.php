
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Zone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php 
  
 function extra(){
     echo "go back";
 }
?>

<div class="member" id="scrollspySignIn">
       
       <h2>Create your Account</h2>
       <form class="row g-3" action="userinfo.php" method="post">
           <div class="col-md-6">
               <label for="inputName" class="form-label">First Name</label>
               <input type="text" name="firstname" class="form-control" id="inputName">
             </div>
             <div class="col-md-6">
               <label for="inputLastName" class="form-label">Last Name</label>
               <input type="text" name="lastname" class="form-control" id="inputLastName">
             </div>
           <div class="col-md-6">
             <label for="inputEmail4" class="form-label">Email</label>
             <input type="email" name="email" class="form-control" id="inputEmail4">
           </div>
           <div class="col-md-6">
             <label for="inputPassword4" class="form-label">Password</label>
             <input type="password" name="password" class="form-control" id="inputPassword4">
           </div>
           <div class="col-12">
             <label for="inputAddress" class="form-label">Address</label>
             <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
           </div>
        
           <div class="col-md-6">
             <label for="inputCity" class="form-label">City</label>
             <input type="text" name="city" class="form-control" id="inputCity">
           </div>
           <div class="col-md-4">
             <label for="inputState" class="form-label">State</label>
             <input type="text" name="state" class="form-control" id="inputState">
           </div>
          
           <div class="col-12">
             <button id="member-btn" type="submit" class="btn btn-primary">Create my Account</button>
             <button id="back-btn" type="back" class="btn btn-success">Go Back</button>
           </div>
         </form>
   </div>

   </body>
<script src="./script.js"></script>
</html>