<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BİLGİ SİSTEMİ</title>
    <style>
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
       body{
      background-color: #fffdd0;
    }
       
    
    </style>
</head>

<body>
    <?php 
    include 'navbar.php';

    ?>
    <div style='margin-left:200px'>
    <h1 style='color:black'>  SINAV NOTLARI</h1>
    <table>
        <tr>
            <th>Ders Adı</th>
            <th>Sınav Notları</th>
            <th>Durumu</th>
        </tr>
        <tr>
            <td>Web Programlama</td>
            <td>Vize:100 Final:100</td>
            <td>Geçti</td>
            
        </tr>
        <tr>
            <td>Yapay Zeka</td>
            <td>Vize:90   Final:80</td>
            <td>Geçti</td>
            
        </tr>
        <tr>
            <td>Bilgisayar Ağları</td>
            <td>Vize:85    Final:80</td>
            <td>Geçti</td>
            
        </tr>
        <tr>
            <td>İşletim Sistemleri</td>
            <td>Vize:95    Final:100</td>
            <td>Geçti</td>
            
        </tr>
        <tr>
            <td>Mikrobilgisayar</td>
            <td>Vize:80    Final:70</td>
            <td>Geçti</td>
            
        </tr>



    </table>
    





    </div>
</body>
</html>