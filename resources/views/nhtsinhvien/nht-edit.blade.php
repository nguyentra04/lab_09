<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>sửa thông tin sinh viên </title>
</head>
<body>
    <section class="container">
        @csrf
        <form action="" method="post">
            <div class="card">
                <div class="card-header">
                    <h2> Sửa thông tin sinh viên</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nhtmasv" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control-plaintext" id="nhtmasv" name="nhtmasv" value="{{ old('nhtmasv', $nhtSinhvien->nhtmasv) }}" required>
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="nhthosv" class="col-sm-2 col-form-label">Họ sinh viên</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control-plaintext" id="nhthosv" name="nhthosv" value="{{ old('nhthosv', $nhtSinhvien->nhthosv) }}" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nhttensv" class="col-sm-2 col-form-label">Tên sinh viên </label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control-plaintext" id="nhttensv" name="nhttensv" value="{{ old('nhttensv', $nhtSinhvien->nhttensv) }}" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nhtngaysinh" class="col-sm-2 col-form-label">Ngày sinh</label>
                        <div class="col-sm-10">
                          <input type="date"  class="form-control-plaintext" id="nhtngaysinh" name="nhtngaysinh" value="{{ old('nhtngaysinh', $nhtSinhvien->nhtngaysinh) }}" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nhtnoisinh" class="col-sm-2 col-form-label">Nơi sinh</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control-plaintext" id="nhtnoisinh" name="nhtnoisinh" value="{{ old('nhtnoisinh', $nhtSinhvien->nhtnoisinh) }}" required>>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nhtmakhoa" class="col-sm-2 col-form-label">Khoa</label>
                        <div class="col-sm-10">
                          <select name="nhtmakhoa" id="nhtmakhoa" >
                            <option value="">Chọn khoa</option>
                            <option value="av"> anh van</option>
                            <option value="th"> tin hoc</option>
                            <option value="cn"> cong nghe</option>
                            <option value="sv"> toan cao cap </option>
                            <option value="sv"> </option>
                          </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class ="btn btn-primary"> Cập nhật </button>
                    <a href="/nht-sinhvien/" class="btn btn-secondary"> quay lại</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>