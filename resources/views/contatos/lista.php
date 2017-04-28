<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h1 class="panel-title">Lista de Contatos</h1>
                <span class="pull-right clicavel" id="btn_lista"><i class="glyphicon glyphicon-chevron-up"></i></span>
            </div>
            <div class="panel-body" id="lista_body">
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
                            <button class="btn btn-xs btn-success"> <i class="fa fa-eye"></i> Visualizar</button>
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