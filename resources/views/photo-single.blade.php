<x-header/>
<x-layout/>

<div class="album py-5">
    <div class="container p-5">
        <div class="col"><!--photo start-->
            <div class="card shadow-sm">
              <img src="{{asset('images/no-image.png')}}" class="bd-placeholder-img card-img-top" width="100%" height="100%">
              <h5 class="card-title px-3">{{$photo['title']}}</h5>
              <div class="card-body">
                <p class="card-text">{{$photo['description']}}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="/photo-single/{{ $photo->id }}" class="btn btn-sm btn-outline-secondary">Преглед</a>
                  </div>
                  <small class="text-body-secondary">{{ Carbon\Carbon::parse($photo->created_at)->format('d-m-Y') }}</small>
                </div>
              </div>
            </div>
          </div><!--photo end-->
    </div>
  </div>