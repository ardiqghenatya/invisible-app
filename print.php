    <?php  
    include('../config/config.php');   
     $data = mysql_query("select * from user");  
    ?>  
    <html>  
    <head>  
     <title>Print Document</title>  
        <link href="style.css" type="text/css" rel="stylesheet" />  
    </head>  
    <body>  
     <table border="1" width="90%" style="border-collapse:collapse;" align="center">  
         <tr class="tableheader">  
             <th rowspan="1">ID</th>  
                <th>username</th>  
                <th>password</th>  
            </tr>  
            <?php while($hasil = mysql_fetch_array($data)){ ?>  
            <tr id="rowHover">  
             <td width="10%" align="center"><?php echo $hasil['id']; ?></td>  
                <td width="25%" id="column_padding"><?php echo $hasil['username']; ?></td>  
                <td width="10%" id="column_padding"><?php echo $hasil['password']; ?></td>  
            </tr>  
            <?php } ?>  
        </table>  
        <script>  
      window.load = print_d();  
      function print_d(){  
       window.print();  
      }  
     </script>  
    </body>  
    </html>  <span style="font-family: Times New Roman;"><span style="white-space: normal;">  
    </span></span>  