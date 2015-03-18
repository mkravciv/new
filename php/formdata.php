<?php
print_r($_POST);

echo $_POST['date'];
echo $_POST['kabinet'];
echo $_POST['model_priner'];

$result =  mail("mkravciv@gmail.com","АНКЕТА С САЙТА","СООБЩЕНИЯ $_POST[password] $_POST[name]");

//if ($result) {
//echo "<p>Повідомлення відправлено</p>";
//}
//else {
//echo "<p>Повідомлення не відправлено</p>";
//}

?>