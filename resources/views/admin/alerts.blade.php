@extends('adminlte::page')

@section('content_header')
<h1>Administrador</h1>

<ol class="breadcrumb">
	<li><a href="{{ route('home') }}">Home</a></li>
	<li><a href="#">Alertas</a></li>
</ol>
@stop

@section('content')
@include('includes.session')
<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">Lançar Alerta</h3>
			</div>
			<div class="box-body">
				<form role="form" method="POST" action="{{ route('alerts.reg') }}">
					{!! csrf_field() !!}
					<div class="box-body">
						<div class="row">
							<div class="col-xs-3 form-group {{ $errors->has('title') ? 'has-error' : '' }}">
								<label>Título</label>
								<input type="text" name="title" class="form-control" placeholder="Título">
								@if ($errors->has('title'))
									<span class="help-block">
										<strong>{{ $errors->first('title') }}</strong>
									</span>
                            	@endif
							</div>
							<div class="col-xs-6">
								<label>Mensagem</label>
								<input type="text" name="message" class="form-control" placeholder="Mensagem">
							</div>
							<div class="col-xs-3 form-group {{ $errors->has('type') ? 'has-error' : '' }}">
								<label>Tipo</label>
								<select name="type" class="form-control">
									<option value="info" class="bg-info">Azul</option>
									<option value="success" class="bg-success">Verde</option>
									<option value="danger" class="bg-danger">Vermelho</option>
									<option value="warning" class="bg-warning">Amarelo</option>
								</select>
								@if ($errors->has('type'))
									<span class="help-block">
										<strong>{{ $errors->first('type') }}</strong>
									</span>
                            	@endif
							</div>
						</div><br>
						<div class="row">
							<div class="col-xs-3 form-group {{ $errors->has('icon') ? 'has-error' : '' }}">
								<label>Ícone</label>
								<input type="text" name="icon" class="form-control" placeholder="info-circle">
								@if ($errors->has('icon'))
									<span class="help-block">
										<strong>{{ $errors->first('icon') }}</strong>
									</span>
                            	@endif
							</div>
							<div class="col-xs-3 form-group {{ $errors->has('can') ? 'has-error' : '' }}">
								<label>Permissão</label>
								<select name="can" class="form-control">
									<option value="all">Todos</option>
									<option value="trainee">Estágiarios</option>
									<option value="manager">Administradores</option>
								</select>
								@if ($errors->has('can'))
									<span class="help-block">
										<strong>{{ $errors->first('can') }}</strong>
									</span>
                            	@endif
							</div>
							<div class="col-xs-3 form-group {{ $errors->has('startShow') ? 'has-error' : '' }}">
								<label>Iniciar em</label>
								<input type="text" name="startShow" class="form-control" placeholder="2019-01-30 12:45:00">
								@if ($errors->has('startShow'))
									<span class="help-block">
										<strong>{{ $errors->first('startShow') }}</strong>
									</span>
                            	@endif
							</div>
							<div class="col-xs-3 form-group {{ $errors->has('endShow') ? 'has-error' : '' }}">
								<label>Finalizar em</label>
								<input type="text" name="endShow" class="form-control" placeholder="2019-01-30 12:45:00">
								@if ($errors->has('endShow'))
									<span class="help-block">
										<strong>{{ $errors->first('endShow') }}</strong>
									</span>
                            	@endif
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-flat btn-block btn-primary">Registrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@forelse ($alerts as $alert)
<div class="callout callout-{{$alert->type}}">
	<h4><i class="icon fa fa-{{$alert->icon}} fa-fw"></i> {{$alert->title}}</h4>
	<p>{{$alert->message}}</p>
	<hr>
	<form role="form" method="POST" action="{{ route('alerts.del') }}">
		{!! method_field('delete') !!}
		{!! csrf_field() !!}
		<input type="hidden" name="identify" id="identify" value="{{$alert->id}}">
		@if(strtotime($alert->endShow) < strtotime('now'))
		<span class="btn bg-maroon"><i class="icon fa fa-power-off fa-fw"></i> SUSPENSO</span>&nbsp;
		@else
		<span class="btn bg-purple"><i class="icon fa fa-power-off fa-fw"></i> ATIVO</span>&nbsp;
		@endif
		<span class="btn bg-navy"><i class="icon fa fa-eye fa-fw"></i> @if($alert->can == "all") TODOS @elseif($alert->can == "trainee") ESTAGIÁRIOS @elseif($alert->can == "manager") ADMINISTRADORES @else INDEF. @endif</span>&nbsp;
		<button type="submit" class="btn btn-danger"><i class="icon fa fa-trash"></i></button>
	</form>
</div>
@empty
@endforelse
@stop