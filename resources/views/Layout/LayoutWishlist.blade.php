<h1 class="Font" style="text-align: center; font-size: 100px; padding-bottom: 10vh;">Wishlist</h1>
<div class="container">
<div class="row">

    <div class="col">

        @foreach($wishlist as $wishlists)
            <img class="" src="{{url('/images/' . $wishlists->Fotos) }}" alt="Card image cap" width="200" height="200"><h1>{{ $wishlists->Titel }}</h1><p>{{$wishlists->Tekst}}</p>
        @endforeach</div>
    <div class="col">
        @foreach($wishlist as $wishlists)
            <p style="color: red; font-size: 40px; padding-bottom: 10vh;"><a href="{{$wishlists->SubTitel}}">{{$wishlists->Prijs}}</a></p>
        @endforeach</div>
</div>
</div>
