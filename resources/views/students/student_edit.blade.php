@extends('app.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 style="text-align: center">Sửa thông tin sinh viên</h1>
                        <a href="/student" class="btn btn-primary" role="button">Danh sách sinh viên</a>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Fullname</label><br>
                                <input type="text" name="txtFullName" class="form-control" placeholder="Nhập tên" value="{{$student->fullname}}">
                            </div>

                            <div class="form-group">
                                <label for="">Birthday</label><br>
                                <input type="text" name="txtBirthday" class="form-control" placeholder="Nhập ngày sinh" value="{{$student->birthday}}">
                            </div>
                            
                            <div class="form-group">
                                <label for="">Address</label><br>
                                <input type="text" name="txtAddress" class="form-control" placeholder="Nhập địa chỉ" value="{{$student->address}}">
                            </div>
                            
                            <div class="form-group">
                                @csrf
                                <button type="submit" class="btn btn-primary">Thay đổi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection