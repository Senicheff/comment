<?php

if(isset($_GET['status']) && !empty($_GET['status'])) 
{
    header("refresh:5;url=/");
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма отправки комментариев</title>
</head>

<body>

    <?php
    
    $data = file("comments.txt") or die ("Невозможно открыть файл!");

    foreach($data as $comment)
    {
        echo $comment . "<br>";
    }
    
    ?>
    <br>
    <div class="comment_form">
        <form action="comment.php" method="post">
            <input type="text" name="author" placeholder="Автор" required>
            <input type="text" name="comment" placeholder="Текст комментария" required>
            <button type="submit">Добавить комментарий</button>
        </form>
        <?php

        if ($_GET['status'] == "send") 
        {
            echo "<h2>Комментарий успешно добавлен!</h2>";
        }
        elseif ($_GET['status'] == "error")
        {
            echo "<h2>Произошла ошибка! Комментарий не добавлен!</h2>";
        }

        ?>
    </div>

</body>

</html>