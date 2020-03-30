@extends('app')

@section('content')
    @if(!count($dogs))
        سگ مورد سلیقه شما یافت نشد
    @else
        شما میتوانید از سگ هایی با نژاد های زیر استفاده کنید و برای کسب اطلاعات بیشتر بر روی هر نژاد کلیک کنید
        <ul>
            @foreach($dogs as $dog)
                <li><a href="{{$dog->link}}">{{$dog->name}}</a></li> <img width="20px" height="20px" src="{{url('img/dogs/'.$dog->image)}}" alt="">
            @endforeach
        </ul>
    @endif
@endsection
