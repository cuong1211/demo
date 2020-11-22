@extends('header')

@section('main')
<div class="container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Status</th>
          <th>the loai</th>
          <th>created_at</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($cats as $cat)
            <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->name}}</td>
                <td>{{$cat->description}}</td>
                <td>{{$cat->categorys->name}}</td>
                <td>{{$cat->created_at}}</td>
                <td>
                    <a href="{{ route('cate-edit',['id'=>$cat->id]) }}">edit</a>

                </td>
                <td>
                    <a href="{{ route('cate-del',['id'=>$cat->id]) }}" onclick="return confrim('ban co muon xoa ko?')">delete</a>
                </td>

            </tr>
        @endforeach
      </tbody>
    </table>
    <div class="clearfix"></div>
    {{$cats->links()}}
  </div>

@endsection
