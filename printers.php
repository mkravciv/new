<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Журнал заправки принтерів</title>
   <link href="css/main_style.css" type="text/css" rel="stylesheet"> 
   <script  src='js/jquery-2.1.3.min.js' type="text/javascript"></script>
</head>
<body>
    <div id='mainmenu'>
        <?php
            include 'menu.php';
        ?>
    </div>

     
      
      
    <div id="line1"> </div>     
        
    <div id="table1">    
        <form action="../html.loc/php/formdata_zapravka.php" method="POST" name="form1">
        <table width=1050px>
            <tr>
                <th>Дата заправки</th>
                <th>Розташування принтера</th>
                <th>Модель принтера</th>
                <th>Які роботи проведено</th>
                <th>Використані матеріали</th>
                <th>Хто заправляв</th>
            </tr>
            
            <tr id="rows">
                <td><input type="text" name="date" id="date" tabindex="1">

                    <script  type="text/javascript">
                        var now = new Date();
                         document.getElementById('date').value = now.toISOString().substr(0,10);
                    </script>
                </td>
                <td>
                    <select name = "kabinet" id="kabinet" tabindex="2"> 
                    <option></option>
                    <option>Реєстратура №1</option>
                    <option>Реєстратура №2</option>
                    <option>100 кабінет</option>
                    <option>101 кабінет</option>
                    <option>120 кабінет</option>
                    <option>122 кабінет</option>
                    <option>224 кабінет</option>
                    <option>325 кабінет</option>
                    <option>414 кабінет</option>
                    <option>514 кабінет</option>
                    <option>614 кабінет</option>
                    <option>Склад</option>
                    <option>8 поверх</option>
                </td>
                <td>
                    <select id="model_printer" name="model_printer" tabindex="3"> 
                    <option></option>
                    <option>Konica Minolta BizHub 163</option>
                    <option>Xerox Work Centr 3220</option>
                </td>
                <td><input type="text" name="work" tabindex="4"></td>
                <td><input type="text" name="materialy" tabindex="5"></td>
                <td>
                    <select id="name_prac" name = "name_prac" tabindex="6"> 
                    <option></option>
                    <option>Кравців М.М.</option>
                    <option>Хом'як А.Л.</option>
                </td>
            </tr>
        </table>
           
   
   
        <a href="javascript: document.form1.submit()"><div class="knopka"> ВНЕСТИ ДАНІ </div></a>
        <a type="sub"><div class="knopka1">ОНОВИТИ</div></a>
    
   </form>  
 

 <?php
include 'php/zapravka_table.php';
?>    
        
</div>    
    
<div ><p id="line2">   </p></div>
    


</body>
</html>