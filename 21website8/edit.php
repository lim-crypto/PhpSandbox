<?php

require('config/db.php');

if (isset($_POST['submit'])) {

  $updateId = mysqli_real_escape_string($conn, $_POST['updateId']);
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $author = mysqli_real_escape_string($conn, $_POST['author']);
  $body = mysqli_real_escape_string($conn, $_POST['body']);
  $query = "UPDATE posts set 
  title='$title',
  author='$author',
  body='$body'
    where id ={$updateId}";

  $select = "SELECT * FROM posts";
  $result = mysqli_query($conn, $query);

  header('Location:index.php');
}


// get id
$id = mysqli_real_escape_string($conn, $_GET['id']);
//create query
$query = 'SELECT * FROM posts WHERE id=' . $id;
// get result 
$result = mysqli_query($conn, $query);
//fetch data
$post = mysqli_fetch_assoc($result);
//Free Result
mysqli_free_result($result);
//Mysqli_close connection
mysqli_close($conn);
?>


<?php include('inc/header.php'); ?>

<h1> addpost</h1>


<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>"><br>
  title <input type="text" name="title"><br>
  author <input type="text" name="author"><br>
  body <input type="text" name="body"><br>
  <input type="hidden" name="updateId" value="<?php echo $post['id']; ?>">
  <input type="submit" name="submit" value="submit">
</form>
</body>

</html>