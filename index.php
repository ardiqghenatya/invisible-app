//<?php
//include('cek-login.php');
//?>
<!DOCTYPE html>
<html>
<head>
        <title>Invisible Store - App</title>
        <link rel="stylesheet" href="content/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="content/angular/angular-material.min.css">
        <script src="content/angular/angular.min.js"></script>
        <script src="content/angular/angular-animate.min.js"></script>
        <script src="content/angular/angular-aria.min.js"></script>
        <script src="content/angular/angular-material.min.js"></script>
        <script src="content/jquery/jquery-1.11.3.min.js"></script>
        <script src="content/angular/module.js"></script>
</head>
<body ng-app="arcApp">
<div ng-controller="arcCtrl">
  <md-content class="md-padding">
    <md-tabs md-dynamic-height md-border-bottom>
      <md-tab label="Penjualan">
        <md-content class="md-padding">
          <h1 class="md-display-2">Penjualan</h1>
		  <p>TO DO</p>
        </md-content>
      </md-tab>
      <md-tab label="pembelian">
        <md-content class="md-padding">
          <h1 class="md-display-2">pembelian</h1>
          <p>TO DO</p>
		</md-content>
      </md-tab>
      <md-tab label="Log">
        <md-content class="md-padding">
          <h1 class="md-display-2">log</h1>
          <p>TO DO</p>
		</md-content>
      </md-tab>
    </md-tabs>
  </md-content>
</tbody>
</table>
<div class="container">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>No.</th>
        <th>Kode</th>
        <th>Harga</th>
        <th>Quantity</th>
      </tr>
    </thead>
	<tbody>
	  <tr ng-repeat="item in arcTableBarang.result">
		<td>{{ $index + 1 }}</td>
		<td>{{ item.Kode }}</td>
		<td>{{ item.Harga }}</td>
		<td>{{ item.Qty }}</td>
	  </tr>
    </tbody>
  </table>
</div>
</div>
</body>
</html>

