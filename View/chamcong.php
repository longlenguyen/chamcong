<link href="../resource/css.css" rel="stylesheet" type="text/css"/>
<!DOCTYPE html>
<html>
<body>
    <form action="." method="post">
        <table >
            <thead>
                <tr>
                    <td>Mã học viên</td>
                    <td>Tên học viên</td>
                    <td>Chấm công</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    include './model/hocvien.php';
                    $hocvien = get_hocvien();
                    foreach ($hocvien as $value) {
                        echo "<tr>";                    
                            echo "<td>".$value['id']."</td>";
                            echo "<td>".$value['name']."</td>";
                            echo "<td> <input type = 'checkbox' name= 'hocvien[]' value = ".$value['check']."></input> </td>";
                        echo "</tr>";
                    }                        
                ?>
            </tbody>
        </table>
        <input type="submit" value="Save">
        </form>
</body>
</html>