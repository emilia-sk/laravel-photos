<x-header/>
<x-layout/>
{{-- {{dd($comments['data'])}} --}}

<div class="album py-5">
    <div class="container p-5">
        <div class="col"><!--photo start-->
            <div class="card shadow-sm">
              <img src="{{$photo->photo ? asset('storage/' . $photo->photo) : asset('/images/no-image.png')}}" class="bd-placeholder-img card-img-top" width="100%" height="100%">
              <h5 class="card-title px-3">{{$photo['title']}}</h5>
              <div class="card-body">
                <p class="card-text">{{$photo['description']}}</p>
                <div class="col">

                  @auth
                    <form method="POST" action="/photos/{{$photo->id}}" class="d-inline">
                      @csrf
                      @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    @endauth

                  <small class="text-body-secondary float-end">{{ Carbon\Carbon::parse($photo->created_at)->format('d-m-Y') }}<!--displays creation date/without time--></small>
                </div>
              </div>
            </div>
          </div><!--photo end-->
         <x-comments/>
         <div class="col-6 mt-4 p-4">
          <h4 class="mt-1 mb-3">Коментари</h4>
          
            @auth
            <form method="POST" action="/comment" class="border p-2"><!--comment form end-->
              @csrf
              <label for="inputComment" class="form-label">Напишете Коментар</label>
              <textarea class="form-control" id="inputComment" name="body" rows="3"></textarea>
          
              <button type="submit" class="btn btn-success mt-2">Публикувай</button>
            </form>
            @else
           
             <div class="col mb-4">
              <h6 class="mt-2 mb-4 d-inline">Влезте в профила си за да коментирате.</h6>
              <a href="/login" class="btn btn-success d-inline mx-3">Вход</a>
             </div><!--comment form-->
            @endauth
          
          @foreach($comments['data'] as $comment)
             <x-comment :user_id="$comment['user_id']" :body="$comment['body']" :date="$comment['created_at']"/>
          @endforeach
          
          </div>
    </div>
  </div>