<?php
require('config/config.php');
require('config/db.php');
//create query
$query = 'SELECT * FROM posts order by created_at desc ';
// get result 
$result = mysqli_query($conn, $query);
//fetch data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
//Free Result
mysqli_free_result($result);
//Mysqli_close connection
mysqli_close($conn);
?>
<?php include('inc/header.php'); ?>
<h1>posts</h1>

<?php foreach ($posts as $post) : ?>
    <div>
        <h3> <?php echo $post['title']; ?></h3>
        <small> created on <?php echo $post['created_at']; ?> by
            <?php echo $post['author']; ?>
        </small>
        <p><?php echo $post['body']; ?></p>
        <a href="post.php?id=<?php echo $post['id']; ?>">readmore</a>
        <!-- php echo ROOT_URL; ?> -->
    </div>
<?php endforeach; ?>
<?php include('inc/footer.php'); ?>