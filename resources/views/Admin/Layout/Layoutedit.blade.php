    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a contact</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('Admin.update', $wishlist->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">

                    <label for="Titel">Titel</label>
                    <input type="text" class="form-control" name="Titel" value='{{ $wishlist->Titel }}' />
                </div>

                <div class="form-group">
                    <label for="Subtitel">Link</label>
                    <input type="text" class="form-control" name="Subtitel" value='{{ $wishlist->SubTitel }}' />
                </div>

                <div class="form-group">
                    <label for="Tekst">Beschrijving</label>
                    <input type="text" class="form-control" name="Tekst" value='{{ $wishlist->Tekst }}' />
                </div>
                <div class="form-group">
                    <label for="Fotos">Fotos</label>
                    <input type="file" name="Fotos" accept="image/x-png,image/gif,image/jpeg" value='{{ $wishlist->Fotos }}' />
                </div>
                <div class="form-group">
                    <label for="Prijs">Prijs</label>
                    <input type="text" class="form-control" name="Prijs" value='{{ $wishlist->Prijs }}' />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

