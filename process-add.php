<?php
//Kiểm tra ng dùng lưu trên FORM chưa
	if (isset($_POST['btnSave'])){
//Lấy gt trên FORM luu vào các biến
		$hoten	 = $_POST['txtHoTen'];
		$gioitinh	 = $_POST['txtGioitinh'];
		$tuoi	 = $_POST['txtTuoi'];
		$nhommau	 = $_POST['txtNhommau'];
		$ngaydk= $_POST['txtNgaydk'];
		$sdt = $_POST['txtSdt'];
	}
		//Bước 1: Kết nối tới Server

        $conn=mysqli_connect('localhost','root','','ql_hienmau'); 
		if(!$conn){
			die("Không thể kết nối");
		}

		//Bước 2: Khai báo truy vấn
		$sql = "INSERT INTO blood_donor (bd_name, bd_sex, bd_age, bd_bgroup, bd_reg_date, bd_phno) VALUES ('$hoten','$gioitinh','$tuoi','$nhommau','$ngaydk','$sdt)'";
		if(mysqli_query($conn, $sql)==TRUE){
			echo "Thêm thành công";
		}else{
			echo "Thêm không thành công";
		}
		//buocws3: đóng kết nối
		mysqli_close($conn);
?>