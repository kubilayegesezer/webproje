<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BİLGİ SİSTEMİ</title>
    <style>
         body{
      background-color: #fffdd0;
    }
    table, th, td {
        border:1px solid black;
       }
       table {
        width: 100%;
        border-collapse: collapse;
       }
       th, td {
        padding: 15px;
        text-align: left;
       }
       tr:hover{
        background-color: #f5f5f5;
       }
       
    
       
    
    </style>
</head>

<body>
    <?php 
    include 'navbar.php';

    ?>
    <div style='margin-left:200px'>
    <h1 style='color:black'>  DEVAMSIZLIK DURUMU</h1>
    <table>
        <tr>
            <th>Ders Adı</th>
            <th>Kredi</th>
            <th>Devamsızlık</th>
           
        </tr>
        <tr>
            <td>Web Programlama</td>
            <td>3</td>
            <td>2</td>
            
        </tr>
        <tr>
            <td>Yapay Zeka</td>
            <td>	3</td>
            <td>4</td>
            
        </tr>
        <tr>
            <td>Bilgisayar Ağları</td>
            <td>	3</td>
            <td>5</td>
            
        </tr>
        <tr>
            <td>İşletim Sistemleri</td>
            <td>2</td>
            <td>1</td>
            
        </tr>
        <tr>
            <td>Mikrobilgisayar</td>
            <td>2</td>
            <td>0</td>
            
        </tr>



    </table>
    </div>
</body>
</html>