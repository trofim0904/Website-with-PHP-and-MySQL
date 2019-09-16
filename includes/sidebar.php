<?php 
	if( isset($_SESSION['logged_user']) ){
?>
<div class="sidebarInfo">
    <h4>Account: <?php echo $_SESSION['logged_user']->login; ?> <a href="/includes/logout.php"><img style="margin-bottom: 7px;" height="30px" width="30px" src="/img/close_2.png"></a></h4>
    
</div>
<?php
    }
?>
<div class="sidebarInfo">
        <h3>News</h3>
        <ul>
        <?php
                $rows_news = R::getAssoc('SELECT * FROM news ORDER BY news.id DESC LIMIT 5');
                foreach ($rows_news as $row)
                {
                   
            ?> 
            <li> 
                <p class="comment-date">
                <?php
                    echo $row['date']; 
                ?> 
                </p>
                <p class="comment-text"> 
                <?php
                    echo $row['text'];  
                ?>
                </p>
                
            </li>
            <div class="line"></div>
        <?php  
            }
        ?>
           
        </ul>
</div>
<div class="sidebarInfo">
        <h3>Comments</h3>
        <ul>
            <?php
                $rows_comments = R::getAssoc('SELECT * FROM comments ORDER BY comments.id DESC LIMIT 5');
                foreach ($rows_comments as $row)
                {
                    $user = R::findOne('users', 'id = ?', array($row['id_user']));
            ?> 
            <li> 
                <p class="comment-login"><strong>
                    <?php
                        echo $user->login 
                    ?>
                </strong></p>
                <p class="comment-date">
                <?php
                    echo $row['date']; 
                ?> 
                </p>
                <p class="comment-text"> 
                <?php
                    echo $row['text'];  
                ?>
                </p>
            </li>
            <div class="line"></div>
            <?php  
                }
            ?>

        </ul>
</div>
<?php
    $data = $_POST;
    if( isset($data['add_comment']) )
    {   
        if( trim($data['comment']) == '' ) {} 
        else    
        {
        $comment = R::dispense('comments');
        $comment->text = $data['comment'];
        $comment->id_user = $_SESSION['logged_user']->id;
        $comment->date = date('d.m.Y H:i');
        
        R::store($comment);
        
        
        

        }
        
    }
?>



<div class="sidebarInfo">
        <form action="/" method="POST">
            <h3>Add comment</h3>
            <p><textarea name="comment"></textarea></p>
            <p><button type="submit" class="btn btn-success commentBtn" name="add_comment"<?php if(!isset($_SESSION['logged_user'])){?>disabled<?php } ?>>Add</button></p>
            <?php if(!isset($_SESSION['logged_user'])){?><p class="bottom-text">You must log in to leave a comment!</p><?php } ?>
        </form> 
</div>
