

@include('header')

<h2>création d'un article</h2>

{!! Form::open() !!}
<div class="form-group">
    {{Form::label('nom article')}}
    {{Form::text('nom','',['class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('extrait')}}
    {{Form::text('extrait','',['class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('url photo')}}
    {{Form::text('photo','',['class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::submit('envoyer',['class' => 'btn-success btn'])}}
</div>
{!! Form::close() !!}


@include('footer')