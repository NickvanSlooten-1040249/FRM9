    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a Item</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('Admin.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Titel">Titel</label>
                        <input type="text" class="form-control" name="Titel"/>
                    </div>

                    <div class="form-group">
                        <label for="Subtitel">Link</label>
                        <input type="text" class="form-control" name="Subtitel"/>
                    </div>

                    <div class="form-group">
                        <label for="Tekst">Tekst:</label>
                        <input type="text" class="form-control" name="Tekst"/>
                    </div>
                    <div class="form-group">
                        <label for="Fotos">Fotos</label>
                        <input type="file" name="Fotos" accept="image/x-png,image/gif,image/jpeg" value="Fotos" />
                    </div>
                    <div class="form-group">
                        <label for="Prijs">Prijs</label>
                        <input type="text" class="form-control" name="Prijs"/>
                    </div>
                    <button type="submit" style="color: white;    background-color: limegreen"; class="btn btn-primary-outline">Add Item</button>
                </form>
            </div>
        </div>
    </div>

