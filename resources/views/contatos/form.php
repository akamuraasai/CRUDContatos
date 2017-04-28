<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h1 class="panel-title">Dados do Contato</h1>
                <span class="pull-right clicavel panel-collapsed" id="btn_form"><i class="glyphicon glyphicon-chevron-down"></i></span>
            </div>
            <form>
                <div class="panel-body" id="dados_body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="nome" ng-model="item.nome" class="form-control" id="nome">
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 4em;">
                        <label for="nome">Lista de E-mails</label>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="col-md-2 text-center">ID</th>
                                <th>E-mail</th>
                                <th class="col-md-2">Tipo</th>
                                <th class="col-md-2">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr dir-paginate="email in item.emails | itemsPerPage: 5" pagination-id="emails_lista">
                                <td class="col-md-2 text-center">{{ email.id }}</td>

                                <td ng-show="!email.editando">{{ email.email }}</td>
                                <td ng-show="!email.editando">{{ tipoEmail(email.tipo) }}</td>

                                <td ng-show="email.editando">
                                    <input type="text" ng-model="email.email" class="form-control input-sm">
                                </td>
                                <td ng-show="email.editando">
                                    <select ng-model="email.tipo" class="form-control input-sm">
                                        <option ng-value="'1'" ng-selected="email.tipo == '1'">Pessoal</option>
                                        <option ng-value="'2'" ng-selected="email.tipo == '2'">Trabalho</option>
                                    </select>
                                </td>

                                <td>
                                    <button class="btn btn-xs btn-warning"
                                            ng-show="!email.editando"
                                            ng-click="email.editando = true">
                                        <i class="fa fa-edit"></i>
                                        Editar
                                    </button>
                                    <button class="btn btn-xs btn-primary"
                                            ng-show="email.editando"
                                            ng-click="email.editando = false">
                                        <i class="fa fa-save"></i>
                                        Alterar
                                    </button>
                                    <button class="btn btn-xs btn-danger"
                                            ng-click="confirma(email, 2, 'email-', item.emails)">
                                        <i class="fa fa-trash"></i>
                                        Remover
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="col-md-6">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-primary"
                                       ng-click="item.emails.push({email: '', tipo: '1', editando: true})">
                                    <i class="fa fa-plus"></i>
                                    Novo E-mail
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <dir-pagination-controls pagination-id="emails_lista" class="pagination pagination-sm pull-right"></dir-pagination-controls>
                        </div>
                    </div>


                    <div class="col-md-12" style="margin-top: 4em;">
                        <label for="nome">Lista de Telefones</label>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="col-md-2 text-center">ID</th>
                                <th>Numero de Telefone</th>
                                <th class="col-md-2">Tipo</th>
                                <th class="col-md-2">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr dir-paginate="fone in item.telefones | itemsPerPage: 5" pagination-id="fones_lista">
                                <td class="col-md-2 text-center">{{ fone.id }}</td>

                                <td ng-show="!fone.editando">{{ fone.numero }}</td>
                                <td ng-show="!fone.editando">{{ tipoTelefone(fone.tipo) }}</td>

                                <td ng-show="fone.editando">
                                    <input type="text" ng-model="fone.numero" class="form-control input-sm">
                                </td>
                                <td ng-show="fone.editando">
                                    <select ng-model="fone.tipo" class="form-control input-sm">
                                        <option ng-value="'1'" ng-selected="fone.tipo == '1'">Celular</option>
                                        <option ng-value="'2'" ng-selected="fone.tipo == '2'">Residencial</option>
                                        <option ng-value="'3'" ng-selected="fone.tipo == '3'">Trabalho</option>
                                    </select>
                                </td>

                                <td>
                                    <button class="btn btn-xs btn-warning"
                                            ng-show="!fone.editando"
                                            ng-click="fone.editando = true">
                                        <i class="fa fa-edit"></i>
                                        Editar
                                    </button>
                                    <button class="btn btn-xs btn-primary"
                                            ng-show="fone.editando"
                                            ng-click="fone.editando = false">
                                        <i class="fa fa-save"></i>
                                        Alterar
                                    </button>
                                    <button class="btn btn-xs btn-danger"
                                            ng-click="confirma(fone, 2, 'fone-', item.telefones)">
                                        <i class="fa fa-trash"></i>
                                        Remover
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="col-md-6">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-primary"
                                        ng-click="item.telefones.push({numero: '', tipo: '1', editando: true})">
                                    <i class="fa fa-plus"></i>
                                    Novo Telefone
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <dir-pagination-controls pagination-id="fones_lista" class="pagination pagination-sm pull-right"></dir-pagination-controls>
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-right" id="dados_footer">
                    <button type="submit" class="btn btn-default" ng-click="cancelar()">
                        Cancelar
                    </button>
                    <button type="submit" class="btn btn-primary" ng-click="confirma(item, 3)">
                        <i class="fa fa-save"></i>
                        Salvar Contato
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>