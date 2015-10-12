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
					<th>Username</th>
					<th>Password</th>
				</tr>
			</thead>
			<tbody>
			<?php
				include "../config/config.php";
				$sql = "SELECT id, password, username FROM user";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) 
					while($row = $result->fetch_assoc()) { ?>
					<tr>
						<td><?php echo $row["id"]; ?></td>
						<td><?php echo $row["username"]; ?></td>
						<td><?php echo $row["password"]; ?></td>
					</tr>
			<?php 
				$no++;
				} 
			?>
			</tbody>
		</table>
	</body>
</html>