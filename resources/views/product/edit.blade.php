@extends('layouts.main')

@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Редактирование товара</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a>
                </li>
                <li class="breadcrumb-item"><a
                    href="{{ route('product.index') }}">Товары</a></li>
                <li class="breadcrumb-item active">Редактирование товара</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <div class="col-md-4">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Форма</h3>
          </div>

          <form action="{{ route('product.update', $product->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="card-body">
              <div class="form-group">
                <label>Имя товара</label>
                <input type="text"
                  class="form-control @error('name') border-danger @enderror" name="name"
                  value="{{ old('name') ?? $product->name }}" placeholder="Иван">
                @error('name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label>Фамилия товара</label>
                <input type="text"
                  class="form-control @error('last_name') border-danger @enderror"
                  name="last_name" value="{{ old('last_name') ?? $product->last_name }}"
                  placeholder="Иванов">
                @error('last_name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label>Email товара</label>
                <input type="text"
                  class="form-control @error('email') border-danger @enderror"
                  name="email" value="{{ old('email') ?? $product->email }}"
                  placeholder="ivanov@mail.ru">
                @error('email')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label>Адрес товара</label>
                <input type="text"
                  class="form-control @error('adress') border-danger @enderror"
                  name="adress" value="{{ old('adress') ?? $product->adress }}"
                  placeholder="г.Иркутск, ул.Академика Герасимова, д.8, кв.35">
                @error('adress')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="card-footer d-flex">
              <button type="submit" class="btn btn-primary">Создать</button>
              <a href="{{ route('product.index') }}"
                class="btn btn-warning ml-auto">Назад</a>
            </div>
          </form>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
