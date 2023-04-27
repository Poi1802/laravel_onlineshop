@php
  use App\Models\Product;
  use App\Models\Category;
  use App\Models\Tag;
  use App\Models\Color;
  use App\Models\User;
  
  $productsCount = Product::count();
  $categoriesCount = Category::count();
  $tagsCount = Tag::count();
  $colorsCount = Color::count();
  $usersCount = User::count();
@endphp

@extends('layouts.main')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Главная</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Главная</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-2 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>hz</h3>

              <p>Заказы</p>
            </div>
            <div class="icon">
              <i class="nav-icon far fa-clipboard"></i>
            </div>
            <a href="#" class="small-box-footer">Подробнее <i
                class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $productsCount }}</h3>

              <p>Товары</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-boxes"></i>
            </div>
            <a href="{{ route('product.index') }}" class="small-box-footer">Подробнее <i
                class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ $categoriesCount }}</h3>

              <p>Категории</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-list-ul"></i>
            </div>
            <a href="{{ route('category.index') }}" class="small-box-footer">Подробнее <i
                class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{ $tagsCount }}</h3>

              <p>Теги</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-tags"></i>
            </div>
            <a href="{{ route('tag.index') }}" class="small-box-footer">Подробнее <i
                class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-2 col-6">
          <!-- small box -->
          <div class="small-box bg-light">
            <div class="inner">
              <h3>{{ $usersCount }}</h3>

              <p>Пользователи</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-users"></i>
            </div>
            <a href="{{ route('user.index') }}" class="small-box-footer">Подробнее <i
                class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-2 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $colorsCount }}</h3>

              <p>Цвета</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-palette"></i>
            </div>
            <a href="#" class="small-box-footer">Подробнее <i
                class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
