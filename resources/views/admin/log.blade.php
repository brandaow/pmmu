@extends('adminlte::page')

@section('content_header')
    <h1>Administrador</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="#">Log</a></li>
    </ol>
@stop

@section('content')
	@include('includes.alerts')
	<div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Log de Atividades</h3>
                </div>
                <div class="box-body">
					<table id="presences" class="table table-striped table-bordered hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Usuário</th>
                                <th>Ação</th>
                                <th>Data</th>
							</tr>
						</thead>
						<tbody>
                            @forelse ($logs as $log)
                            <tr>
                                <td>{{$log->user->name}}</td>
                                <td>{{$log->action}}</td>
                                <td>
                                    @if (date('d/m/Y') == date('d/m/Y', strtotime($log->created_at)))
                                    Hoje, às {{ date('H:i', strtotime($log->created_at)) }}
                                    @elseif (date('d/m/Y', strtotime('yesterday')) == date('d/m/Y', strtotime($log->created_at)))
                                    Ontem, às {{ date('H:i', strtotime($log->created_at)) }}
                                    @else
                                    {{ date('d/m/Y à\s H:i', strtotime($log->created_at)) }}
                                    @endif
                                </td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        $(function () {
            $('#presences').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "language": {
                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "_MENU_ resultados por página",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sSearch": "Pesquisar",
                    "oPaginate": {
                        "sNext": "Próximo",
                        "sPrevious": "Anterior",
                        "sFirst": "Primeiro",
                        "sLast": "Último"
                    },
                    "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                    },
                    "select": {
                        "rows": {
                            "_": "Selecionado %d linhas",
                            "0": "Nenhuma linha selecionada",
                            "1": "Selecionado 1 linha"
                        }
                    }
                }
            });
		});
	</script>
@stop
