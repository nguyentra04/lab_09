<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin sinh viên chi tiết</title>
</head>
<body>
    <section class="container my-3">
        <form action="" method="post">
            <div class="card">
                <div class="card-header">
                    <h1>Thông tin sinh viên chi tiết</h1>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td>Mã sinh viên:</td>
                            <td>{{ $nhtSinhvien->nhtmasv }}</td>
                        </tr>
                        <tr>
                            <td>Họ sinh viên:</td>
                            <td>{{ $nhtSinhvien->nhthosv }}</td>
                        </tr>
                        <tr>
                            <td>Tên sinh viên:</td>
                            <td>{{ $nhtSinhvien->nhttensv }}</td>
                        </tr>
                        <tr>
                            <td>Ngày sinh:</td>
                            <td>{{ $nhtSinhvien->nhtngaysinh }}</td>
                        </tr>
                        <tr>
                            <td>Giới tính:</td>
                            <td>{{ $nhtSinhvien->nhtgioitinh }}</td>
                        </tr>
                        <tr>
                            <td>Nơi sinh:</td>
                            <td>{{ $nhtSinhvien->nhtnoisinh }}</td>
                        </tr>
                        <tr>
                            <td>Mã khoa:</td>
                            <td>{{ $nhtSinhvien->nhtmakh }}</td>
                        </tr>
                        <tr>
                            <td>Học bổng:</td>
                            <td>{{ $nhtSinhvien->nhthocbong }}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="/nht-sinhvien">Quay lại danh sách</a>
                    <button class="btn btn-primary">sửa</button>
                    <button class="btn btn-secondary">xóa</button>
                </div>
            </div>
        </form>
    </section> 
</body>
</html>