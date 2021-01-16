
<meta charset="utf-8"> 
<?php
$urok="ORDER LETTER";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['foot-textarea']))			{$foot-textarea			= $_POST['foot-textarea'];		if ($foot-textarea == '')	{unset($foot-textarea);}}
if (isset($_POST['email']))		{$email		= $_POST['email'];		if ($email == '')	{unset($email);}}
if (isset($_POST['foot-textarea']))			{$foot-textarea			= $_POST['foot-textarea'];		if ($foot-textarea == '')	{unset($foot-textarea);}}
if (isset($_POST['sab']))			{$sab			= $_POST['sab'];		if ($sab == '')		{unset($sab);}}
//стирание треугольных скобок из полей формы
/* комментарий */
if (isset($foot-textarea) ) {
$foot-textarea=stripslashes($foot-textarea);
$foot-textarea=htmlspecialchars($foot-textarea);
}
if (isset($email) ) {
$email=stripslashes($email);
$email=htmlspecialchars($email);
}
if (isset($foot-textarea) ) {
$foot-textarea=stripslashes($foot-textarea);
$foot-textarea=htmlspecialchars($foot-textarea);
}
// адрес почты куда придет письмо
$address="rustamgaraevuk@gmail.com";
// текст письма 
$note_foot-textarea="Theme : $urok \r\nName : $foot-textarea \r\n Email : $email \r\n Additional Information : $foot-textarea";

if (isset($foot-textarea)  &&  isset ($sab) ) {
mail($address,$urok,$note_foot-textarea,"Content-type:foot-textarea/plain; windows-1251"); 
// сообщение после отправки формы
    
echo "<p style='color:green;'>Dear <b style='color:red;'>$foot-textarea</b> Your email has been sent successfully <br> Thank you <br>Your mail will be answered soon <b style='color:red;'> $email</b>.</p>";
}

?>
