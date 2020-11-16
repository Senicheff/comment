<?php

if (isset($_POST['author']) && isset($POST['comment']))
{
    if(!empty($_POST['author']) && !empty($_POST['comment']))
    {
        $author  = trim($_POST['author']);
        $comment = trim ($_POST['comment']);
        $date = time();
    }
}


?>