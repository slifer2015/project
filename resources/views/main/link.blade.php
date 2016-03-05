@extends('main.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-newspaper-o"></i>
                            لینک ها
                        </div>
                        <div class="panel-body">
                            @foreach($links->groupBy('type') as $groupLinks)
                                <h4>{{$groupLinks[0]->type}}</h4>
                            <ul class="list-group">
                                @foreach($groupLinks as $link)
                                    <li class="list-group-item link-item"><a rel="nofollow" target="_blank"
                                                                   href="{{$link->url}}">{{$link->name}}</a>
                                        <span class="pull-left">{{$link->description}}</span>
                                    </li>
                                @endforeach
                            </ul>
                            @endforeach
                        </div>
                    </div>

            </div>
        </div>
    </div>

@endsection
@section('script')
@endsection