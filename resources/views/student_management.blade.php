<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lý học sinh</title>
    <link rel="stylesheet" href="{{asset('assets/js/bootstrap.min.js')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container w-75">
        <h2>Quản lý học sinh</h2>
    <button type="button" class="btn btn-primary"><a style="color: white;text-decoration: none;" href="">Thêm mới</a></button>
    <div class="d-flex justify-content-between">
        <div>
            <p>Hiển thị</p>
        </div>
        <div class="">
            <p>Tìm kiếm: <input type="text" name="search" id=""></p>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên học sinh</th>
                <th>Số điện thoại</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <tr colspan = "6">
                <td>1</td>
                <td>Phạm Việt An</td>
                <td>12345456</td>
                <td><button type="button" class="btn btn-warning">Sửa</button></td>
                <td><button type="button" class="btn btn-danger">Xóa</button></td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>
