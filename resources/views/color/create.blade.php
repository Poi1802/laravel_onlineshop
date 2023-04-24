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
              <h1 class="m-0">Создание цвета</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('color.index') }}">Цвета</a>
                </li>
                <li class="breadcrumb-item active">Создание цвета</li>
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

          <form action="{{ route('color.store') }}" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Введите <a
                    href="https://colorscheme.ru/html-colors.html" target="blank">HEX</a>
                  цвета.
                </label>
                <input type="text"
                  class="form-control @error('title') border-danger @enderror"
                  name="title" id="exampleInputEmail1" placeholder="HEX">
                @error('title')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="card-footer d-flex">
              <button type="submit" class="btn btn-primary">Создать</button>
              <a href="{{ route('color.index') }}" class="btn btn-warning ml-auto">Назад</a>
            </div>
          </form>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
