<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
* {
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: sans-serif;
}

body {
    height: 100vh;
/*    background-image: url(https://2.bp.blogspot.com/-2TZJ3M9sSx4/Vs7gZnFNwgI/AAAAAAAABUM/v3R88LMR0Zc/s1600/login.png);*/
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
 
.login {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  padding: 20px 25px;
  width: 300px;
  background-color: rgba(0,0,0,.7);
  box-shadow: 0 0 10px rgba(255, 255, 255, .3);
}

.login h1{
    text-align: left;
    color: #fafafa;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #2979ff;
}
 
label {
  text-align: left;
  color: #90caf9;
}
 
input[type="username"],
input[type="pass"],
textarea {
  padding: 8px;
  width: 95%;
  background: #efefef;
  border: 0;
  font-size: 10pt;
  margin: 6px 0px;
}

.login form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #2979ff;
    color: #fff;
    font-size: 20px;
}
.login form button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#2979ff;
    font-size: 18px;
    color: #fafafa;
}
    </style>
</head>
<body>

    <div class="login">
        <h1>Sign In</h1>
        <form action="dashbord.php" method="GET">
            
            <div align="center">
                <label for="username"><b>User Name<br></b></label>
                <input type="text" name="username" id="username" required>
            </div> <br><br>

            <div align="center">
                <label for="pass"><b>Password<br></b></label>
                <input type="Password" name="pass" id="pass" title="Minimal 6 karakter" pattern="(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
            </div> <br><br>

            <div>
                <button><input type="submit" value="SIGN IN"></button>
            </div>

            <div>
                <p>Don't Have an Account ? <a href="index.php">Sign Up Now</a>.</p>
            </div>
        </form>
    </div>

</body>
</html>