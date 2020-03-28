@extends('app')

@section('content')
    @if(!count($dogs))
        سگ مورد سلیقه شما یافت نشد
    @else
        شما میتوانید از سگ هایی با نژاد های زیر استفاده کنید و برای کسب اطلاعات بیشتر بر روی هر نژاد کلیک کنید
        <ul>
            @foreach($dogs as $dog)
                <li><a href="{{$dog->link}}">{{$dog->breed}}</a></li>
            @endforeach
        </ul>
    @endif
@endsection
