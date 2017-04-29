<div id="visualizarContato" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Visualizando Contato</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-1">
                        <label for="">ID</label>
                        <p>{{ aux_item.id }}</p>
                    </div>
                    <div class="col-md-11">
                        <label for="">Nome do Contato</label>
                        <p>{{ aux_item.nome }}</p>
                    </div>
                </div>
                <div class="row" ng-show="aux_item.emails.length">
                    <div class="col-md-12">
                        <label for="">Lista de E-mails</label>
                        <ul class="list-group">
                            <li class="list-group-item" ng-repeat="email in aux_item.emails">
                                {{ email.email }}
                                <span class="badge">{{ tipoEmail(email.tipo) }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row" ng-show="aux_item.telefones.length">
                    <div class="col-md-12">
                        <label for="">Lista de Telefones</label>
                        <ul class="list-group">
                            <li class="list-group-item" ng-repeat="telefone in aux_item.telefones">
                                {{ telefone.numero }}
                                <span class="badge">{{ tipoTelefone(telefone.tipo) }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>

    </div>
</div>