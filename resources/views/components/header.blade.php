<div class="container-fluid p-0 overflow-hidden">
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/" class="nav-link px-2 text-white">Начало</a></li>
                    <li><a href="/photo-all" class="nav-link px-2 text-white">Снимки</a></li>
                    <li><a href="/users" class="nav-link px-2 text-white">Потребители</a></li>
                    <li><a href="/contacts" class="nav-link px-2 text-white">Контакти</a></li>
                </ul>
                <div class="text-end">
                    <!--USER LOGGED IN-->
                    @auth
                        <p class="text-welcome d-inline pb-3 px-2"> Здравей, {{ auth()->user()->name }}</p>
                        <a href="/photo-upload" class="btn btn-outline-light me-2">Качи Снимка</a>
                        <form method="POST" action="/logout" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-success me-2">Изход</button>
                        </form>
                    @else
                        <!--USER NOT LOGGED IN-->
                        <a href="/login" class="btn btn-outline-light me-2">Вход</a>
                        <a href="/register" class="btn btn-success">Регистрация</a>
                    @endauth
                </div>
            </div>
        </div>
    </header>

    <x-flash-message/><!--flash message for events-->

</div>


