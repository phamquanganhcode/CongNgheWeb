<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHT Chương 2 - PHP Căn Bản</title>
</head>

<body>
    <h1>Kết quả PHP Căn Bản</h1>
    <?php
    //todo 1: Khai bao bien
    $ho_ten = "Nguyễn Văn A";
    $diem_tb = 7.5;
    $diem_toan = "10";
    $co_di_hoc_chuyen_can = true;
    
    //todo 2: in ra thong tin sinh vien
    echo 'Họ tên: '.$ho_ten. '<br>';
    echo 'Điểm: ' .$diem_tb. '<br>';
    echo 'Điểm tổng: ' .$diem_tb + $diem_toan. '<br>';
    //todo 3: viet cau truc if/else (2.2)
    echo 'Xếp loại: ';
    if($diem_tb >= 8.5 && $co_di_hoc_chuyen_can == true){
        echo 'Giỏi';
    }elseif($diem_tb >= 6.5 && $co_di_hoc_chuyen_can == true){
        echo 'Khá';
    }elseif($diem_tb >= 5.0 && $co_di_hoc_chuyen_can == true){
        echo 'Trung bình';
    }else{
        echo "Yếu";
    }
    function ChaoMung(){
        echo 'Chúc mừng bạn đã hoàn thành PHT chương 2!';
    }
    echo '<br>';
    ChaoMung();
    
    ?>

</body>

</html>