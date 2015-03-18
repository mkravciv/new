<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Перелік принтерів</title>
   
</head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<body>
<!--<form action="formdata_zapravka.php" method="POST" name="form1">-->
 
<b>     <a href="zapravka_printers.php">Журнал заправки</a>    </b>   | <b>   Росхідні матеріали    </b> |<b>  Листок замовлення   </b>| <b>    Корисна інформація  </b>

    

<p><a href="#" onClick="window.open('add_printer.html', '_blank', 'Toolbar=0, Scrollbars=1, Resizable=0, Width=1090, resize=no, Height=180');">
Добавити принтер</a></p>    
    
<?php

  
 // Соединение с сервером БД
	mysql_connect("192.168.1.223", "petrynchyn", "WE34op") or die (mysql_error ());
   

	// Выбор БД
	mysql_select_db("printers") or die(mysql_error());
//    mysql_query('SET NAMES UTF8',$connect) or die('SET NAMES UTF8 failed');
  


    mysql_query("set character_set_client='UTF8'");
    mysql_query("set character_set_results='utf8'");
   // mysql_query("set collation_connection='cp1251_ukrainian_ci'");
   // mysql_query('SET CHARACTER SET cp1251');

$db_table_to_show = 'perelik_printers';
   

 // выбираем все значения из таблицы "Contacts"
    $qr_result = mysql_query("select * from " . $db_table_to_show)
		or die(mysql_error());

    // выводим на страницу сайта заголовки HTML-таблицы
    echo '<table border="1">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Модель принтера</th>';
	echo '<th>Розташування принтера</th>';
	echo '<th>Відповідальний/користувач</th>';
    echo '<th>ІР-адреса</th>';
    echo '<th>Катрідж</th>';
    echo '<th>Тип тонер</th>';
    echo '<th>Додатковий катридж ТАК/НІ</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	
   // выводим в HTML-таблицу все данные клиентов из таблицы MySQL 
while($data = mysql_fetch_array($qr_result)){ 
	echo '<tr>';
    echo '<td>' . $data['model_printer'] . '</td>';
	echo '<td>' . $data['kabinet'] . '</td>';
	echo '<td>' . $data['vidpovidalnuy'] . '</td>';
    echo '<td>' . $data['ip_adress'] . '</td>';
    echo '<td>' . $data['katridg'] . '</td>';
    echo '<td>' . $data['toner'] . '</td>';
    echo '<td>' . $data['dod_katridg'] . '</td>';
	echo '</tr>';
	}
	
    echo '</tbody>';
	echo '</table>';

    // закрываем соединение с сервером  базы данных
    mysql_close($connect_to_db);
?>    
    

</form>

    <div class="icon">
        <p><a href="#"><i class="fa fa-birthday-cake"></i></a></p>
    </div>
    
    
    
    
</body>
</html>