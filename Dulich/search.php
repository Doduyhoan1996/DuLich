<!DOCTYPE html>
<html>
<head>
    <title>.:Kết quả:.</title>
    <link rel="stylesheet" type="text/css" href="CSS/trangchu.css">
    <link rel="stylesheet" type="text/css" href="CSS/form.css">
    <link rel="stylesheet" type="text/css" href="CSS/bottom.css">
    <link rel="stylesheet" type="text/css" href="CSS/trogiup.css">
</head>
<body>
<?php

    include ("trogiup.php");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dulich";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $search = $_GET['timkiem'];
    $query = "select  * from baiviet where title like '%$search%' OR address like '%$search%' OR subcontent like '%$search%' OR content like '%$search%'";
    $sql ="SELECT COUNT( *) AS sum  from baiviet where title like '%$search%' OR address like '%$search%' OR subcontent like '%$search%' OR content like '%$search%' ";
    $textb = mysqli_query($conn,$sql);
    $rowb = mysqli_fetch_array($textb);
    $sum = $rowb['sum'];
    $each = 5;
    if (!isset($_GET['page'])|| $_GET['page']="")
    {
        $_GET['page']=1;
    }
    if($_GET['page']==1)
    {
        $begin = $_GET['page']-1;
    }
    else
    {
        $begin = ($_GET['page']*$each)-$each;
    }
    $spage = ceil($sum / $each);
    // Thực thi câu truy vấn
    $sql = mysqli_query($conn, $query);

    // Đếm số đong trả về trong sql.
    $num = mysqli_num_rows($sql);

    // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
    if ($num > 0 && $search != "")
    {
?>
    <table id="bang">
<?php
        $text = mysqli_query($conn, "SELECT * FROM baiviet WHERE title like '%".$search."%' LIMIT $begin, $each");
        while ($row = mysqli_fetch_array($text))
        {
            $idp = $row['ID'];
    ?>
    <tr>
        <td>
            
            <div id="title">
                <a href="view.php?id=<?php echo $idp;?>"><?php echo $row['title'];?></a>
            </div>
            <div id="address">
                <a href="view.php?id=<?php echo $idp;?>"><?php echo $row['address'];?></a>
            </div>
            <div id="content">
                <div id="left">
                    <a href="view.php?id=<?php echo $idp;?>"> <img src="<?php echo $row['pic']; ?>"></a>
                </div>
                <div id="right">
                    <p><a href="view.php?id=<?php echo $idp;?>"><?php echo $row['subcontent'];?></a></p>
                </div>
            </div>              
        </td>
    </tr>   
<?php
        }
?>
</table>

    <div id="phantrang">
        <?php 
        if ($spage >1)
            {
        ?>
                 <a href="search.php?page=1&timkiem=<?php echo $search;?>"> << </a>
        <?php
            if ($_GET['page']==1)
                {
        ?>
                    <a href="search.php?page=1&timkiem=<?php echo $search;?>"> < </a>
        <?php
                }
            else
                {
        ?>
                    <a href="search.php?page=<?php echo $_GET['page']-1;?>&timkiem=<?php echo $search;?>"> < </a>
        <?php
                }
             for ($i=1;$i<=$spage;$i++)
                {
         ?> 
                    <span> | <a href="search.php?page=<?php echo $i;?>&timkiem=<?php echo $search;?>"><?php echo $i;?></a> | </span>
         <?php
                } 
         ?>
                     <a href="search.php?page=<?php echo $_GET['page']+1;?>&timkiem=<?php echo $search;?>"> > </a>
                     <a href="search.php?page=<?php echo $spage;?>&timkiem=<?php echo $search;?>"> >> </a>
        <?php
            }
        else
            {
        ?>
                <a href="search.php?page=1&timkiem=<?php echo $search;?>">1</a>
        <?php
            }
        ?>
    </div>

<?php
}
else {
echo "Khong tim thay ket qua!";
}
include ("bottom.php");

?>

</body>
</html>