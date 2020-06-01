<?php

if (isset($_GET['p_id'])) {
  $get_post_id = $_GET['p_id'];
}

$query = "SELECT * FROM posts";
$get_all_posts_id = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($get_all_posts_id)) {
    $post_id = $row['post_id'];
    $post_author = $row['post_author'];
    $post_title = $row['post_title'];
    $post_category = $row['post_category_id'];
    $post_status = $row['post_status'];
    $post_image = $row['post_image'];
    $post_tag = $row['post_tags'];
    $post_comment = $row['post_comment_count'];
    $post_date = $row['post_date'];
    $post_content = $row['post_content'];
    }

?>

<?php
if (isset($_POST['update_post'])) {
  $update_post = $_POST['update_post'];

  $query = "UPDATE posts SET cat_title = '{$the_cat_title}' WHERE cat_id = {$cat_id}";
}


?>


<form action="" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="title">Post Title</label>
    <input value="<?php echo $post_title ?>" type="text" class="form-control" name="title"> 
  </div>

  <div class="form-group">
    <label for="post_category">Post Category Id</label>
    <input value="<?php echo $post_category ?>" type="text" class="form-control" name="post_category_id"> 
  </div>

  <div class="form-group">
    <label for="title">Post Author</label>
    <input value="<?php echo $post_author ?>" type="text" class="form-control" name="author"> 
  </div>

  <div class="form-group">
    <label for="post_status">Post Status</label>
    <input value="<?php echo $post_status ?>" type="text" class="form-control" name="post_status"> 
  </div>

  <div class="form-group">
    <!-- <label for="post_image">Post Image</label>
    <input type="file" name="image">  -->
    <img width="50" src="../image/<?php echo $post_image; ?>" alt="image">
  </div>

  <div class="form-group">
    <label for="post_tags">Post Tags</label>
    <input value="<?php echo $post_tag ?>" type="text" class="form-control" name="post_tags"> 
  </div>

  <div class="form-group">
    <label for="post_content">Post Content</label>
    <textarea class="form-control" name="post_content" id="" cols="30" rows="10"> <?php echo $post_content ?> </textarea> 
  </div>

  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="update_post" value="Update Post"> 
  </div>