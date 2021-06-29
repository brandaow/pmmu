@extends('adminlte::page')

@section('content_header')
    <link href="{{ asset('css/timepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datepicker.css') }}" rel="stylesheet">
    <h1>Administrador</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="#">Presença</a></li>
    </ol>
@stop

@section('content')
    @include('includes.session')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Lançar Presença</h3>
                </div>
                <div class="box-body">
                    <form role="form" method="POST" action="{{ route('new.conf') }}">
                        {!! csrf_field() !!}
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('user') ? 'has-error' : '' }}">
                                <label>Usuário</label>
                                <select class="form-control" name="user">
                                    @forelse($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @empty
                                        <option>Nenhum usuário disponível</option>
                                    @endforelse
                                </select>
                                @if ($errors->has('user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('data') ? 'has-error' : '' }}">
                                <label>Data</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="data" class="form-control pull-right" id="datepicker">
                                </div>
                                @if ($errors->has('data'))
                                    <span class="help-block text-warning">
                                        <strong>{{ $errors->first('data') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('checkIn') ? 'has-error' : '' }}">
                                <label>Check-in</label>
                                <div class="input-group">
                                    <input type="text" name="checkIn" class="form-control timepicker">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                                @if ($errors->has('checkIn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('checkIn') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('checkOut') ? 'has-error' : '' }}">
                                <label>Check-out</label>
                                <div class="input-group">
                                    <input type="text" name="checkOut" class="form-control timepicker">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                                @if ($errors->has('checkOut'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('checkOut') }}</strong>
                                    </span>
                                @endif
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
@stop

@section('js')
    <script src="{{ asset('js/timepicker.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script>
        $(function () {
            $('.timepicker').timepicker({
                showInputs: true,
                showMeridian: false,
                format: 'HH:ii'
            })
            $('#datepicker').datepicker({
                autoclose: true,
                format: 'dd/mm/yyyy'
            })
        })
    </script>
@endsection