<?php 
session_start();
if($_SESSION['enter'] != 1){
    echo "Не авторизован <a href=\"signin.php\"> Авторизоваться</a>";
} else {
    echo "Авторизован";
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>MyBlog</title>
</head>
<body>


    <div class="container">
        <div class="wrapper">

        <header>
            <ul class="header-nav">
               <a href=""><li>Home</li></a>
               <a href=""><li>Abous us</li></a>
               <a href=""><li>Projects</li></a>
            </ul>
            <div class="sign-in-status">
                <form action="signin.php" method="post">
                    <input type="hidden" name="sign-exit" value="1">
                <button>exit</button>
                </form>
            </div>
        </header>
        
        <main>

        <?php 

        







        
        require('engine/connect_db.php');
        require('engine/add_article.php');

    

        $query = mysqli_query($db, 'SELECT * FROM `articles`');

        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

        foreach($result as $article){
            echo "
            <article class=\"\">
            <h2>".  $article['header'] ."</h2>
            <div class=\"text-block\">" . $article['text'] . "</div>
            <div class=\"footer-blog\">
                <p> date: " . $article['date'] . "</p>
                <p> Views: " . $article['views'] . "</p>  
                <p>author: " . $article['author'] . "</p>
            </div>
        </article>
            ";
        }
        
        
        
        
        
        ?>


        <article class="">
            	<?php echo $page1; ?>
        </article>
    




         </main>

        <footer>
            <p>&#169; Copyright</p>
        </footer>



        </div>
    </div>










    
    
    
    
</body>
</html>