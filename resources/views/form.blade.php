@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Заполните форму</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('send') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Имя</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Тема</label>
                            <input type="text" class="form-control" name="subject">
                        </div>

                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Почта</label>
                          <input type="email" class="form-control" name="email">
                      </div>

                      <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Сообщение</label>
                          <textarea class="form-control" name="message" rows="3"></textarea>
                      </div>

                      <div class="mb-3">
                        <label for="formFile" class="form-label">Выбирите файл</label>
                        <input class="form-control" type="file" id="file" name="file">
                    </div>
                    <input type="hidden" id="status" name="status" value="not checked">

                    <button type="submit" class="btn btn-primary">
                        Отправить
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>
</div>/
@endsection
