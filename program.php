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
    <h1 style='color:black'> ÖĞRENCİ DERS PROGRAMI</h1>

    <table>
        <tr>
            <th>Pazartesi</th>
            <th>Salı</th>
            <th>Çarşamba</th>
            <th>Perşembe</th>
            <th>Cuma</th>
        </tr>
        <tr>
            <td>Web Programlama</td>
            <td>Yapay Zeka</td>
            <td>Bilgisayar Ağları</td>
            <td>İşletim Sistemleri</td>
            <td>Mikrobilgisayar</td>
        </tr>
        <tr>
            <td>Web Programlama</td>
            <td>Yapay Zeka</td>
            <td>Bilgisayar Ağları</td>
            <td>İşletim Sistemleri</td>
            <td>Mikrobilgisayar</td>
        </tr>
        <tr>
            <td>Web Programlama</td>
            <td>Yapay Zeka</td>
            <td>Bilgisayar Ağları</td>
            <td>İşletim Sistemleri</td>
            <td>Mikrobilgisayar</td>
        </tr>



    </table>



    </div>
</body>
</html>