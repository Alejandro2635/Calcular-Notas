

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$s = "Pereiro";

echo "<p><strong>Con comillas dobles: </strong>{$s}_user </p>";
echo '<p><strong>Con comillas simples: </strong>'.$s.'_user</p>';
printf("<p><strong>Con printf: </strong> %s_user</p>",$s);

?>
</body>
</html>
