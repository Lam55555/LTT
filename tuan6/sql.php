<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../tuan6/hp.css">
</head>
<body>
<?php
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"qlysv");
    mysqli_set_charset($conn,"utf8");
    $sql = "select * from sinhvien order by masv";
    $kq = mysqli_query($conn, $sql);
    ?>
    <?php 
    if(mysqli_num_rows($kq)<>0)
    {
        echo"<table width='500' height ='25' border='0'>
        <tr>
        <td align='center'><h2><b>Danh sách sinh viên</b></h2></td>
        </tr>
        </table>
        <table width='500' height='79' border='1'>
        <tr>
        <td width='44' height='23' align='center'>STT</td>
        <td width='112' align='center'>Mã sính viên</td>
        <td width='238' align='center'>Tên sinh viên</td>
        <td width='78' align='center'>Phái</td>
        </tr>";
        $stt=1;
        while($row=mysqli_fetch_row($kq))
        {
            echo"
            <tr>
            <td height='23' align='center'>".$stt."</td>
            <td align='center'>".$row[0]."</td>";
            echo"<td align='center'>".$row[1]."</td>"; 
            if($row[2]==1){
                echo "<td align='center'>Nam</td>";
                
            }
            else {echo "<td align='center'>Nữ</td>";}
            $stt++;
        }
    }
        echo"</table>
        <table border='0' width='500'>
        <tr><td align='right'>Tổng số sinh viên:".mysqli_num_rows($kq)."</td></tr>
        </table>
        ";

 
    ?>
</body>
</html>