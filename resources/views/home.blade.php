@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('description') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="description_title">Заголовок сторінки</label>
                            <input type="text" id="description_title" name="description_title" class="form-control" value="{{ $descriptionTitle }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Опис</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{!! $description !!}</textarea>
                        </div>

                        <div class="button-group">
                            <button type="submit" class="btn btn-primary">Зберегти</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
