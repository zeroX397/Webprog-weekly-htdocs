<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 8 - Latihan</title>
	<style type="text/css">
		td { border: 1px solid black; }
		th { border: 1px solid black; }
		thead { background-color: lightblue; }
		tbody { background-color: lightyellow; }
		tfoot { background-color: lightgreen; }
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th rowspan="2">NRP</th>
				<th rowspan="2">Nama</th>
				<th colspan="2">Nilai</th>
			</tr>
			<tr>
				<th>UTS</th>
				<th>UAS</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>11111111</td>
				<td>Tong Tong</td>
				<td>90</td>
				<td>80</td>
			</tr>
			<tr>
				<td>22222222</td>
				<td>Ting Ting</td>
				<td>70</td>
				<td>60</td>
			</tr>
		</tbody>

		<tfoot>
			<tr>
				<td colspan="2">Rata-rata</td>
				<td colspan="2">78</td>
			</tr>
		</tfoot>
	</table>
</body>
</html>