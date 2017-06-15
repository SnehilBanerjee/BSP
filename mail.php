<?php 

if (isset($_POST['submit'])) {
  $to=$_POST['email'];
   $msg='Name:'.$_POST['name']."\n".'Email:'.$to."\n".'comment:'.$_POST['comment'];
   if (mail($to, 'Sample text',$msg,'from :snehilbanerji@gmail.com')) {
     echo "your mail has been sent omedetto";
   }
   
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title></title>
 </head>
 <body>
 <form action="mail.php" method="POST">
    <table>
       <tr>
          <td>Name</td>
          <td><input type="text" name="name"></td>
       </tr>
       <tr>
          <td>Email</td>
          <td><input type="text" name="email"></td>
       </tr>
       <tr>
          <td>comment</td>
          <td><input type="text" name="comment"></td>
       </tr>
       <tr><td><input type="submit" name="submit"></td></tr>
    </table>
 </form>
 </body>
 </html>