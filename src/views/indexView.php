<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users list</title>
</head>
<body>
<h1>List of Users</h1>
<ul>
    <?php
    $user = \Application\services\DataService::getUserFIO();
    foreach ($user as $key=>$value) {
        $id =$key+1;
       echo '<li><a href="/users/profile/'.$id.'/">';
        echo $value;
        echo '</a></li>';
    }
    ?>
</ul>
</body>
</html>
