@extends('layouts.admin')
@section('content')
    @if (session("alert"))
        <div class="alert alert-success form-control alertStatus">
            <i class="fas fa-check-circle"></i>{{ session("alert") }}
        </div>
    @endif
    <div id="content" class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        ADD BLOG CATEGORY
                    </div>
                    <div class="card-body">
                        <form action="{{ route("blog_category.store") }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Blog Category Title</label>
                                <input class="form-control" type="text" name="title" id="name" class="@error('title') is-invalid @enderror">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label for=""></label>
                                <select class="form-control" id="">
                                    <option>Chọn danh mục</option>
                                    @foreach ($blog_category as $item)
                                        <option>{{ $item->title_category_blog }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            {{-- <div class="form-group">
                                <label for="">Trạng thái</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Chờ duyệt
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Công khai
                                    </label>
                                </div>
                            </div> --}}
                            <button type="submit" name="btnAddCategory" class="btn btn-primary">ADD</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        Blog Category
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Index</th>
                                    <th scope="col">Title</th>
                                    <th scope="col" style="float:right; margin-right: 35px">Action</th>
                                </tr>
                            </thead>
                            @php $count = 0; @endphp
                            @foreach ($blog_category as $item)
                                @php ++$count; @endphp
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $count }}</th>
                                        <td>{{ $item->title_category_blog }}</td>
                                        <td style="display: flex; float:right">
                                            <a href="{{ route("blog_category.edit", $item->id) }}" class="btn btn-success btn-sm rounded-0" data-toggle="tooltip" data-placement="top" title="Edit" style="margin-right:5px">EDIT</a>
                                            <form action="{{ route("blog_category.destroy", $item->id) }}" method="POST">
                                              @csrf
                                                @method("delete")
                                                <input type="submit" class="btn btn-danger btn-sm rounded-0" value="DELETE" data-toggle="tooltip" data-placement="top" title="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        EDIT BLOG CATEGORY
                    </div>
                    <div class="card-body">
                            <div class="form-group">
                                <label for="name">Blog Category Title</label>
                                @foreach ($blog_category as $item)
                                    @if ($item->id == Session::get("id"))
                                        <form action="{{ route("blog_category.update", $item->id) }}" method="POST">
                                            @csrf
                                            @method("PUT")
                                            <input class="form-control" type="text" name="title" id="name" value="{{ $item->title_category_blog }}" class="@error('title') is-invalid @enderror">
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <br><button type="submit" name="btnUpdateCategory" class="btn btn-primary">SAVE</button>
                                        </form>
                                    @endif
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection