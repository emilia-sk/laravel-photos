<x-header />
<x-layout />

<div class="row d-flex justify-content-center mt-5">
    <div class="col-7">
        <h4 class="text-center">Качи снимка</h4>
        <hr>

        <form method="POST" action="photo-all" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex justify-content-center border p-3">
                <div class="col-6">
                    <label for="inputTitle" class="form-label">Заглавие</label>
                    <input type="text" class="form-control mb-5" id="inputTitle" name="title">
                    @error('title')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="inputDescription" class="form-label">Описание</label>
                    <input type="text" class="form-control mb-5" id="inputDescription" name="description">
                    @error('description')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="inputPhoto" class="form-label">Снимка</label>
                    <input type="file" class="form-control mb-3" id="inputPhoto" name="photo">
                    @error('photo')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button class="btn btn-success">Качи</button>
                </div>
            </div>
        </form>
    </div>
</div>
