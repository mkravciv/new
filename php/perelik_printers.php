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
    echo '<table>';
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