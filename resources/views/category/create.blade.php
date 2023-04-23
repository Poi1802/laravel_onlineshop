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
              <h1 class="m-0">Создание категории</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a>
                </li>
                <li class="breadcrumb-item"><a
                    href="{{ route('category.index') }}">Категории</a></li>
                <li class="breadcrumb-item active">Создание категории</li>
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

          <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Название категории</label>
                <input type="text" class="form-control" name="title"
                  id="exampleInputEmail1" placeholder="Категория">
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Создать</button>
            </div>
          </form>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
