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
              <h1 class="m-0">Создание пользователя</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a>
                </li>
                <li class="breadcrumb-item"><a
                    href="{{ route('user.index') }}">Пользователи</a>
                </li>
                <li class="breadcrumb-item active">Создание пользователя</li>
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

          <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Имя пользователя</label>
                <input type="text"
                  class="form-control @error('name') border-danger @enderror" name="name"
                  value="{{ old('name') }}" placeholder="Иван">
                @error('name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label>Фамилия пользователя</label>
                <input type="text"
                  class="form-control @error('last_name') border-danger @enderror"
                  name="last_name" value="{{ old('last_name') }}" placeholder="Иванов">
                @error('last_name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label>Email пользователя</label>
                <input type="text"
                  class="form-control @error('email') border-danger @enderror"
                  name="email" value="{{ old('email') }}" placeholder="ivanov@mail.ru">
                @error('email')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label>Пароль</label>
                <input type="password"
                  class="form-control @error('password') border-danger @enderror"
                  name="password" placeholder="Введите пароль">
                @error('password')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label>Подтверждение пароля</label>
                <input type="password"
                  class="form-control @error('password') border-danger @enderror"
                  name="password_confirmation"placeholder="Повторите пароль">
                @error('password')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label>Адрес пользователя</label>
                <input type="text"
                  class="form-control @error('adress') border-danger @enderror"
                  name="adress" value="{{ old('adress') }}"
                  placeholder="г.Иркутск, ул.Академика Герасимова, д.8, кв.35">
                @error('adress')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="card-footer d-flex">
              <button type="submit" class="btn btn-primary">Создать</button>
              <a href="{{ route('user.index') }}" class="btn btn-warning ml-auto">Назад</a>
            </div>
          </form>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
