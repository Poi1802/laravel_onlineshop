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
              <h1 class="m-0">Категории</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a>
                </li>
                <li class="breadcrumb-item active">Категории</li>
              </ol>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <div class="col-4">
        <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">Создать
          категорию</a>
      </div>

      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Таблица категорий</h3>
          </div>
          <div class="card-body p-0">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Назавание</th>
                  <th>Управление</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                  <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td class="d-flex">
                      <a href="{{ route('category.edit', $category->id) }}"
                        class="ml-3 fs-4"><i class="far fa-edit"></i></a>
                      <form action="{{ route('category.delete', $category->id) }}"
                        class="text-danger ml-3" method="POST">
                        @csrf
                        @method('delete')
                        <button class="bg-white border-0" type="submit">
                          <i class="fas fa-trash text-danger"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
