<x-header/>
<x-layout/>

        <div class="container mt-5">
            <table class="table fs-5">
                @foreach($photos as $photo)
                  <tr>
                    <td scope="col"><a class="text-decoration-none" href="/photo-single/{{ $photo->id }}">{{$photo['title']}}</a></td>
                  </tr>
                  @endforeach
                <tbody>
                </tbody>
              </table>
        </div>
        
      