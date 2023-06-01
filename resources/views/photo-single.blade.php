<x-header/>
<x-layout/>

<div class="album py-5">
    <div class="container p-5">
        <div class="col"><!--photo start-->
            <div class="card shadow-sm">
              <img src="{{$photo['photo']}}" class="bd-placeholder-img card-img-top" width="100%" height="100%">
              <h5 class="card-title px-3">{{$photo['title']}}</h5>
              <div class="card-body">
                <p class="card-text">{{$photo['description']}}</p>
                <div class="col">
                    <a href="/photo-single/{{ $photo->id }}" class="btn btn-sm btn-outline-secondary">Преглед</a>
                    <form class="d-inline">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                  <small class="text-body-secondary float-end">{{ Carbon\Carbon::parse($photo->created_at)->format('d-m-Y') }}<!--displays creation date/without time--></small>
                </div>
              </div>
            </div>
          </div><!--photo end-->
    </div>
  </div>