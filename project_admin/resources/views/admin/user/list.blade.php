@extends('layouts.admin')
@section('content')
    @if (session("alert"))
        <div class="alert alert-success form-control alertStatus">
            <i class="fas fa-check-circle"></i>{{ session("alert") }}
        </div>
    @endif
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                USER LIST
            </div>
            <div class="addBlog">
                <form action="{{ url("admin/user/create") }}" method="GET">
                   <input type="submit" name="btnAdd" value="ADD USER" class="btn btn-primary">
                </form>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr class="tr_user">
                            <th scope="col">Index</th>
                            <th scope="col">Username</th>
                            <th scope="col">Image</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">Role</th>
                            <th scope="col">Created_at</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $count=0 @endphp
                        @foreach ($user as $item)
                            @php ++$count @endphp
                            <tr class="tr_user">
                                <th scope="row">{{ $count }}</th>
                                <td>{{ $item->name }}</td>
                                <td class="td_img"><p class="user_img" style="background-image: url({{ asset("storage/images/user/$item->img") }}); height: 100px; width: 100px;"></p></td>
                                <td>{{ $item->email }}</td>
                                @if (isset($item->day) || isset($item->month) || isset($item->year))
                                    <td>{{ $item->day."/".$item->month."/".$item->year }}</td>
                                @else
                                    <td>_________</td>
                                @endif
                                @if (isset($item->gender))
                                    <td>{{ $item->gender }}</td>
                                @else
                                    <td>_________</td>
                                @endif
                                @foreach ($role as $item_role)
                                    @if ($item_role->id == $item->role_id)
                                        <td>{{ $item_role->role }}</td>
                                    @endif
                                @endforeach
                                <td>{{ $item->created_at }}</td>
                                <td style="display: flex;">
                                    <a href="{{ route("user.edit", $item->id) }}" style="margin-right: 5px" class="btn btn-success btn-sm rounded-0" data-toggle="tooltip" data-placement="top" title="Edit">EDIT</a>
                                    <form action="{{ route("user.destroy", $item->id) }}" method="POST">
                                        @csrf
                                        @method("delete")
                                        <input type="submit" name="btnDeleteProd" value="DELETE" class="btn btn-danger btn-sm rounded-0" data-toggle="tooltip" data-placement="top" title="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>{{ $user->links() }}</div>
            </div>
        </div>
    </div>
@endsection