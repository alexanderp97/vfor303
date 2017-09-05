<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/alexanderp97/jokes/categories/worker.php'?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/alexanderp97/jokes/workers/htmlSpecialChars.php'?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <title>Manage Categories</title>
</head>
<body bgcolor="#b3ffb3">
<center>
    <h1>Manage Categories</h1>
<p><a href="worker.php?add">Add new category</a></p>
<ul>
    <?php

    foreach ($categories as $category):?>
        <li>
            <form action="" method="post">
                <div style="background-color:#7574ff ;font-size:26px">
                    <?php echo html($category['name']); ?>
                    <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
                    <input style="float: right;font-size:20px; " type="submit" name="action" value="Edit">
                    <input style="float: right;font-size:20px; "type="submit" name="action" value="Delete">
                </div>
            </form>
        </li>
    <?php endforeach; ?>
</ul>
<p><a href="..">Return to JMS home</a></p>
</center>
</body>
</html>
