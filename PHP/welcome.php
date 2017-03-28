<!DOCTYPE HTML>
<html>
  <head>
      <title>Quiz 2</title>
      <meta name = "author" content="Bradley Dietz">

      <link rel="stylesheet" type="text/css" href="../css/site.css">
  </head>
  <body>
    <h1>Fill out your info for a chance to win Steeler Ticets!</h1><br>
    <?php
      if(!isset($_COOKIE["fname"])) {
    echo
    '<form action="register.php" method="post">
      First Name: <input type="text" name="fname"><br>
      Last Name: <input type="text" name="lname"><br>
      E-mail: <input type="text" name="email"><br>
      <input type="submit">
    </form>
    <img class="Steeler_Pic" src="../PICTURES/Stellers pic.jpg" alt="Photo steeler ">';

      } else
      {
         echo "<p>Hello, " . $_COOKIE["fname"] . ", you recently signed up with the email address: " . $_COOKIE["email"] . "</p>";
      }
    ?>

  </body>
</html>
