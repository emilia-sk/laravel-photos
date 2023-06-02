{{-- <div class="col-6 mt-4 p-4">
<h4 class="mt-1 mb-3">Коментари</h4>

  @auth
  <form method="POST" action="" class="border p-2">
    @csrf
    <label for="inputComment" class="form-label">Напишете Коментар</label>
    <textarea class="form-control" id="inputComment" name="body" rows="3"></textarea>

    <button type="submit" class="btn btn-success mt-2">Публикувай</button>
  </form>
  @else
 
   <div class="col mb-4">
    <h6 class="mt-2 mb-4 d-inline">Влезте в профила си за да коментирате.</h6>
    <a href="/login" class="btn btn-success d-inline mx-3">Вход</a>
   </div>
  @endauth

@foreach($comments as $comment)
  <div class="row border p-2">
   <div class="col-12 d-flex justify-content-between">
    <h5>Name:</h5>
    <small>Date</small>
   </div>
   <div class="col-12">
    <p>Blabla</p>
   </div>
  </div>
  @endforeach

</div>

 --}}
