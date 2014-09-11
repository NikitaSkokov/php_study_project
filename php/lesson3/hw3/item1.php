<p>1. С помощью цикла while выведите все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.</p>

<?php 
header('Content-Type: text/html; charset=utf-8');
	
	$i = 0;
	while ($i <= 100) {
		if ($i % 3 != 0) {
			$i++;
			continue;
		}
		echo $i . ' ';
		$i++;
	}

 ?>

<p>2. С помощью цикла do...while напишите функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:</p>
<ul>
	<li>0 – это ноль</li>
	<li>1 – нечетное число</li>
	<li>2 – четное число</li>
	<li>3 – нечетное число ...</li>
	<li>10 – четное число</li>
</ul>

<?php 
	
	$i = 0;
	do {
		if ($i == 0) {
			echo "$i - это ноль.<br>";
		}
		elseif ($i % 2 == 0) {
			echo "$i - это четное число.<br>";	
		}
		else {
			echo "$i - это нечетное число.<br>";		
		}
		$i++;
	} while ($i <= 10);

 ?>

<p>3. Задание со звездочкой. Выведите с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. То есть выглядеть должно вот так:
for(...){// здесь пусто}</p>

<?php  

	for( $i=0; $i++<9 and print($i . ' '); ) {

	}

?>

<p>4. Объявите массив, где в качестве ключей будут использоваться названия областей, а в качестве значений
 – массивы с названиями городов из соответствующей области. Выведите в цикле значения массива, чтобы результат был таким:</p>
<p>Московская область: Москва, Зеленоград, Клин </p>
<p>Ленинградская область: Санкт-Петербург, Всеволожск, Павловск, Кронштадт</p>

<?php 

	$regions = array(
		'Московская область' => array('Москва', 'Зеленоград', 'Клин'),
		'Ленинградская область' => array('Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'),
		'Рязанская область' => array('Касимов', 'Рязань', 'Сасово', 'Скопин'),
		'Новосибирская область' => array('Новосибирск', 'Бердск', 'Обь', 'Кольцово'),
		);
	foreach ($regions as $region => $cities) {
		echo $region . ': ';
			foreach ($cities as $city) {
				echo $city . ', ';
			}
		echo '<br>';
	}

 ?>

<p>5. Задание со звездочкой. Повторите предыдущее задание, но выводите на экран только города, начинающиеся с буквы «К».</p>

<?php 

	foreach ($regions as $region => $cities) {
		echo $region . ': ';
			foreach ($cities as $city) {
				if (substr($city, 0, 2) == 'К') {
					echo $city . ' ';	
				}
				// var_dump($city);
			}
		echo '<br>';
	}

 ?>

<p>6. Объявите массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания 
(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, ..., ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).</p>
<p>Напишите функцию транслитерации строк.</p>

<?php
  function translit($str) {
    $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
    return str_replace($rus, $lat, $str);
  }
  echo translit("Всем привет!");
?>


<p>7. Напишите функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.</p>

<?php 
	// Альтернативным вариантом из стандартной библиотеки будет $str = str_replace(' ', '_', $str);
	function spaceToUnderline ($str) {
		for ($i=0; $i < strlen($str); $i++) { 
			if ($str[$i] == ' ') {
				$str[$i] = '_';
			}
		}
		return $str;
	}

	echo spaceToUnderline("Hello World!");

 ?>



<p>8. Объедините две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену 
пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).</p>

<?php 

	function superFunction($str) {
		$str = translit($str);
		$str = spaceToUnderline($str);
		return $str;
	}

	echo superFunction("Вот это дааа!");

 ?>

