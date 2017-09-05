<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/alexanderp97/jokes/workers/htmlSpecialChars.php';?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo html($pageTitle);?></title>
</head>
<body bgcolor="#b3ffb3">
<center>
<h1><?php echo html($pageTitle);?></h1>
<form action="?<?php echo html($action);?>" method="post">
    <div>
        <label for="name">Name:
            <input type="text" name="name" id="name" value="<?php echo html($name);?>">
        </label>
    </div>
    <div>
        <input type="hidden" name="id" value="<?php echo html($id)?>">
        <input type="submit" value="<?php echo html($button);?>">
    </div>
</form>
</center>
</body>
</html>