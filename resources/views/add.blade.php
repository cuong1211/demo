@extends('header');

@section('main')
    <form action="{{url('product')}}" method="POST" role="form">
        @csrf

        <h1>add</h1>
        <input type="text" name="name" placeholder="input">
        <input type="text" name="description" placeholder="input">
        <select name="category_id" id="">
        
            @foreach($cats as $value)
            <option value="{{$value->id}}">{{$value->name}}</option>
            @endforeach
        </select>
        <button type="submit">submit</button>
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
    

@endsection
