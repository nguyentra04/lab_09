<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>thêm sinh viên </title>
</head>
<body>
    <section class="container">
        @csrf
        <form action="" method="post">
            <div class="card">
                <div class="card-header">
                    <h2>Thêm sinh viên</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nhtmasv" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control-plaintext" id="nhtmasv" name="nhtmasv">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nhthosv" class="col-sm-2 col-form-label">Ho sinh vien</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control-plaintext" id="nhthosv" name="nhthosv">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nhttensv" class="col-sm-2 col-form-label">tên sinh viên </label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control-plaintext" id="nhttensv" name="nhttensv">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nhtngaysinh" class="col-sm-2 col-form-label">Ngày sinh</label>
                        <div class="col-sm-10">
                          <input type="date"  class="form-control-plaintext" id="nhtngaysinh" name="nhtngaysinh">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nhtnoisinh" class="col-sm-2 col-form-label">Noi sinh</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control-plaintext" id="nhtnoisinh" name="nhtnoisinh">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nhtmakhoa" class="col-sm-2 col-form-label">Khoa</label>
                        <div class="col-sm-10">
                          <select name="nhtmakhoa" id="nhtmakhoa" >
                            <option value="">Chon khoa</option>
                            <option value="av"> anh van</option>
                            <option value="th"> tin hoc</option>
                            <option value="cn"> cong nghe</option>
                          </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class ="btn btn-primary"> Thêm mới </button>
                    <a href="/nht-sinhvien/" class="btn btn-secondary"> Quay lại</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>