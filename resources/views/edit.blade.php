@extends('header')

@section('main')

<form action="" method="POST" role="form">
    @csrf

    <h1>edit</h1>
    <input type="text" name="name" placeholder="input" value="{{$model->name}}">
    <button type="submit" >submit</button>
    <div class="status">
        <h1>status</h1>
        <div class="radio">
            <label >
                <input type="radio" name="status" value="0" />
                un pulish
            </label>
            <label >
                <input type="radio" name="status" value="1" checked />
                pulish
            </label>
        </div>
    </div>
</form>


@stop()
