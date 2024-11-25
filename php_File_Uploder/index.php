<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    

    <body>
        <div class="container">
            <form action="handler.php" method="POST">
                <?php if(!empty($_SESSION['msg_ok'])): ?>
                    <div class="msg show msg_g">
                        <?php echo $_SESSION['msg_ok']; ?>
                    </div>
                    <?php unset($_SESSION['msg_ok']); ?>
                <?php endif; ?>

                <?php if(!empty($_SESSION['msg_wrong'])): ?>
                    <div class="msg show msg_r">
                        <?php echo $_SESSION['msg_wrong']; ?>
                    </div>
                    <?php unset($_SESSION['msg_wrong']); ?>
                <?php endif; ?>

                <div class="box">
                    <input class="if" type="FILE" name="file">
                    <input type="submit" name="submit"> 
                </div>
            </form>
        </div>
    </body>
</html>