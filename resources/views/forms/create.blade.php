</br>
    <h1 class="page-header">
        {{$title}}
    </h1>
</br>
@if ($errors->any())
	<ul class="alert alert-danger">
		@foreach($errors->all() as $error)
			<li>{{ $error}}</li>
		@endforeach
	</ul>
@endif
	{!! Form::open( array('url' => 'admin/' . $page . '/update/' . $product->id, 'method' => 'post', 'id' => 'form', 'files' => true)) !!}
    <div class="form-group"> 
        {!! Form::label('title', 'Nazwa Produktu') !!}
        {!! Form::text('title', null,  ['class' => 'form-control', 'placeholder' => 'Nazwa Produktu']) !!}
    </div>
    <div class="form-group"> 
        {!! Form::label('product_code', 'Kod Produktu') !!}
        {!! Form::text('product_code', null,  ['class' => 'form-control', 'placeholder' => 'Kod Produktu']) !!}
    </div>
    <div class="form-group"> 
        {!! Form::label('description', 'Opis Produktu') !!}
        {!! Form::textarea('description', null,  ['class' => 'form-control', 'id' => 'editor']) !!}
    </div>
    <div class="form-group"> 
        {!! Form::label('brand_id', 'Wybierz Markę Produktu') !!}
        {!! Form::select('brand_id', $brands, null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group"> 
        {!! Form::label('category_id', 'Wybierz Kategorię Produktu') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group"> 
    {!! Form::submit('Wyślij', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}


</br>

  <script>
    CKEDITOR.replace( 'editor');
  </script>
{!! Form::close() !!}


<link rel="stylesheet" href="{!! asset('css/jquery.fancybox.css') !!}" >
<script src="{!! asset('js/jquery.fancybox.pack.js') !!}"></script>
<script>
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
