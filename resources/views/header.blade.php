
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_style.min.css' rel='stylesheet' type='text/css' />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>

@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>{{ Session::get('message') }}</p>
@endif
<header class="row">
    <div class="Logo col-lg-12 col-md-12 col-sm-12 columns" align="center" style="padding-top:20px"><img src="http://placehold.it/1400x90" style="border-top-right-radius:20px;border-top-left-radius:20px"/></div>

</header>
<div class="container" style="width: 1400px">
    <div class="row">
        <div class="col-lg-12">
