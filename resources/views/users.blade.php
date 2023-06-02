<x-header />
<x-layout />

<div class="container mt-5">
    <table class="table fs-5">
        <thead>
            
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Email</th>
          </tr>
          <tr>
            @foreach($users as $user)
            <td scope="col">{{$user['id']}}</td>
            <td scope="col">{{$user['email']}}</td>
          </tr>
          @endforeach
        </thead>
        <tbody>
        </tbody>
      </table>
</div>