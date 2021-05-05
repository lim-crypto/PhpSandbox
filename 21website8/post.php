<?php

require('config/db.php');

if (isset($_POST['delete'])) {

    $delete = mysqli_real_escape_string($conn, $_POST['delete_id']);
    $query = "DELETE FROM posts WHERE id={$delete}";
    if (mysqli_query($conn, $query)) {
        header('Location:index.php');
    } else {
        echo 'eror' . mysqli_error($conn);
    }
} 
// get id
$id = mysqli_real_escape_string($conn, $_GET['id']);
//create query
$query = 'SELECT * FROM posts WHERE   id=' . $id;
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
<a href="index.php">back</a>
<h1> <?php echo $post['title']; ?></h1>
<div>
    <small> created on <?php echo $post['created_at']; ?> by
        <?php echo $post['author']; ?>
    </small>
    <p><?php echo $post['body']; ?></p>
    <form action="" method="POST">
        <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
        <input type="submit" name="delete" value="delete">
    </form>
    <a href="edit.php?id=<?php echo $post['id']; ?>">edit</a>
</div>
<?php include('inc/footer.php'); ?>