<?php
error_reporting(0);
include ('concta.php');
include ('nav.php');


 $tittel=$_POST{'input-tittel'};
$post=$_POST{'input-post'};
$send=$_POST{'input-send'};
if(isset($send)){
   
$query="INSERT INTO posts(tittel,post) VALUES ('$tittel','$post')";
mysqli_query($conn,$query);

}
?>
  <div class="addpost" Style="background-color:#f6f6f6;padding-left: 40px;" >
  <div class="con">
      <h4>اضافه بوست</h4>
    <form action="addpost.php" method='POST' >
    <label>العنوان</label>
      <input type="text" placeholder="ادخل عنوان البوست" name="input-tittel">
      <label>البوست</label>
      <input type="text" placeholder="ادخل البوست" name="input-post" name="input-post">
      <a><button class="btn" name='input-send' name='input-send'>نشر</button></a>
    </form>
  </div>
  </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script>  $(document).ready(function(){
        $('.sidenav').sidenav();
      });
      </script>
     
</body>
</html>