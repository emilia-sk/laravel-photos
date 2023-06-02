@props(['user_id', 'body', 'date'])

<div class="row border p-2">
    <div class="col-12 d-flex justify-content-between">
     <h5>Name: {{$user_id}}</h5>
     <small>{{$date}}</small>
    </div>
    <div class="col-12">
     <p>{{$body}}</p>
    </div>
</div>