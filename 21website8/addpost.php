<?php

require('config/db.php');

if (isset($_POST['submit'])) {

  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $author = mysqli_real_escape_string($conn, $_POST['author']);
  $body = mysqli_real_escape_string($conn, $_POST['body']);

  $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";
  $result = mysqli_query($conn, $query);

  header('Location:index.php');
}
?>


<?php include('inc/header.php'); ?>

<h1> addpost</h1>


<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>"><br>
  title <input type="text" name="title"><br>
  author <input type="text" name="author"><br>
  body <input type="text" name="body"><br>
  <input type="submit" name="submit" value="submit">

</form>











</body>

</html>