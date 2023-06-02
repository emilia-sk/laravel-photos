@if ($message = Session::get('message'))
    <div class="row text-center mt-4">
        <p class="fs-5 fw-bold">{{ $message }}</p>
    </div>
@endif
