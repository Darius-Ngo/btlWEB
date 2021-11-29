
<?php 
    require('Classes/PHPExcel.php');
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=CurrentAccount.xls");
?>
 <br>
 <h3 style="margin-left: 400px;">Danh sách tài khoản hiện hành</h3>
 <table border='1'>
 <?php 
        $conn = mysqli_connect("localhost", "root", "","EatFood");
        if($conn) {
            $query = "SELECT * FROM account";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {   
                echo "<th>ID</th><th>Người sử dụng</th><th>SĐT</th><th>Mật khẩu</th><th>Câu hỏi bảo mật</th><th>Câu trả lời</th><th>Ảnh</th><th>Nghiệp vụ</th><th>Ngày tạo</th>";
                echo "</thead>";

                while($row = mysqli_fetch_assoc($result)) {
                    $showCH = "";
                    switch($row["CauHoi"]) {
                        case "cau1":
                            $showCH = 'Bạn có người yêu chưa?';
                            break;
                        case "cau2":
                            $showCH = 'Bạn học ngành gì?';
                            break;
                        case "cau3":
                            $showCH = 'Bạn thích đi du lịch không?';
                            break;
                        case "cau4":
                            $showCH = 'Bạn thường làm gì lúc rảnh?';
                            break;
                    }
                    echo "<tr class = 'Tag-tr'>";
                    echo "<td class = 'Tag-td'>". $row["id"] . "</td>";
                    echo "<td class = 'Tag-td'>". $row["userName"] . "</td>";
                    echo "<td class = 'Tag-td'>'". $row["SDT"] . "</td>";
                    echo "<td class = 'Tag-td'>". $row["passWord"] . "</td>";
                    echo "<td class = 'Tag-td'>". $showCH . "</td>";
                    echo "<td class = 'Tag-td'>". $row["TraLoi"] . "</td>";
                    echo "<td class = 'Tag-td'>". $row["image"] . "</td>";
                    echo "<td class = 'Tag-td'>". $row["Job"] . "</td>";
                    echo "<td class = 'Tag-td'>". $row["NgayTao"] . "</td>";
                    echo "</tr>";
                }
            }
        }
    ?>
</table>