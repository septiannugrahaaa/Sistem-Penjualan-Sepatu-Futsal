<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM daftar_penjualan");
foreach ($mysqli as $data)
?>

<html>
<head>    
    <title>Daftar Penjualan</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>


<br/><br/>

    <h2 align="center">Daftar Penjualan
    <br></br>----------------------------------------------</h2>


    <table align="center" width='60%' border=1>

    <tr>
        <th>Nama Penjual</th><th>Nama Sepatu</th> <th>Merk</th><th>Harga<th>Alamat Penjual</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['nama_penjual']."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['merk']."</td>"; 
        echo "<td>".$data['harga']."</td>";   
        echo "<td>".$data['alamat']."</td>";        
    }
    ?>
    </table>
    <body2>
        <form align="center">
        <br></br>
        <button><a href='homepage.php?'>Kembali</a></button>
        </form>
    </body2>
</body>
</html>