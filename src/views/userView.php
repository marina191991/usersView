<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Details – <?php echo $user[1] . " " . $user[2]?></title>
</head>
<body>
<?php
echo '<h1>User Details: ' .
    $user[1] . " " . $user[2] .
    '</h1><div><div>ID: ' . $param . '</div>' .
    '<div>First Name: ' . $user[1] . '</div>' .
    '<div>Second: ' . $user[2] . '</div>' .
    '<div>E-mail: ' . $user[3] . '</div>.
</div>';
?>
</body>
</html>
