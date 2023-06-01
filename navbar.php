<head>
    <link rel="stylesheet" href="assets/style.css">
</head>
<style> 
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
}
.container .sidebar{
    position: fixed;
    width: 200px;
    height: 100%;
    background: blue;
    padding: 30px 0;
}
.container .sidebar h2{
    color: #fff;
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 30px;
    cursor: pointer;
    transition: .5s;

}
.container .sidebar h2 span{
    color: yellow;

}
.container .sidebar h2:hover{
    color: yellow;
}
.container .sidebar ul li a {
    color: #fff;
}
.container .sidebar ul li {
    padding: 15px;
    border-bottom: 1px solid black;
    transition: .5s;
}
.container .sidebar ul li:hover{
    background: black;

}



</style>

<div class="container">
        <div class="sidebar">
        <h2><span>BİLGİ</span>SİSTEMİ</h2>
        <ul>
            <li>
                <a href="anasayfa.php">ANA SAYFA</a>
            </li>
            <li>
                <a href="program.php">DERS PROGRAMI</a>
            </li>
            <li>
                <a href="notlarım.php">SINAV NOTLARI</a>
            </li>
            <li>
                <a href="devamsızlık.php">DEVAMSIZLIK</a>
            </li>
            
        
        </ul>

    
    
    </div>
</div>