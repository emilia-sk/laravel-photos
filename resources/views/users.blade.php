<x-header />
<x-layout />

<div class="container mt-5">
    <table class="table fs-5">
        <thead>
            
          <tr>
            <th scope="col">Име</th>
            <th scope="col">Имейл</th>
          </tr>
          <tr>
            @foreach($users as $user)
            <td scope="col">{{$user['name']}}</td>
            <td scope="col">{{$user['email']}}</td>
          </tr>
          @endforeach
        </thead>
        <tbody>
        </tbody>
      </table>
</div>