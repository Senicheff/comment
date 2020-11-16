<?php

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";


if (isset($_POST['author']) && isset($_POST['comment']))
{
    if(!empty($_POST['author']) && !empty($_POST['comment']))
    {
        $author  = trim($_POST['author']);
        $comment = trim ($_POST['comment']);
        

        $comment = "Автор: " . $author . " || " . date("d-m-Y H:i:s", time()) . " || " . $comment . "\n";
        $data = "comments.txt";

        if(is_file($data) && is_writable($data))
        {
            $storage = fopen($data, 'a') or die("Невозможно открыть файл!");
            fwrite($storage, $comment);
            fclose($storage);
            header("Location: index.php?status=send");
            
        }
        else
        {
            header("Location: index.php?status=error");    
        }
    }
}


?>