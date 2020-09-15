<h1 class="Titel" style="text-align: center; font-size: 100px; padding-bottom: 10vh;">Wishlist</h1>
<div class="container">
<div class="row">

    <div class="col">
        @foreach($text as $texts)
            <h1>{{ $texts->Titel }}</h1><p>{{$texts->Tekst}}</p>
        @endforeach</div>
    <div class="col">
        @foreach($text as $texts)
            <p style="color: red; font-size: 40px">{{$texts->Prijs}}</p>
        @endforeach</div>
</div>
</div>
