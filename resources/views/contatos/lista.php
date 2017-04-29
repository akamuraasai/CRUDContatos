<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h1 class="panel-title">Lista de Contatos</h1>
                <span class="pull-right clicavel" id="btn_lista"><i class="glyphicon glyphicon-chevron-up"></i></span>
            </div>
            <div class="panel-body" id="lista_body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Itens por página</label>
                            <select class="form-control" name="itens_pagina" id="itens_pagina" ng-model="paginator.itens">
                                <option ng-value="5">5</option>
                                <option ng-value="10">10</option>
                                <option ng-value="25">25</option>
                                <option ng-value="50">50</option>
                                <option ng-value="0">Todos</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="">Buscar Contato</label>
                            <input type="text" class="form-control" name="busca" id="busca" ng-model="paginator.busca">
                        </div>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="col-md-2 text-center">ID</th>
                        <th>Nome</th>
                        <th class="col-md-3">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr dir-paginate="item in filtrados = (itens | filter: paginator.busca) | itemsPerPage: paginator.itens" pagination-id="contatos_lista" current-page="paginator.atual">
                        <td class="col-md-2 text-center">{{ item.id }}</td>
                        <td>{{ item.nome }}</td>
                        <td>
                            <button class="btn btn-xs btn-success" ng-click="visualizar(item)"> <i class="fa fa-eye"></i> Visualizar</button>
                            <button class="btn btn-xs btn-warning" ng-click="edita(item)"> <i class="fa fa-edit"></i> Editar</button>
                            <button class="btn btn-xs btn-danger" ng-click="confirma(item, 1)"> <i class="fa fa-trash"></i> Remover</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="col-md-6">
                    <div class="btn-group">
                        <button class="btn btn-sm btn-primary" ng-click="novo()"> <i class="fa fa-plus"></i> Novo Contato</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <dir-pagination-controls pagination-id="contatos_lista" class="pagination pagination-sm pull-right"></dir-pagination-controls>
                </div>
            </div>
        </div>
    </div>
</div>