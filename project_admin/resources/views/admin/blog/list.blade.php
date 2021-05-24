@extends('layouts.admin')
@section('content')
    <div id="content" class="container-fluid">
        @if (session("alert"))
            <div class="alert alert-success form-control alertStatus">
                <i class="fas fa-check-circle"></i>{{ session("alert") }}
            </div>
        @endif
        <div class="card">
            <div class="card-header font-weight-bold">
                Blog List
            </div>
            <div class="addBlog">
                <form action="{{ url("admin/blog/create") }}" method="GET">
                   <input type="submit" name="btnAdd" value="Add blog" class="btn btn-primary">
                </form>
            </div>
            <div class="card-body">
                <table id="tableBlog" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center">Index</th>
                            <th scope="col" style="text-align: center">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Post Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($blog))
                            @php
                                $count = 0;
                            @endphp
                            @foreach ($blog as $v_blog)
                                @php
                                    ++$count;
                                @endphp
                                @foreach ($blogCategory as $v_blogCategory)
                                    @if ($v_blog->categoryblog_id == $v_blogCategory->id)
                                        <tr>
                                            <th scope="row" style="text-align: center">{{ $count }}</th>
                                            <td class="img_80"><img src="{{ asset("storage/images/blog/$v_blog->img_blog") }}" alt=""></td>
                                            <td>{{ $v_blog->title_blog }}</td>
                                            <td>{{ $v_blogCategory->title_category_blog }}</td>
                                            <td>{{ $v_blog->created_at }}</td>
                                            <td style="display: flex">
                                                <a href="{{ route("blog.edit", $v_blog->id) }}" class="btn btn-success btn-sm rounded-0" data-toggle="tooltip" data-placement="top" title="Edit" style="margin-right:5px">EDIT</a>
                                                <form action="{{ route("blog.destroy", $v_blog->id) }}" method="POST">
                                                    @csrf
                                                    @method("delete")
                                                    <input type="submit" class="btn btn-danger btn-sm rounded-0" value="DELETE" data-toggle="tooltip" data-placement="top" title="Delete">
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endif
                    </tbody>
                </table>
                <div>
                    {{ $blog->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection