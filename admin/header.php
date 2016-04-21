<?php
#
# $Id: header.php 13 2010-03-28 22:28:34Z kuzmich $
#
?>
<html>
  <head>
    <title>Журнал посещаемости</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link type="text/css" rel="stylesheet" href="../ui-theme/<?php echo $config['ui']['theme']?>/jquery-ui.css" />
    <link type="text/css" rel="stylesheet" href="../thickbox.css" media="screen" />
    <link type="text/css" rel="stylesheet" href="../style.css" />
	<link type="text/css" rel="stylesheet" href="../css/style.css" />
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.js"></script>
    <script type="text/javascript" src="../js/i18n/jquery-ui.datepicker-ru.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.js"></script>
    <script type="text/javascript" src="../js/i18n/jquery.validate-ru.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="../js/thickbox.js"></script>
	<script type="text/javascript" src="../js/index.js"></script>
  </head>
  <body>
<?php
if (isset($_SESSION['admin_id'])) {
?>
<table background="../images/37.jpg"  width=100% >
<tr>
<td valign="bottom"><p><a href="http://www.kpispu.info"><img src="../images/spu.png" alt="" height="90"></a></p></td>
<td width=20% ></td>
<td><img src="../images/main_text.png" alt="" height="80"></td>
<td width="300px">
<div style="text-align: right;">
  <div style="display: inline-block;"><br><font color="#00008B" face="Century Gothic">
  <strong><i>
  <script language="javascript" type="text/javascript"><!--
var d = new Date();

var day=new Array("Воскресенье","Понедельник","Вторник",
"Среда","Четверг","Пятница","Суббота");

var month=new Array("января","февраля","марта","апреля","мая","июня",
"июля","августа","сентября","октября","ноября","декабря");

document.write(day[d.getDay()]+" " +d.getDate()+ " " + month[d.getMonth()]
+ " " + d.getFullYear() + " г.");
//--></script></i>
</strong></font>
</div></div></td>
</tr>
</table>

<div align="center">

 <div class="container">
	<div class="navbar">
		<ul>
			<li><a href="index.php">Главная<div class="hover">Главная</div></a></li>
			<li><a href="classes.php">Группы<div class="hover">Группы</div></a></li>
			<li><a href="teachers.php">Преподаватели<div class="hover">Преподаватели</div></a></li>
			<li><a href="disciplines.php">Предметы<div class="hover">Предметы</div></a></li>
			<li><a href="users.php">Пользователи<div class="hover">Пользователи</div></a></li>
			<li><a href="curriculum.php">Учебный план<div class="hover">Учебный план</div></a></li>
			<li><a href="services.php">Сервис<div class="hover">Сервис</div></a></li>
			<li><a href="login.php?action=logout">Выход<div class="hover">Выход</div></a></li>			
		</ul>
	</div>
</div>

</div>
<?php
}
?>
