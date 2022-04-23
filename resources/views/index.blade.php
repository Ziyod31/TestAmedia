@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Имя клиента</th>
                        <th>Почта клиента</th>
                        <th>Файл клиента</th>
                        <th>Сообщение</th>
                        <th>Статус формы</th>
                    </tr>
                    @foreach($applications as $app)
                    <tr>
                        <td>{{$app->id}}}</td>
                        <td>{{$app->name}}}</td>
                        <td>{{$app->email}}}</td>
                        <td>{{$app->file}}}</td>
                        <td>{{$app->message}}}</td>
                        <td>{{$app->status}}}</td>
                        <td>{{$app->timestamps()}}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </tbody>
    </div>
</div>
</div>/
@endsection
