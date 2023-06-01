<x-header/>
<x-layout/>

      <div class="container-fluid">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-4">
                <h4 class="text-center">Регистрация</h4>
                <hr>

                <form method="POST" action="/users">
                    @csrf
                    <label for="inputRegName" class="form-label">Име</label>
                    <input type="text" class="form-control mb-3" id="inputRegName" placeholder="" name="name">
                    @error('name')
                        <p class="text-error-1">{{ $message }}</p>
                    @enderror
                    <label for="inputRegEmail" class="form-label">Имейл</label>
                    <input type="email" class="form-control mb-3" id="inputRegEmail" placeholder="" name="email">
                    @error('email')
                        <p class="text-error-1">{{ $message }}</p>
                    @enderror
                    <label for="inputRegPassword" class="form-label">Парола</label>
                    <input type="password" class="form-control mb-3" id="inputRegPassword" placeholder="" name="password">
                    @error('password')
                        <p class="text-error-1">{{ $message }}</p>
                    @enderror
                    <label for="inputRegPasswordConfirm" class="form-label">Потвърди парола</label>
                    <input type="password" class="form-control mb-3" id="inputRegPasswordConfirm" placeholder=""
                        name="password_confirmation">
                    @error('password_confirmation')
                        <p class="text-error-1">{{ $message }}</p>
                    @enderror
                    <div class="col-12 d-flex justify-content-center mt-3">
                        <button class="btn btn-success" href="">Регистрация</button>
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-3">
                        <p class="text-register-sm">Вече имате акаунт? </p> <a class="px-2 text-decoration-none"
                            href="/login">Вход</a>
                    </div>
                </form>

            </div>
        </div>
