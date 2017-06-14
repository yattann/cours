@include('header')


@if(isset($animes))
    <h1>liste des animes</h1>


    <table class="table table-bordered">

        @foreach($animes as $anime)
            <div class="col-lg-12 columns article1">
                <div class="media-object stack-for-small myMediaArticle">
                    <div class="media-object-section">
                        <div class="thumbnail col-xs-2">
                            <a href="#"><img src=<?=$anime->photo; ?> /></a>
                        </div>
                    </div>
                    <div class="media-object-section">
                        <h4 class="titre"><?=$anime->nom; ?></h4>
                        <h4 class="titre"><?=$anime->slug; ?></h4>
                        <p><?=$anime->desc; ?><a href="{{ route('voirAnime', ['id' =>$anime->id]) }}" class="suite">Lire la suite</a></p>
                    </div>
                </div>
            </div>

        @endforeach

    </table>
@else
    <h2>Page en cours de création</h2>
@endif

@include('footer')