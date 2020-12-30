<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet">
  <meta name="viewport" content="width=device-width, inital-scale">
  <style type="text/css">

*{
  margin: 0;
  padding: 0;
  text-decoration: none;
  font-family: sans-serif;
}

body{
  min-height: 100vh;
  background-image: linear-gradient(120deg,#3498db,#8e44ad);
}

.login-form{
  width: 250px;
  background: #f1f1f1;
  height: 350px;
  padding: 80px 40px;
  border-radius: 10px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.login-form h1{
  text-align: center;
  margin-bottom: 60px;
}

.txtb{
  border-bottom: 2px solid #adadad;
  position: relative;
  margin: 30px 0;
}

.txtb input{
  font-size: 15px;
  color: #333;
  border: none;
  width: 100%;
  outline: none;
  background: none;
  padding: 0 5px;
  height: 40px;
}


.logbtn{
  display: block;
  width: 100%;
  height: 50px;
  border: none;
  background: linear-gradient(120deg,#3498db,#8e44ad);
  background-size: 200%;
  color: #fff;
  outline: none;
  cursor: pointer;
  transition: .5s;
}

.logbtn:hover{
  background-position: right;
}
.bottom-text{
  margin-top: 60px;
  text-align: center;
  font-size: 13px;
}


</style> 
</head>
<body>

  <form action="login.php" class="login-form" method="POST">
    <h1>Admin Login</h1>

    <div class="txtb">
      <input type="text" placeholder="Username" name="Username" required>
    </div>
    <div class="txtb">
      <input type="password" placeholder="Password" name="Password" required>
    </div>

    <input type="submit" class="logbtn" value="Login">

    </div>
  </form>
</body>
</html>