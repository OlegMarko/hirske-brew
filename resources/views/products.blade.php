@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Додати новий товар
                </div>

                <div class="card-body">
                    <form action="{{ url('product') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="productName" class="col-sm-2 col-form-label col-form-label-lg">Назва</label>
                            <div class="col-sm-10">
                                <input name="name"
                                       type="text"
                                       class="form-control form-control-lg{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       id="productName"
                                       value="{{ old('name') }}"
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
                                       value="{{ old('price') }}"
                                       placeholder="Ціна">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="productDescription" class="col-sm-2 col-form-label col-form-label-lg">Опис</label>
                            <div class="col-sm-10">
                                <textarea name="description"
                                          class="form-control form-control-lg{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                          id="productDescription" rows="5" placeholder="Короткий опис">{{ old('description') }}</textarea>
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

    <table class="table table-striped mt-5">
        <thead>
        <tr>
            <th scope="col">Позиція</th>
            <th scope="col">Назва</th>
            <th scope="col">Ціна</th>
            <th scope="col">Опис</th>
            <th scope="col">Опції</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }} грн</td>
            <td>{{ $product->description }}</td>
            <td>
                <form action="{{ url('/product', ['id' => $product->id]) }}" method="post">
                    <a class="btn btn-default" href="{{ url('/product/' . $product->id . '/edit') }}">Edit</a>

                    <input class="btn btn-danger" type="submit" value="Delete" />
                    {!! method_field('delete') !!}
                    {!! csrf_field() !!}
                </form>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
