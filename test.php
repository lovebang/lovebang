<html>
	<body>
	<?php
		$link = mysql_connect('localhost', 'root', '123456');
		mysql_select_db('opentutorials');
		$result = mysql_query('SELECT title FROM topic');
		echo mysql_result($result, 2);
	?>
	</body>
</html>
