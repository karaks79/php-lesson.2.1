<?php

	// file_get_contents(__DIR__ . '/phonebook.json') - ищем файл в текущей директории
	$json = file_get_contents(__DIR__ . '/phonebook.json');

	$phonebook = json_decode($json, true);

	// echo '<br>';
	// echo '<pre>';
	// print_r($phonebook);
	// echo '</pre>';
?>	

	<html>
	<head>
		<title>Заголовок</title>
	</head>
	<body>
		<table>
			<tr>
				<td>Имя</td>
				<td>Фамилия</td>
				<td>Адрес</td>
				<td>Телефон</td>
			</tr>
			<?php foreach ($phonebook as $items) { ?>
			<tr>
				<td><?php echo $items['firstName']; ?></td>
				<td><?php echo $items['lastName']; ?></td>
				<td><?php echo $items['address']; ?></td>
				<td><?php echo $items['phoneNumber']; ?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
	</html>
	

