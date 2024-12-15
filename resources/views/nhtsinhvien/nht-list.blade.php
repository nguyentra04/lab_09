<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>danh sach sinh vien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class> 
        <h1>Section 1</h1>
        <div class="card">
            <div class="card-header">
                <h2>Danh sach sinh vien</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Mã sinh viên</th>
                            <th>Họ sinh viên</th>
                            <th>Tên sinh viên</th>
                            <th>Giới tính</th>
                            <th>Ngày sinh</th>
                            <th>Nơi sinh</th>
                            <th>Mã Khoa</th>
                            <th class="text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (Session::has('nhtsinhvien_deleted'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('nhtsinhvien_deleted')}}
                            </div>
                        @endif
                        @php
                            $stt++;
                        @endphp
                        @foreach ($nhtSinhViens as $item)
                            @php
                                $stt++;
                            @endphp
                        <tr>
                            <td class="text-center">{{ $stt }}</td>
                            <td>{{ $item->nhtmasv }}</td>
                            <td>{{ $item->nhthosv}}</td>
                            <td>{{ $item->nhttensv }}</td>
                            <td>{{ $item->nhtphai}}</td>
                            <td>{{ $item->nhtngaysinh}}</td>
                            <td>{{ $item->nhtnoisinh}}</td>
                            <td>{{ $item->nhtmakhoa }}</td>
                            <td class="text-right">{{ $item->nhthocbong }}</td>
                            <td class="text-center"> 
                                <a href="/sinhvien/detail/{{$item->nhtmasv}}" class="btn btn-success">Chi tiết</a>
                                <a href="/sinhvien/edit/{{$item->nhtmasv}}" class="btn btn-primary">Sửa</a>
                                <a href="/sinhvien/delete/{{$item->nhtmasv}}"class="btn btn-danger"
                                    onclick="return confirm('Bạn muốn xóa sinh viên này không? Mã:' + {{$item->nhtmasv}});">Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <div class="card-footer">
                        <h3>{{ $nhtSinhViens->count() }} </h3>
                        <a href="/nht-Sinhvien/create" class="btn btn"></a>
                    </div>

                </table>
            </div>

        </div>
    </section>
</body>
</html>