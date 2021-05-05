<?php
//$conn = mysqli_connect('localhost', 'root','','pdoposts');
$host='localhost';
$user='root';
$password='';
$dbname='pdoposts';
//set dsn
$dsn='mysql:host='.$host.';dbname='.$dbname;
//create  apdo instance
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
//$stmt=$pdo->query('SELECT * FROM post');
/*
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo $row['title'] . '<br>';
    }

*/
/*
while($row = $stmt->fetch()){
    echo $row->title . '<br>';
}
*/

#prepared statements (prepare & execute)
  //UNSAFE   //$sql ="SELECT * FROM post where author = '$author'";

  //FETCH MULTIPLE POSTS
  //USER INPUT
  $author='xmen';
  $is_published=true;
  $id=1;
  $limit=1;
  //POSITIONAL PARAMETERS             
  $sql ="SELECT * FROM post where author = ? ";
  $stmt=$pdo->prepare($sql);
  $stmt->execute([$author]);
  $posts1=$stmt->fetchAll();
  
    foreach($posts1 as $post1){
        echo $post1->title.'<br>1';
    }
    echo '<br> <br>  ';
//LIMIT POST          
    $sql ="SELECT * FROM post where author = ? && is_published= ?  LIMIT ? ";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([$author, $is_published, $limit ]);
    $posts2=$stmt->fetchAll();
 
    foreach($posts2 as $post2){
        echo $post2->title.'<br>2';
    }
    echo '<br> <br>  ';
//NAMED PARAMETERS             
    $sql ="SELECT * FROM post where author = :author && is_published=:is_published ";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([ 'author'=> $author, 'is_published'=>$is_published]);
    $posts3=$stmt->fetchAll();

   // var_dump($posts);
    foreach($posts3 as $post3){
        echo $post3->title.'<br>3';
    }

    echo '<br> <br>  ';

// FETCH SINGLE POST
    $sql ="SELECT * FROM post where id = :id  ";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([ 'id'=> $id]);
    $post=$stmt->fetch();
    echo $post->title.'<br>';
    echo '<br> <br>  ';

//GET ROW COUNT
$stmt=$pdo->prepare('SELECT * FROM post where author = ?');
$stmt->execute([$author]);
$postCount = $stmt->rowCount();
echo $postCount;

//INSERT DATA
// $title='post xxxxx';
// $body='this is post X';
// $author ='Xmen';

// $sql='INSERT INTO post(title,body,author) values(:title, :body, :author) ';
// $stmt=$pdo->prepare($sql);
//  $stmt->execute(['title'=>$title,'body'=>$body,'author'=>$author]);
//  echo 'POST ADDED';

//UPDATE DATE
// $id=6;
// $title='logan';
// $body='deadpool';
// $author ='Xmen';

$sql='UPDATE post SET title=:title , body=:body , author=:author where id=:id';
$stmt=$pdo->prepare($sql);
 $stmt->execute(['title'=>$title,'body'=>$body,'author'=>$author ,'id'=>$id]);
 echo 'POST updated';

//DELETE DATA

// $id=10;
// $title='logan';
// $body='deadpool';
// $author ='Xmen';

// $sql='DELETE FROM post where id=:id';
// $stmt=$pdo->prepare($sql);
//  $stmt->execute(['id'=>$id]);
//  echo 'POST deleted';
echo '<br> <br>  ';
// SEARACH DATA
$search="%x%";
$sql="SELECT * FROM post where title like ?";
$stmt=$pdo->prepare($sql);
$stmt->execute([$search]);
$posts=$stmt->fetchAll();
foreach($posts as $post){
    echo $post->title.'<br>';
}


