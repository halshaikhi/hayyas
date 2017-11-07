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

</style>
</head>


        <form method="post" action="login/index">

            <label for="username">Username:</label><br/>

            <input type="text" name="username" id="username"><br/>

            <label for="password">Password:</label><br/>

            <input type="password" name="password" id="password"><br/>

       
			  <input type="submit" value="Log In!">
			  <input type="submit" name ="attempt" value="attempt!">
			 
			  <a href="/login/register"> sign up!</a>
			
 
        </form>

    </body>

</html>




    <?php require_once '../app/views/templates/footer.php' ?>
