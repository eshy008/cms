<table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Author</th>
                              <th>Title</th>
                              <th>Category</th>
                              <th>Status</th>
                              <th>Image</th>
                              <th>Tags</th>
                              <th>comments</th>
                              <th>Date</th>
                            </tr>
                          </thead>

                          <?php

                          $query = "SELECT * FROM posts";
                          $select_all_posts = mysqli_query($connection, $query);

                          while ($row = mysqli_fetch_assoc($select_all_posts)) {
                            $post_id = $row['post_id'];
                            $post_author = $row['post_author'];
                            $post_title = $row['post_title'];
                            $post_category = $row['post_category_id'];
                            $post_status = $row['post_status'];
                            $post_image = $row['post_image'];
                            $post_tag = $row['post_tags'];
                            $post_comment = $row['post_comment_count'];
                            $post_date = $row['post_date'];

                            echo "<tr>";
                            echo "<td>{$post_id}</td>";
                            echo "<td>{$post_author}</td>";
                            echo "<td>{$post_title}</td>";
                            echo "<td>{$post_category}</td>";
                            echo "<td>{$post_status}</td>";
                            echo "<td><img width='50' src='../images/$post_image' alt = 'image' </td>";
                            echo "<td>{$post_tag}</td>";
                            echo "<td>{$post_comment}</td>";
                            echo "<td>{$post_date}</td>";
                            echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                            echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
                            
                            
                            echo" </tr>";

                          }

                          ?>
                        </table>

<?php

if (isset($_GET['delete'])) {
  
  $get_post_id = $_GET['delete'];
  $query = "DELETE FROM posts WHERE post_id = {$get_post_id} ";
  $delete_query = mysqli_query($connection, $query);
  header("Location: posts.php"); 
}

?>