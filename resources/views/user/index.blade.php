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
              <h1 class="m-0">Пользователи</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a>
                </li>
                <li class="breadcrumb-item active">Пользователи</li>
              </ol>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <div class="col-4">
        <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Создать
          пользователя</a>
      </div>

      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Таблица пользователей</h3>
          </div>
          <div class="card-body p-0">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Имя</th>
                  <th>Фамилия</th>
                  <th>Адрес</th>
                  <th>Email</th>
                  <th>Роль</th>
                  <th style="width: 10px">Управление</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->adress }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                      @foreach ($user->getRoles() as $role => $id)
                        @if ($id == $user->role)
                          {{ $role }}
                        @endif
                      @endforeach
                    </td>
                    <td class="d-flex">
                      <a href="{{ route('user.edit', $user->id) }}" class="ml-3 fs-4"><i
                          class="far fa-edit"></i></a>
                      <form action="{{ route('user.delete', $user->id) }}"
                        class="text-danger ml-3" method="POST">
                        @csrf
                        @method('delete')
                        <button class="bg-white border-0 fs-4" type="submit">
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
