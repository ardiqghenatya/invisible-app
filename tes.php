<html>
	<head>
		<title>Laporan</title>
		<style>
			table,tr,th,td {
				border-collapse: collapse;
				border: 1px solid #3F3D3D;
			}
			th {
				background-color: #7C7979;
			}
		</style>
	</head>
	<body>
		<h1>Membuat Laporan Dengan FPDF</h1>
		<a href="cetak.php" target="_blank"><button>Cetak</button></a>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>username</th>
					<th>password</th>
				</tr>
			</thead>
			<tbody>
			<?php
				include "../config/config.php";
				$sql = mysql_query("select * from user",$conn);
				//$no = 1;
				while($data = mysql_fetch_array($sql)){ ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $data['id']; ?></td>
						<td><?php echo $data['id']; ?></td>
						<td><?php echo $data['username']; ?></td>
						<td><?php echo $data[4]; ?></td>
						<td><?php echo $data[5]; ?></td>
					</tr>
			<?php 
				$no++;
				} 
			?>
			</tbody>
		</table>
	</body>
</html>