@extends('layouts.admin')
@section('content')
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                ADD PRODUCT
            </div>
            <div class="card-body">
                <form action="{{ route("product.update", $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="form-group d-block">
                        <label for="title">PRODUCT TITLE</label>
                        <input class="form-control" type="text" name="title" value="{{ $product->name }}" id="title" class="@error('title') is-invalid @enderror">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group d-block" style="display: flex">
                        <label for="price">PRODUCT PRICE</label>
                        <input type="text" name="price" value="{{ $product->price }}" id="price" class="@error('price') is-invalid @enderror" style="margin-left: 31px;">
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div style="float: right">
                            <label for="discount">PRODUCT DISCOUNT</label>
                            <input type="text" name="discount" value="{{ $product->discount }}" id="discount" class="@error('discount') is-invalid @enderror">
                            @error('discount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group d-block">
                        <label for="qty">PRODUCT QUANTITY</label>
                        <input type="number" name="qty" value="{{ $product->qty }}" min="1" id="qty" class="@error('qty') is-invalid @enderror">
                        @error('qty')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group d-block">
                        <label for="img">PRODUCT IMAGE</label>
                        <input type="file" name="img" id="img" value="{{ $product->img }}" class="@error('img') is-invalid @enderror">
                        @error('img')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group d-block">
                        <label for="description">PRODUCT DESCRIPTION</label>
                        <input class="form-control" type="text" name="description" value="{{ $product->description }}" id="description" class="@error('description') is-invalid @enderror">
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <br><div class="form-group">
                        <label for="content">PRODUCT DETAIL</label>
                        <textarea class="form-control" name="detail" value="{{ $product->detail }}" id="content" cols="30" rows="5" class="@error('detail') is-invalid @enderror">{{ $product->detail }}</textarea>
                        @error('detail')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">CATEGORY</label>
                        <select class="form-control" name="category" id="" class="@error('category') is-invalid @enderror">
                            <option value="">Choose category</option>
                            @foreach ($productCate as $item)
                                @if ($item->id == $product->categoryclothing_id)
                                    <option value="{{ $item->id }}" selected>{{ $item->title_category_clothing }}</option>
                                @else
                                    <option value="{{ $item->id }}">{{ $item->title_category_clothing }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="form-group">
                        <label for="">COLLECTION</label>
                        <select class="form-control" name="collection" id="" class="@error('collection') is-invalid @enderror">
                            <option value="">Choose collection</option>
                            @foreach ($collection as $item)
                                @if ($item->id == $product->collection)
                                    <option value="{{ $item->id }}" selected>{{ $item->collection }}</option>
                                @else
                                    <option value="{{ $item->id }}">{{ $item->collection }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    @error('collection')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="form-group">
                        <label for="">STATUS</label>
                            <div class="form-check">
                                @foreach ($status as $item)
                                    @if ($item->id == $product->status_product)
                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios{{ $item->id }}" value="{{ $item->id }}" checked class="@error('status') is-invalid @enderror">
                                    @else
                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios{{ $item->id }}" value="{{ $item->id }}" class="@error('status') is-invalid @enderror">
                                    @endif
                                    <label class="form-check-label" for="exampleRadios{{ $item->id }}">{{ $item->status }}</label><br>
                                @endforeach
                            </div>
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input type="submit" value="UPDATE PRODUCT" name="btnUpdateProduct" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

{{-- Quản lý TinyMCE --}}
    <script src="https://cdn.tiny.cloud/1/bwy4xl6l6nsbuuvte9krlgudw8y7hrunxzanj90ilf4n3gia/tinymce/5/tinymce.min.js"></script>
    <script>
        var editor_config = {
          path_absolute : "http://localhost/project_websitebanhang/project_admin/",
          selector: 'textarea',
          relative_urls: false,
          plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table directionality",
            "emoticons template paste textpattern"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
          file_picker_callback : function(callback, value, meta) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
      
            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
            if (meta.filetype == 'image') {
              cmsURL = cmsURL + "&type=Images";
            } else {
              cmsURL = cmsURL + "&type=Files";
            }
      
            tinyMCE.activeEditor.windowManager.openUrl({
              url : cmsURL,
              title : 'Filemanager',
              width : x * 0.8,
              height : y * 0.8,
              resizable : "yes",
              close_previous : "no",
              onMessage: (api, message) => {
                callback(message.content);
              }
            });
          }
        };
      
        tinymce.init(editor_config);
    </script>
{{-- ======================= --}}
@endsection