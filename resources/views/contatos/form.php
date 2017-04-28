<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h1 class="panel-title">Dados do Contato</h1>
                <span class="pull-right clicavel panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
            </div>
            <form>
                <div class="panel-body" id="dados_body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="nome" class="form-control" id="nome">
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
                                <th class="col-md-3">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="col-md-2 text-center">1</td>
                                <td>jonathan.willian@mail.com</td>
                                <td>Pessoal</td>
                                <td>
                                    <button class="btn btn-xs btn-success"> <i class="fa fa-eye"></i> Visualizar</button>
                                    <button class="btn btn-xs btn-warning"> <i class="fa fa-edit"></i> Editar</button>
                                    <button class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i> Remover</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i> Novo E-mail</button>
                    </div>
                    <div class="col-md-12" style="margin-top: 4em;">
                        <label for="nome">Lista de Telefones</label>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="col-md-2 text-center">ID</th>
                                <th>Numero de Telefone</th>
                                <th class="col-md-2">Tipo</th>
                                <th class="col-md-3">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="col-md-2 text-center">1</td>
                                <td>(11) 95555-4433</td>
                                <td>Celular</td>
                                <td>
                                    <button class="btn btn-xs btn-success"> <i class="fa fa-eye"></i> Visualizar</button>
                                    <button class="btn btn-xs btn-warning"> <i class="fa fa-edit"></i> Editar</button>
                                    <button class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i> Remover</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i> Novo Telefone</button>
                    </div>
                </div>
                <div class="panel-footer text-right" id="dados_footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i>
                        Salvar Contato
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>