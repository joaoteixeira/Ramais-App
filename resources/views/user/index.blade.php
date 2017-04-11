@extends('app')

@section('content')
    <div id="" class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="page-header" style="margin-top: 20px">
                    <h1><small>Usuários</small></h1>
                </div>

                <table class="table table-striped">
                    <tr>
                        <th width="1%" class="text-center">#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Perfil</th>
                        <th class="text-center">Situação</th>
                        <th width="1%">#</th>
                    </tr>
                    {{--*/ $count = 0 /*--}}
                    @foreach($users as $user)
                    <tr>
                        <td class="text-center">{{ ++$count }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->rolesToString() }}</td>
                        <td class="text-center">
                            @if($user->status)
                                <span class="text-primary">Ativo</span>
                            @else
                                <span class="text-danger">Inativo</span>
                            @endif
                        </td>
                        <td class="text-nowrap">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Opções <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    @if(!$user->status)
                                        <li><a href="#">Liberar acesso</a></li>
                                    @else
                                        <li><a href="#">Bloquear acesso</a></li>
                                    @endif
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Excluir</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection