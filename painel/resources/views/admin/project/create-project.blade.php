@extends('app')

@section('content')

{!! Html::style('css/style.css') !!}

{!! Html::script('js/angular/lib/loading-bar.js') !!}
{!! Html::style('js/angular/lib/loading-bar.css') !!}

{!! Html::script('js/angular/lib/upload/ng-file-upload-shim.js') !!}
{!! Html::script('js/angular/lib/upload/ng-file-upload.js') !!}

{!! Html::script('js/angular/project/projectCtrl.js') !!}
{!! Html::script('js/angular/project/projectAPIService.js') !!}

<div class="container-fluid" ng-app="project">
	<div class="row" ng-controller="projectCtrl">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Registro de projeto</h4></div>
				<div class="panel-body">
					{!! Form::open(['name'=>'form', 'class'=>'form', 'files'=>true])!!}
						{!! csrf_field() !!}

							<div class="form-group">
								{!! Form::label('Nome', 'Nome') !!}
								{!! Form::text('name', null, ['class' => 'form-control', 'ng-model'=>'project.name']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('Categoria', 'Categoria') !!}
								{!! Form::text('category', null, ['class' => 'form-control', 'ng-model'=>'project.category']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('Link', 'Link') !!}
								{!! Form::text('link', null, ['class' => 'form-control', 'ng-model'=>'project.link']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('Descrição', 'Descrição') !!}
								{!! Form::textarea('description', null, ['class' => 'form-control', 'ng-model'=>'project.description']) !!}
							</div>


							<div class="form-group">
								<span class="btn btn-default btn-file">
									<input type="file" ngf-select ng-model="project.file" name="file"    
									accept="image/*" ngf-max-size="2MB"  multiple
									ngf-model-invalid="errorFile">
									<span class="glyphicon glyphicon-folder-open"></span> Selecione as imagens
								</span>
							</div>
							<div class="form-group">
								<div class="row" ng-show="project.upload.data">
									<div ng-repeat="p in project.upload.data" class="col-md-4">
										<img data-ng-src="<% p.way + p.original_filename %>" class="img-project-list">
									</div>
								</div>
							</div>
						
						<div class="form-group">
						{!! Form::button('Salvar', ['class'=>'btn btn-primary', 'ng-click'=>'save(project)'])!!}
						</div>


					<div id="loading-bar-container"></div>	    
					{!! Form::close()!!}
					<div class="snackbar-container" data-snackbar="true" data-snackbar-duration="5000" data-snackbar-remove-delay="200"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
	#loading-bar .bar {
		position: relative;
		background: #333;
		height: 7px;
	}
</style>
@endsection