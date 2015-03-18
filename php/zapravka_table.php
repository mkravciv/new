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

$db_table_to_show = 'gurnal_zapravky';
   

 // выбираем все значения из таблицы "Contacts"
    $qr_result = mysql_query("select * from  . $db_table_to_show order by date DESC")
		or die(mysql_error());

    // выводим на страницу сайта заголовки HTML-таблицы
    echo '<table width=1050px>';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Дата заправки</th>';
	echo '<th>Розташування принтера</th>';
	echo '<th>Модель принтера</th>';
    echo '<th>Виконані роботи</th>';
    echo '<th>Використані матеріали</th>';
    echo '<th>Виконавець</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	
   // выводим в HTML-таблицу все данные клиентов из таблицы MySQL 
	while($data = mysql_fetch_array($qr_result)){ 
		echo '<tr>';
		echo '<td>' . $data['date'] . '</td>';
		echo '<td>' . $data['kabinet'] . '</td>';
		echo '<td>' . $data['model_printer'] . '</td>';
        echo '<td>' . $data['work'] . '</td>';
        echo '<td>' . $data['materialy'] . '</td>';
        echo '<td>' . $data['name_prac'] . '</td>';
		echo '</tr>';
	}
	
    echo '</tbody>';
	echo '</table>';

    // закрываем соединение с сервером  базы данных
    mysql_close($connect_to_db);
?>    