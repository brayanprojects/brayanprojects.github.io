<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ingreso a sistema</title>
   <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="center">
   <h1>Login</h1>
   <form name="mainform">  
     <div class="inputbox">
       <input type="text" name="txt">
       <span>User</span>
     </div>
     <div class="inputbox">
       <input type="password" name="password">
       <span>Password</span>
     </div>
     <div class="inputbox">
       <input type="button" value="Ingresar" onclick="usrpas()">
     </div>
   </form>
 </div>
 <script src="index.js"></script>
</body>
</html>