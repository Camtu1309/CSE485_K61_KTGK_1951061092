<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Hệ thống Quản lý ngân hàng máu</title>
</head>
<body>
    <div class ="container-fluid">
        <div class = "row nav-menu">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="#">Trang chủ</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Quản lí hiến máu</a>

                        </li>
                        <li>
                        <button class="btn btn-success">Log out</button>
   
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
            </div>
        </div>

            <div class="col">
                
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">STT</th>
                      <th scope="col">Họ và tên</th>
                      <th scope="col">Giới tính </th>
                      <th scope="col">Tuổi</th>
                      <th scope="col">Nhóm máu </th>
                      <th scope="col">Ngày đăng kí hiến máu </th>
                      <th scope="col">Số điện thoại</th>
                      <th scope="col">Thêm</th>
                      <th scope="col">Sửa</th>
                      <th scope="col">Xóa</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php

                    #Lấy dữ liệu từ CSDL và đổ ra bảng(phần lặp lại)
                    #B1 kết nối với CSDL
                    $conn=mysqli_connect('localhost','root','','ql_hienmau');            
                    mysqli_set_charset($conn,"utf8");//Định dang font chữ 
                    if(!$conn){
                        die("Không thể kết nối, kiểm tra lại các tham số kết nối");
                    }
                    #Bước 2: Khai báo câu lệnh thực thi và thực hiện truy vấn
                    $sql = "SELECT * from blood_donor";
                    $result = mysqli_query($conn,$sql);
                    #Bước 3: Xử lí kết quả trả về
                    if(mysqli_num_rows($result)>0){
                        $i=1;
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                            <tr>
                              <th scope="row"><?php echo $i; ?></th>
                              <td><?php echo $row['bd_name']; ?></td>
                              <td><?php echo $row['bd_sex']; ?></td>
                              <td><?php echo $row['bd_age']; ?></td>
                              <td><?php echo $row['bd_bgroup']; ?></td>
                              <td><?php echo $row['bd_reg_date)']; ?></td>
                              <td><?php echo $row['bd_phno)']; ?></td>
                              <td><a href="add.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="fas fa-plus"></i> </a></td>
                              <td><a href="update.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="fas fa-edit"></i> </a></td>
                              <td><a href="delete.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="fas fa-trash"></i> </a></td>
                            </tr>
                    <?php
                            
                        $i++;
                        }
                       }

                    ?>
                    
                  </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="footer">
            <div class="wrapper">
                <p class="text-center">2021 All coppy rights . Developed By - <a href="#">Cẩm Tú</a></p>
            </div>
        </div>
</body>
</html>