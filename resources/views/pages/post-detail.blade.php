@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="modal-body">
                <!-- Project Details Go Here-->
                <h2 class="text-uppercase">{{$model->title}}</h2>
                <p id="viewNumber">Lượt xem: {{$totalViews}}</p>
                <img class="img-fluid d-block mx-auto" src="{{asset($model->image)}}" alt="">
                <div class="item-intro text-muted">{!!$model->short_desc!!}</div>
                
                <p>{!!$model->content!!}</p>
                <ul class="list-inline">
                    <li>Date: January 2020</li>
                    <li>Tác giả: {{$model->author}}</li>
                    <li>Chuyên mục: {{$model->category->name}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page-script')
    <script>
        let increaseViewUrl = "{{route('post.tangView')}}";
        const data = {
        id: {{$model->id}},
        _token: "{{csrf_token()}}"
    };
    setTimeout(() => {
        fetch(increaseViewUrl, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(responseData => responseData.json())
        .then(postObj => {
            console.log(postObj);
        })
    }, 2000);
    </script>        
@endsection