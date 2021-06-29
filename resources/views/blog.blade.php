@extends('adminlte::page')

@section('content_header')
    <link rel="stylesheet" href="{{ asset('css/wysi.css') }}">
    <h1>Blog</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="#">Blog</a></li>
    </ol>
@stop

@section('content')
    @include('includes.session')
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Posts Públicos</h3>
                </div>            
                <div class="box-body pad">
					<table id="posts" class="table table-striped table-bordered hover" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">Título</th>
                                <th scope="col">Data</th>
                                <th scope="col">Autor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>
                                    @if(date('d/m/Y') == date('d/m/Y', strtotime($post->created_at)))
                                    Hoje
                                    @elseif(date('d/m/Y', strtotime('yesterday')) == date('d/m/Y', strtotime($post->created_at)))
                                    Ontem
                                    @else
                                    {{ date('d/m/Y', strtotime($post->created_at)) }}
                                    @endif
                                </td>
                                <td> {{ $post->user->name }} </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">Nenhum post para exibir.</td>
                            </tr>
                            @endforelse
                        </tfoot>
                    </table>	
				</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Novo Post</h3>
                </div>            
				<form role="form" method="POST" action="{{ route('newPost') }}" enctype="multipart/form-data">
					{!! csrf_field() !!}
                    <div class="box-body pad">
						<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
							<input type="text" class="form-control" name="title" placeholder="Título">
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
						<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
							<input type="file" class="btn bg-olive btn-sm btn-block" name="image">
                            @if ($errors->has('image'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>
						<div class="form-group {{ $errors->has('abstract') ? 'has-error' : '' }}">
							<textarea class="form-control" name="abstract" placeholder="Resumo"></textarea>
                            @if ($errors->has('abstract'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('abstract') }}</strong>
                                </span>
                            @endif
                        </div>
						<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
							<textarea class="textarea form-control" name="content" placeholder="Conteúdo" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            @if ($errors->has('content'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </span>
                            @endif
                        </div>
					</div>
                    <div class="box-footer">
                        <button type="submit" class="form-control btn btn-flat btn-success">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('js/wysi.js') }}"></script>
    <script>
        $(function () {
            $('.textarea').wysihtml5();

            $('#posts').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
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
@endsection
