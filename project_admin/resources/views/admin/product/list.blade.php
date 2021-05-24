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
                PRODUCT LIST
            </div>
            <div class="addBlog">
                <form action="{{ url("admin/product/create") }}" method="GET">
                   <input type="submit" name="btnAdd" value="ADD PRODUCT" class="btn btn-primary">
                </form>
            </div>
            <div class="card-body">
                <table id="tableBlog" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center">Index</th>
                            <th scope="col" style="text-align: center">Image</th>
                            <th scope="col" style="text-align: center">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Collection</th>
                            <th scope="col">Post Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 0;
                        @endphp
                        @foreach ($product as $v_product)
                            @php
                                ++$count;
                            @endphp
                            @foreach ($productCate as $v_productCate)
                                @if ($v_product->categoryclothing_id == $v_productCate->id)
                                <tr>
                                    <th scope="row" style="text-align: center">{{ $count }}</th>
                                    <td class="img_80"><img src="{{ asset("storage/images/product/$v_product->img") }}" alt=""></td>
                                    <td style="text-align: center">{{ $v_product->name }}</td>
                                    <td>{{ $v_productCate->title_category_clothing }}</td>
                                    @foreach ($productCollect as $v_prodCollect)
                                        @if ($v_prodCollect->id == $v_product->collection)
                                            <td>{{ $v_prodCollect->collection }}</td>
                                        @endif
                                    @endforeach
                                    <td>{{ $v_product->created_at }}</td>
                                    <td style="display: flex;">
                                        <a href="{{ route("product.edit", $v_product->id) }}" style="margin-right: 5px" class="btn btn-success btn-sm rounded-0" data-toggle="tooltip" data-placement="top" title="Edit">EDIT</a>
                                        <form action="{{ route("product.destroy", $v_product->id) }}" method="POST">
                                            @csrf
                                            @method("delete")
                                            <input type="submit" name="btnDeleteProd" value="DELETE" class="btn btn-danger btn-sm rounded-0" data-toggle="tooltip" data-placement="top" title="Delete">
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
                <div>{{ $product->links() }}</div>
            </div>
        </div>
    </div>
@endsection