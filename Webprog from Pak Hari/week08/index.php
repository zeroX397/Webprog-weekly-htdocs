<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 8 - Table</title>
	<style type="text/css">
		table {
			border: 1px solid black;
		}
		td {
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<p>Tabel 4 Row 3 Column</p>

	<table>
		<tr>
			<td>Row 1 Col 1</td>
			<td colspan="2">Row 1 Col 2</td>
			
		</tr>
		<tr>
			<td>Row 2 Col 1</td>
			<td>Row 2 Col 2</td>
			<td>Row 2 Col 3</td>
		</tr>
		<tr>
			<td rowspan="2">Row 3 Col 1</td>
			<td>Row 3 Col 2</td>
			<td>Row 3 Col 3</td>
		</tr>
		<tr>
			
			<td>Row 4 Col 2</td>
			<td>Row 4 Col 3</td>
		</tr>
	</table>
</body>
</html>