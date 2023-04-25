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

      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Форма</h3>
          </div>

          <form action="{{ route('product.update', $product->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form d-flex">
              <div class="card-body col-md-6">
                <div class="form-group">
                  <label>Название товара</label>
                  <input type="text"
                    class="form-control @error('title') border-danger @enderror"
                    name="title" value="{{ old('title') ?? $product->title }}"
                    placeholder="Название">
                  @error('title')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Описание товара</label>
                  <input type="text"
                    class="form-control @error('description') border-danger @enderror"
                    name="description"
                    value="{{ old('description') ?? $product->description }}"
                    placeholder="Описание">
                  @error('description')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Количество товара</label>
                  <input type="text"
                    class="form-control @error('count') border-danger @enderror"
                    name="count" value="{{ old('count') ?? $product->count }}"
                    placeholder="Кол-во">
                  @error('count')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Цена товара</label>
                  <input type="text"
                    class="form-control @error('price') border-danger @enderror"
                    name="price" value="{{ old('price') ?? $product->price }}"
                    placeholder="Цена">
                  @error('price')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-check">
                  <input type="checkbox" name="published"
                    {{ old('published') ? 'checked' : '' }} value="1"
                    class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Опубликовать
                    сразу</label>
                  @error('published')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="card-body col-md-6">
                <div class="form-group">
                  <label>Категория товара</label>
                  <select
                    class="category form-control select2 select2-hidden-accessible @error('category_id') border-danger @enderror"
                    name="category_id" style="width: 100%;" data-select2-id="1"
                    tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="3" disabled>Выберите
                      категорию
                    </option>
                    @foreach ($categories as $category)
                      <option
                        {{ old('category_id') ?? $product->category_id === $category->id ? 'selected' : '' }}
                        value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                  </select>
                  @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Теги товара</label>
                  <select class="colors select2 select2-hidden-accessible" name="tags[]"
                    multiple="" data-placeholder="Выберите теги" style="width: 100%;"
                    data-select2-id="7" tabindex="-1" aria-hidden="true">
                    @foreach ($tags as $tag)
                      <option
                        {{ in_array($tag->id, array_column($product->tags->toArray(), 'id')) ? 'selected' : '' }}
                        value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                  </select>
                  @error('tags')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group form-colors">
                  <label>Цвета товара</label>
                  <select class="colors select2 select2-hidden-accessible" name="colors[]"
                    multiple="" data-placeholder="Выберите цвета" style="width: 100%;"
                    data-select2-id="7" tabindex="-1" aria-hidden="true">
                    @foreach ($colors as $color)
                      <option
                        {{ in_array($color->id, array_column($product->colors->toArray(), 'id')) ? 'selected' : '' }}
                        value="{{ $color->id }}">
                        {{ $color->title }}
                      </option>
                    @endforeach
                  </select>
                  @error('colors')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Изображения товара</label>
                  <div
                    class="input-group @error('imgs') border border-danger rounded-sm @enderror">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="imgs[]"
                        accept="image/gif,image/png,image/jpeg,image/pjpeg,image/heic"
                        multiple id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Выберите
                        файл(ы)</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Загрузить...</span>
                    </div>
                  </div>
                  @error('imgs')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="card-footer d-flex">
              <button type="submit" class="btn btn-primary">Изменить</button>
              <a href="{{ route('product.index') }}"
                class="btn btn-warning ml-auto">Назад</a>
            </div>
          </form>
          @if (!$product->imgs->isEmpty())
            <div class="card-body pt-0">
              <h4 class="imgs-title">Текущие изображения:</h4>
              <div class="imgs d-flex">
                @foreach ($product->imgs as $img)
                  <div class="img mr-4">
                    <img style="height: 150px; width: 200px; border-radius: 6px"
                      src="{{ $img->url }}" alt="">
                    <div class="img-delete mt-2">
                      <form action="{{ route('product.img.delete', $img->id) }}"
                        method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                      </form>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          @endif
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
