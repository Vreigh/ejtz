<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Services</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<form action="http://localhost:8000/admin/services/1" method="POST">
				<input type="hidden" name="_token" value="3Xi4Aksc9qg3jPquswbh2CLZG3CxEBjw1D1opdDq" />
				<input type="hidden" name="_redirectBack" value="http://localhost:8000/admin/services" />
				<div class="form-group ">
					<label for="title">Title</label>
					<input class="form-control" name="title" type="text" id="title" value="Startups" >
				</div>
				<div class="form-group ">
					<label for="text">Text</label>
					<textarea class="ckeditor" name="text"><p>witam</p>
</textarea>
				</div>
				<div class="form-group">
					<input type="submit" value="Save" class="btn btn-primary"/>
					<a href="http://localhost:8000/admin/services" class="btn btn-default">Cancel</a>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
