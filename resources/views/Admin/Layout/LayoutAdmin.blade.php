<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3 Font">Wishlist</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>userid</td>
                <td>Titel</td>
                <td>Tekst</td>
                <td>Fotos</td>
                <td>Prijs</td>
                <td colspan=2>Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($wishlist as $wishlists)
                <tr>
                    <td>{{$wishlists->id}}</td>
                    <td>{{$wishlists->user_id}}</td>
                    <td>{{$wishlists->Titel}} {{$wishlists->Subtitel}}</td>
                    <td>{{$wishlists->Tekst}}</td>
                    <td>{{$wishlists->Fotos}}</td>
                    <td>{{$wishlists->Prijs}}</td>
                    <td>
                        <a href="{{ route('Admin.edit',$wishlists->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('Admin.destroy', $wishlists->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
        </div>


        <div class="col-sm-12">

            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
    </div>
</div>
<div>
    <a style="margin: 19px;" href="{{ route('Admin.create')}}" class="btn btn-primary">New Item</a>
</div>

<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3 Font" id="users">Users</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>naam</td>
                <td>Email</td>
                <td>Roles</td>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{implode (',',$user->Roles()->get()->pluck('name')->toArray())}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
        </div>


        <div class="col-sm-12">

            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
    </div>
</div>
<div>
</div>
