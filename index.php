<?php
error_reporting(0);
include ('concta.php');
include ('nav.php');

$get_news_sql = "SELECT * FROM `posts`";
            $get_news_sql = mysqli_query($conn, $get_news_sql);
            while ($row = mysqli_fetch_array($get_news_sql)) {?>

<div class="addposts" Style="background-color:#fff;padding-left:40px;margin-top: 30px;
 ">
<div class="con">
<h6><a href="post.php?id=<?php echo $row["id"];  ?>"><?php echo $row["tittel"];?></a></h6>
<p><?php echo $row["post"];?></p>
<a href="post.php?id=<?php echo $row["id"];  ?>"> <button Style=" cursor:pointer;padding=10px;color:#fff;background-color:#3f51b5;font-size=16px;border:0;"> قراء المزيد</button></a>
</div>
</div>
  <?php 
            }
?>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script>  $(document).ready(function(){
        $('.sidenav').sidenav();
      });
      </script>





</body>
</html>