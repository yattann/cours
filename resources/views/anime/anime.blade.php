@include('header')

@if(isset($animes))
    <div class="media-object-section">
        <div class="thumbnail col-xs-3" style="margin-left: -16px; margin-top: 10px; margin-right: 10px">
            <a href="#"><img src=<?=$animes->photo; ?> /></a>
        </div>
    </div>
    <h1 class="titre"><?=$animes->titre; ?></h1>
    <div class="media-object-section">
        <p><?=$animes->desc; ?></p>
        <p><?=$animes->desc2; ?></p>
    </div>
    <div class="saison"><h3>Liste des saisons</h3></div>
    @foreach($lesSaisons as $Saison)
        <div class="col-lg-12 columns article1">
            <div class="media-object stack-for-small myMediaArticle">

                <div class="media-object-section">
                    <h4 class="titre"><?=$Saison->nom; ?></h4>
                    @foreach($lesEpisodes as $Episode)
                        <div class="col-lg-12 columns article1">
                            <div class="media-object stack-for-small myMediaArticle">

                                <div class="media-object-section">
                                    <p class="titre"><?=$Episode->nom; ?> <?=$Episode->description; ?></p>

                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>

    @endforeach


@else
    <h2>Page en cours de création</h2>
@endif

@include('footer')