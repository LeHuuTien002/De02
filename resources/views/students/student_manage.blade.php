@extends('app.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 style="text-align: center">Danh sách sinh viên</h1>
                        <a class="btn btn-primary" href="/student/add" role="button">Thêm</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">FullName</th>
                                    <th scope="col">Birthday</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @if (count($students)<=0)
                                    <h1 style="text-align: center">Không có dữ liệu</h1>
                                @else
                                    @foreach ($students as $data)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $data->fullname }}</td>
                                            <td>{{ $data->birthday }}</td>
                                            <td>{{ $data->address }}</td>
                                            <td style="display: flex">
                                                <a style="margin-right: 10px" class="btn btn-primary" href="/student/show/{{$data->id}}" role="button">Chi tiết</a>
                                                <a style="margin-right: 10px" class="btn btn-primary" href="/student/edit/{{$data->id}}" role="button">Sửa</a>
                                                <form action="/student/{{$data->id}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-primary" type="submit">Xóa</button>
                                                </form>                       
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection