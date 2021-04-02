<?php
include ('concta.php');
include ('nav.php');
$id=$_GET{'id'};
$get_news_sql="SELECT * FROM posts WHERE id=".$id;
$get_news_sql = mysqli_query($conn, $get_news_sql);

$row = mysqli_fetch_array($get_news_sql);
?>

<div class="addposts" Style="background-color:#fff;padding-left:40px;margin-top: 30px;
 ">
<div class="con">
<h6> <?php echo $row["tittel"];?></h6>
<p><?php echo $row["post"];?></p>

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