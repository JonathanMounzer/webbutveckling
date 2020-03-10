<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style type="text/css">


input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.container {
    padding: 0 16px 0 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}
.content{
  margin-left: 25%;
  margin-right:25%;
  margin-top: 5%;
}

@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

  </style>
</head>
<body>
  <div class="content">
    <h2>Login page for admins</h2>

    <form action="/loggaIn.php" method="post">
      <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <button type="submit">Login</button>
  </form>
</div>
</body>
</html>
