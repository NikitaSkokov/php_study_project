<!-- add.php – добавление записи -->

<?php
$page_title = "Добавление статьи";
require_once '../../../tpl/header.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config.php';
//подготовим поля для дальнейшего автоматического добавления статей через, например, редактор
$title = mysqli_real_escape_string($dbc, trim('Продвигаемый BTL: основные моменты')); 
$content = mysqli_real_escape_string($dbc, trim('Организация службы маркетинга, в рамках сегодняшних воззрений, актаульна как никогда. Дело в том, что фокус-группа специфицирует креативный выставочный стенд. Имидж упорядочивает BTL. Ассортиментная политика предприятия, не меняя концепции, изложенной выше, тормозит нишевый проект, оптимизируя бюджеты. Стратегия предоставления скидок и бонусов порождена временем.
Управление брендом синхронизирует мониторинг активности. Рекламоноситель основан на тщательном анализе данных. Как отмечает Майкл Мескон, презентация инновационна. Маркетингово-ориентированное издание сознательно тормозит потребительский целевой трафик. Можно предположить, что promotion-кампания искажает экспериментальный бренд. Надо сказать, что тактика выстраивания отношений с коммерсчекими агентами традиционно программирует медиаплан.
Стратегический рыночный план концентрирует мониторинг активности. Социальная ответственность искажает ребрендинг. Согласно ставшей уже классической работе Филипа Котлера, повышение жизненных стандартов достижимо в разумные сроки. Поэтому контекстная реклама однообразно создает культурный стиль менеджмента, расширяя долю рынка. Принцип восприятия индуктивно индуцирует рыночный формирование имиджа, повышая конкуренцию. Организация службы маркетинга притягивает конкурент.'));

//проверяем на дублирование
$query = "SELECT * FROM `articles` WHERE `title` = '$title'";
$data = mysqli_query($dbc, $query) or trigger_error(mysql_error().$query);
if (mysqli_num_rows($data) > 0) {
	echo '<p>Вы уже добавляли статью с таким заголовком.</p>';
	exit();
}

if ('' !== $title && '' !== $content) {
	$query = "INSERT INTO `articles` (`title`, `content`) VALUES ('$title', '$content')";
	mysqli_query($dbc, $query) or trigger_error(mysql_error().$query);
	echo '<p>Статья успешно добавлена</p>';	
} else {
	echo '<p>Вы не заполнили поля заголовка и/или контента.</p>';
}

mysqli_close($dbc);
require_once 'tpl/footer.php';
?>