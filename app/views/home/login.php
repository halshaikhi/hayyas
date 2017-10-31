<?php require_once '../app/views/templates/headerPublic.php' ?>

<html>

    <head>

        <title>Login Page</title>

    </head>

    

    <body>

        

     Hello Everyone <br> Please write your user name and the password to access  the website 
<title>Sign-In</title>
 

      </div> 
	  
  <body bgcolor="#A9A9A9">   </P> 
  <head>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	
}
</style>
</head>


        <form method="post" action="login/index">

            <label for="username">Username:</label><br/>

            <input type="text" name="username" id="username"><br/>

            <label for="password">Password:</label><br/>

            <input type="password" name="password" id="password"><br/>

            <a href="#" class="button"  name"login">login</a>
			 <a href="#" class="button"  name"attempt">attempt!</a>
			 
			  <a href="/login/register"> sign up!</a>
			
 
        </form>

    </body>

</html>




    <?php require_once '../app/views/templates/footer.php' ?>
