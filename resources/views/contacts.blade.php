<x-header/>
<x-layout/>

      <div class="container-fluid">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-4">
                <h4 class="text-center">Изпратете съобщение</h4>
                <hr>

                <form method="POST" action="">
                    @csrf
                    <label for="inputMessageName" class="form-label">Име</label>
                    <input type="text" class="form-control mb-3" id="inputMessageName" placeholder="" name="name">
                    @error('name')
                        <p class="text-error-1">{{ $message }}</p>
                    @enderror
                    <label for="inputMessageEmail" class="form-label">Имейл</label>
                    <input type="email" class="form-control mb-3" id="inputMessageEmail" placeholder="" name="email">
                    @error('email')
                        <p class="text-error-1">{{ $message }}</p>
                    @enderror
                    <label for="inputMessage" class="form-label">Съобщение</label>
                    <textarea class="form-control" id="inputMessage" name="message" rows="3"></textarea>
                    @error('message')
                        <p class="text-error-1">{{ $message }}</p>
                    @enderror
                    <div class="col-12 d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-success" href="">Изпрати</button>
                    </div>
                </form>

            </div>
        </div>
