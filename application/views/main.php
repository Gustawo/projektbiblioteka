<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Strona glówna - Biblioteka online</title>
</head>
<body>
  <h1>Witamy w systemie biblioteki elektronicznej</h1>

<p> Szukaj książek </p>
<?php 
	echo form_open('projektbiblioteka/main/find');
	echo form_input('imie', '', 'placeholder="Imie autora"');
	echo form_input('nazwisko', '', 'placeholder="Nazwisko autora"');
	echo form_input('tytul', '', 'placeholder="Tytul książki"');
	echo form_submit('submit', 'Szukaj');
	echo form_close();
 ?>

 <?php 
 	if(isset($book)){
 		echo "<p>Znaleziono ".count($book)." pozycje:</p>";
 		foreach($book as $element){
 			echo $element;
 		}
 	}
  ?>
</body>
</html>

