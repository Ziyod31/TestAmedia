@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Имя клиента</th>
                        <th>Почта клиента</th>
                        <th>Файл клиента</th>
                        <th>Сообщение</th>
                        <th>Статус формы</th>
                        <th>Дата создание</th>
                    </tr>
                    @foreach($applications as $app)
                    <tr>
                        <td>{{$app->id}}</td>
                        <td>{{$app->name}}</td>
                        <td>{{$app->email}}</td>
                        <td>


                            <a href="{{Storage::url($app->file) }}">

                              @if($app->file() == pdf)
                              <img src="file.png" alt="">
                              @else
                              <img src="{{ Storage::url($app->file) }}" style="max-width: 100px;"></a>
                              @endif
                          </td>
                          <td>{{$app->message}}</td>
                          <td>{{$app->status}}</td>
                          <td>{{$app->created_at}}</td>

                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </tbody>
      </div>
  </div>
</div>/
@endsection
