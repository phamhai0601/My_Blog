<?php 
  include 'autoload.php';
    $rcategory = $db->getCategory();
	if(isset($_POST['submit']) == "Save"){
	    $title = $_POST['title'];
	    $content = "";
	    $isLink = "0";
	    $link = "";
        $category_id= $_POST['category_id'];
	    if($_POST['isLink']=="on"){
            $isLink= "1";
            $link = $_POST['link'];
        }else{
            $content =  $_POST['content'];
        }
      $result = $db->addBlogConten($title,$content,$isLink,$link,$category_id);
      if($result){
          echo 'add Success.';
      }else{
          echo 'add falied.';
      }
  }
?>
<html>
<header>
	<script src="template/tinymce/main.js"></script>
</header>
<body style="padding: 40px 20%; width: 800px">

<h1>Add Blog</h1>

<hr>

<form action="#" method="post">
  <label>Category: </label>  <br>
    <select name="category_id">
        <?php foreach ($rcategory as $item){ ?>
            <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
        <?php }?>
    </select>
    <br><br>
  <label for="fname">Is Link:   </label>
  <input type="checkbox" id="islink" name="isLink" onclick="IsLink();" style="width: 20px; height: 20px"><br><br>	
  <div id='isLink' style="display: none;">
  <label for="fname">Link:</label>
  <br>
 
  <input type="text" id="fname" name="link" style="width: 500px;"><br><br>
  </div>
  <label for="fname">Title:</label>
  <br>
  <input type="text" id="fname" name="title" style="width: 500px;"><br><br>
  <div id="divContent">
    <label for="lname">Content:</label>
    <br>
    <textarea class="tinymce" name="content"></textarea><br><br>    
  </div>
  <input type="submit" value="Save" name="submit">
<!--   <input type="submit" formaction="/action_page2.php" value="Submit as Admin"> -->
</form>
<script type="text/javascript">
    function IsLink(){
        var isLink = document.getElementById('islink').checked;
        if(isLink==true){
            document.getElementById('isLink').style.display='block';
            document.getElementById('divContent').style.display='none';
        }else{
          document.getElementById('isLink').style.display='none';
          document.getElementById('divContent').style.display='block';
        }
    }
</script>
<script type="text/javascript" src="template/jquery.min.js"></script>
<script type="text/javascript" src="template/tinymce/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="template/tinymce/main.js"></script>
</body>
</html>