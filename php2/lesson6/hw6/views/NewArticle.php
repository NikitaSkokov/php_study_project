<form action="../Articles/added" method="post">
		<label for="title">Заголовок:</label>
		<input type="text" id="title" name="title" value="<?php if(!empty($title)) echo $title; ?>" style="resize: horizontal; width: 200px;"><br>

		<label for="content">Текст статьи:</label>
		<textarea id="content" name="content" cols="100" rows="20" value="<?php if(!empty($content)) echo $content; ?>"></textarea><br><br>

		<input type="submit" name="submit" id="submit" value="Опубликовать">
</form>