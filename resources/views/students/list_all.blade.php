<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$title or "Administração Mittel"}}</title>

    {{--<!-- Bootstrap Core CSS -->--}}
    {{--<link href="{{ URL::asset('/bootstrap-heroic-features/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">>--}}

    {{--<!-- Custom CSS -->--}}
    {{--<link href="{{ URL::asset('/bootstrap-heroic-features/css/heroic-features.css') }}" rel="stylesheet">--}}

    <!-- DataTables CSS -->
    <link href="{{ URL::asset('/datatables/css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Plugins CSS -->
    <link href="{{ URL::asset('/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{URL::asset('/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">

    <!--Icons -->
    <link href="{{ URL::asset('/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- jQuery -->

    <script src="{{ URL::asset('/js/jquery.js')}}"></script>

    {{--<!-- Bootstrap Core JavaScript -->--}}
    {{--<script src="{{ URL::asset('/bootstrap-heroic-features/js/bootstrap.min.js')}}"></script>--}}

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ URL::asset('/vendor/metisMenu/dist/metisMenu.min.js')}}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{ URL::asset('/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::asset('/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('/datatables-responsive/dataTables.responsive.js')}}"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document)
            .ready(function() {
                $('#table_results').DataTable({
                    "pageLength": 5,
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
                    },
                });
            } );
    </script>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">

                <div class="panel-heading" style="background-color: #dff0d8 !important;">
                    <b>Lista de Alunos</b>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body" style="background-color: #dff0d8">
                    <table id="table_results" class="table table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr style="background-color: #faebcc;">
                            <th>
                                Nome
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Data de Cadastro
                            </th>
                            <th>
                                Data de Edição
                            </th>
                            <th>
                                Visualizar
                            </th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr style="background-color: #faebcc;">
                            <th>
                                Nome
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Data de Cadastro
                            </th>
                            <th>
                                Data de Edição
                            </th>
                            <th>
                                Visualizar
                            </th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td style="width: 200px; text-align: center">{{$user->name}}</td>
                                <td style="width: 350px; text-align: center">{{$user->email}}</td>
                                <td data-search="{{date("d/m/Y",strtotime($user->created_at))}}"
                                    data-order="{{strtotime($user->created_at)}}" style="width: 180px; text-align: center">
                                    {{date("d/m/Y",strtotime($user->created_at))}}
                                </td>
                                <td data-search="{{date("d/m/Y",strtotime($user->updated_at))}}"
                                    data-order="{{strtotime($user->updated_at)}}"style="width: 200px; text-align: center">
                                    {{date("d/m/Y",strtotime($user->updated_at))}}
                                </td>
                                <td style="width: 100px; text-align: center">
                                    <a href="{{route('usuarios.show', $user->id)}}" title="Visualizar Cliente" style="color: black;">
                                        <i class="fa fa-search fa-2x" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <p>Não Existem Alunos Cadastrados</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</body>

</html>