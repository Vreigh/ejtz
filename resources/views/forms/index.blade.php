
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">

			</h1>
			@if(Session::has('message'))
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					{{ Session::get('message') }}
				</div>
			@endif
		</div>
	</div>
	<div class="row">
			<div class="alert alert-info" role="alert">
				Zdjęcie poglądowe produktu jest pierwszym ze zdjęć dodawane do produktów w zakładce niżej (Zdjęcia produktów).
			</div>
		<div class="col-lg-12">
			<a class="btn btn-primary navbar-btn" href="{{ URL::to('/admin/' . $page . '/create') }}"><i class="fa fa-plus"></i> Dodaj Produkt</a>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
                        @foreach($titles as $k => $title)    
                            <td><b>{{$title}}</b></td>
                        @endforeach
						</tr>	
					</thead>
					<tbody>
						@if(!$products->isEmpty())
							@foreach($products as $product)
							<tr>
                                <td>
                                    <div class="thumbnail" style="height: 80px; width: 100px">
                                        @if(!$product->product_photos->isEmpty())
                                        <a class="fancybox" href="{{ url("images/products/".$product->product_photos[0]->img_src) }}">
                                            <img src="{{ url("admin/img/cache/admin_preview/products/".$product->product_photos[0]->img_src) }}"  alt="ALT NAME" class="img-responsive"   style="height: 70px; width: 95px"/>
                                        </a>
                                        @endif
                                    </div>
                                </td>
								<td>{{ $product->title }}</td>
								<td class="text-right">
									<a href="{{ URL::to('/admin/' . $page . '/up/'.$product->id) }}">▲</a>
									<a href="{{ URL::to('/admin/' . $page . '/down/'.$product->id) }}">▼</a>
									<a class="btn btn-default btn-sm" href="{{ URL::to('/admin/' . $page . '/edit/'.$product->id) }}"><i class="fa fa-pencil"></i></a>
									<a onclick="return confirm('Na pewno chcesz usunąć ten etap?');" class="btn btn-danger btn-sm " href="{{ URL::to('/admin/' . $page . '/destroy/'.$product->id) }}"><i class="fa fa-times"></i></button>
								</td>
							</tr>
							@endforeach
						@else
                        <tr><td colspan="3">Nie dodano jescze żadnych etapów.</td></tr>
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>

<link rel="stylesheet" href="{!! asset('css/jquery.fancybox.css') !!}" >
<script src="{!! asset('js/jquery.fancybox.pack.js') !!}"></script>
<script>
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>