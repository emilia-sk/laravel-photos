<x-header-admin />
<x-layout />

<div class="container mt-5">
    <table class="table fs-5">
        <thead>
            <th>Потребители</th>
            <tr>
                <th scope="col">Име</th>
                <th scope="col">Имейл</th>
            </tr>
            <tr>
                @foreach ($users as $user)
                    <td scope="col">{{ $user['name'] }}</td>
                    <td scope="col">{{ $user['email'] }}</td>
            </tr>
            @endforeach
        </thead>
        <tbody>
        </tbody>
    </table>

    <table class="table fs-5">
        <thead>
            <th>Снимки</th>
            <tr>
                <th scope="col">Име</th>
                <th scope="col">Автор</th>
            </tr>
            <tr>
                @foreach ($photos as $photo)
                    <td scope="col">{{ $photo['title'] }}</td>
                    <td scope="col">{{ $photo['user_id'] }}</td>
            </tr>
            @endforeach
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
