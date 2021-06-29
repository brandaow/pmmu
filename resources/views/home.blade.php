@extends('adminlte::page')

@section('content_header')
    <link rel="stylesheet" href="{{ asset("css/fullcalendar.min.css")}}">
    <link rel="stylesheet" href="{{ asset("css/fullcalendar.print.min.css")}}" media="print">
    <h1>Home - PMMU</h1>  
    <style>
        .fc-other-month {
            color: #c7c7c7;
        }
    </style> 
@stop

@section('content')
    <p>Bem-vindo(a), <b>{{ auth()->user()->name }}</b>!</p>
    @include('includes.session')
    @foreach ($alerts as $alert)
        @if($alert->can == auth()->user()->can || $alert->can == "all")
        <div class="callout callout-{{$alert->type}}">
            <h4><i class="icon fa fa-{{$alert->icon}} fa-fw"></i> &nbsp; {{$alert->title}}</h4>
            <p>{{$alert->message}}</p>
        </div>
        @endif
    @endforeach
    <div class="row">
        @if($pmmu)
        <div class="col-md-8 col-xs-12">
            <div class="info-box bg-purple">
                <span class="info-box-icon"><i class="fa fa-file"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">PMMU - {{ $pmmu->name }}</span>
                    <span class="info-box-number">{{ number_format($percent, 1, '.', ' ') }}% Concluído</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: {{ $percent }}%"></div>
                    </div>
                    <span class="progress-description text-center"><strong>Prazo Aprox.:</strong> {{ date('d M. Y', strtotime($pmmu->timesEnd)) }} </span>
                </div>
            </div>
        </div>
        @endif
        <div class="col-md-4 col-xs-12">
            <div class="info-box bg-navy">
                <span class="info-box-icon"><i class="fa fa-calendar-times-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Presença</span>
                    @if($presence != NULL)
                    @if(date('d/m/Y', strtotime($presence->checkIn)) == date('d/m/Y', strtotime('now')))
                    @if($presence->checkOut)
                    <span class="info-box-number">Validação completa!</span>
                    @else
                    <span class="info-box-number">Check-in realizado!</span>
                    @endif
                    @else
                    <span class="info-box-number">Nenhum registro hoje!</span>
                    @endif
                    @else
                    <span class="info-box-number">Nenhum registro hoje!</span>
                    @endif
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    <span class="progress-description text-center"><a href="{{ route('presence') }}" class="text-gray">Mais informações <i class="fa fa-fw fa-arrow-circle-right"></i></a></span>
                </div>
            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-8">
            <div class="box box-success">
                <div class="box-body no-padding">
                    {!! $calendar_details->calendar() !!}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Novo Evento</h3>
                </div>
                <div class="box-body">
                    <form role="form" method="POST" action="{{ route('event.add') }}">
                        {!! csrf_field() !!} 
                        <div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
                            <input type="date" class="form-control" name="date">  
                            @if ($errors->has('date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('date') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('time') ? 'has-error' : '' }}">
                            <input type="time" class="form-control" name="time">  
                            @if ($errors->has('time'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('time') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <input type="text" class="form-control" name="title" placeholder="Título do Evento">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-plus fa-fw"></i></button>
                            </div>
                        </div>
                        @if ($errors->has('title'))
                            <span class="help-block text-red">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
<script src='{{ asset("js/moment.js")}}'></script>
<script src='{{ asset("js/jquery.min.js")}}'></script>
<script src="{{ asset("js/jquery-ui.min.js")}}"></script>
<script src='{{ asset("js/fullcalendar.min.js")}}'></script>
{!! $calendar_details->script() !!} 
@endsection