<?php
 require "header.php";
  ?>
  

    <main>

           <div>
           <h1>SIGNUP</h1>
           <form action="registration.php" method="post">
           <input type="text" name="Uid" placeholder="username"><br>
           <input type="text" name="mail" placeholder="E-mail"><br>
           <input type="password" name="Pwd" placeholder="password"><br>
           <input type="password" name="pwd-repeat" placeholder="Re-enter password"><br>
           <button type="submit" name="signup-submit">SIGNUP</button><br>
           <h4>Already have an Account? <a href="index.html">LOGIN</a> here</h4>

           </form>
    </main>







<?php
 require "footer.php";
  ?>