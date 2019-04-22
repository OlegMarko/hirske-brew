@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Редагувати товар
                </div>

                <div class="card-body">
                    <form action="{{ url('/product/' . $product->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="form-group row">
                            <label for="productName" class="col-sm-2 col-form-label col-form-label-lg">Назва</label>
                            <div class="col-sm-10">
                                <input name="name"
                                       type="text"
                                       class="form-control form-control-lg{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       id="productName"
                                       value="{{ $product->name }}"
                                       placeholder="Назва яка відображається на сайті">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="productPrice" class="col-sm-2 col-form-label col-form-label-lg">Ціна</label>
                            <div class="col-sm-10">
                                <input name="price"
                                       type="number"
                                       class="form-control form-control-lg{{ $errors->has('price') ? ' is-invalid' : '' }}"
                                       id="productPrice"
                                       value="{{ $product->price }}"
                                       placeholder="Ціна">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="productDescription" class="col-sm-2 col-form-label col-form-label-lg">Опис</label>
                            <div class="col-sm-10">
                                <textarea name="description"
                                          class="form-control form-control-lg{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                          id="productDescription" rows="5" placeholder="Короткий опис">{{ $product->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="productPicture" class="col-sm-2 col-form-label col-form-label-lg">Картинка</label>
                            <div class="col-sm-10">
                                <input name="file"
                                       type="file"
                                       class="form-control form-control-lg{{ $errors->has('file') ? ' is-invalid' : '' }}"
                                       id="productPicture"
                                       placeholder="Фото товару">

                                <span>{{ $product->file }}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 col-form-label-lg"></div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Додати новий товар</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
