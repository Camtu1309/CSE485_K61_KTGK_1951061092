<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Thêm người hiến</title>
</head>
<body>

	<main class = "mt-4">
		<div class="container">
			<div class="row">
				<div calss = "col-md-12">
					<h1>Thêm người hiến máu</h1>

					
					<form action="process-add.php" method="post">

						<br></br>
						<button type="submit" class="btn btn-primary" name="btnSave">Lưu</button>
						<br></br>

					  <div class="row mb-3">
					    <label for="txtHoTen" class="col-sm-2 col-form-label">Họ và tên</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txtHoTen" name="txtHoTen">
					    </div>
					  </div>

					  <div class="row mb-3">
					    <label for="txtChucVu" class="col-sm-2 col-form-label">Giới tính</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txtGioitinh" name="txtGioitinh">
					    </div>
					  </div>
					  
                      <div class="row mb-3">
					    <label for="txtEmail" class="col-sm-2 col-form-label">Tuổi</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txtTuoi" name="txtTuoi">
					    </div>
                        <br>
                        <div class="row mb-3">
					    <label for="txtEmail" class="col-sm-2 col-form-label">Nhóm máu</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txtNhommau" name="txtNhommau">
					    </div>

                        <div class="row mb-3">
					    <label for="txtEmail" class="col-sm-2 col-form-label">Ngày đăng kí</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txtNgaydk" name="txtNgaydk">
					    </div>

					  <div class="row mb-3">
					    <label for="txtMayBan" class="col-sm-2 col-form-label">Số điện thoại</label>
					    <div class="col-sm-10">
					      <input type="tel" class="form-control" id="txtSdt" name="txtSdt">
					    </div>
					  </div>
					 


					</form>
				</div>
			</div>
		</div>
	</main>
	<footer>
</footer>
</body>
</html>