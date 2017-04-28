export default class CrudBase {
    constructor($scope, $http) {
        this.scope = $scope;
        this.http = $http;

        this.scope.itens = [];
        this.scope.item = {};
        this.scope.aux_item = {};
        this.scope.aux_lista = [];
        this.scope.paginator = {
            itens: 5,
            atual: 1,
            busca: ''
        };

        this.lista = this.lista.bind(this);
        this.novo = this.novo.bind(this);
        this.edita = this.edita.bind(this);
        this.remove = this.remove.bind(this);
        this.confirma = this.confirma.bind(this);
        this.mensagem = this.mensagem.bind(this);
        this.cancelar = this.cancelar.bind(this);
        this.removeFilho = this.removeFilho.bind(this);

        this.scope.novo = this.novo;
        this.scope.edita = this.edita;
        this.scope.lista = this.lista;
        this.scope.remove = this.remove;
        this.scope.confirma = this.confirma;
        this.scope.mensagem = this.mensagem;
        this.scope.cancelar = this.cancelar;
    }

    novo() {
        this.scope.item = {};
        this.collapse('#btn_lista', false);
        this.collapse('#btn_form', true);
        setTimeout(() => {
            $(this.scope.first_field).focus();
        }, 100);
    }

    edita(item) {
        this.scope.item = item;
        this.collapse('#btn_lista', false);
        this.collapse('#btn_form', true);
        setTimeout(() => {
            $(this.scope.first_field).focus();
            // this.mascaras(true);
        }, 100);
    }

    cancelar() {
        this.scope.item = {};
        this.collapse('#btn_lista', true);
        this.collapse('#btn_form', false);
    }

    collapse(elemento, estado) {
        var $this = $(elemento);
        if(!estado) {
            $this.parents('.panel').find('.panel-body, .panel-footer').slideUp();
            $this.addClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        } else {
            $this.parents('.panel').find('.panel-body, .panel-footer').slideDown();
            $this.removeClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        }
    }

    lista(qnt = 0) {
        let req = {
            url: `${this.scope.url_base}listar` + (qnt != 0 ? `/${qnt}` : ''),
            method: 'GET'
        };
        this.http(req)
            .then(dados => { this.scope.itens = dados.data; },
                dados => { console.error(dados); });
    }

    remove(id, filho = '') {
        let req = {
            url: `${this.scope.url_base}${filho}deletar`,
            method: 'POST',
            data: {
                id: id
            }
        };
        if (filho != '') {
            if (id == null) {
                this.removeFilho();
                setTimeout(() => { this.mensagem(false, "Registro removido com sucesso."); }, 400);
                return;
            } else
                return this.requisicao(req, false, this.removeFilho);
        }


        this.requisicao(req, true);
    }

    removeFilho() {
        this.scope.aux_lista.splice(this.scope.aux_lista.indexOf(this.scope.aux_item), 1);
        if (!this.scope.$$phase)
            this.scope.$apply();
    }

    salva(item) {
        let req = {
            url: `${this.scope.url_base}salvar`,
            method: 'POST',
            data: {
                item: item
            }
        };
        this.requisicao(req, true, this.cancelar);
    }

    confirma(item, acao, filho = '', lista = null) {
        this.scope.aux_item = item;
        this.scope.aux_lista = lista;
        let msg = {
            title: 'Confirmar Ação',
            text: '',
            type: 'error', //info - success - danger - etc
            allowOutsideClick: true, // permite fechar clicando fora?
            showConfirmButton: true, // mostra o botão de confirmação?
            showCancelButton: true, // mostra o botão de cancelar?
            confirmButtonClass: 'btn-danger', // btn-info - success - danger - etc
            cancelButtonClass: 'btn-default', // info - success - danger - etc
            closeOnConfirm: true, // a modal fecha ao confirmar a ação?
            closeOnCancel: true, // a modal fecha ao cancelar a ação?
            confirmButtonText: "Confirmar", // texto exibido no botão de confirmar
            cancelButtonText: "Cancelar", // texto exibido no botão de cancelar
        };
        if (acao == 1 || acao == 2) msg.text = 'Tem certeza de que deseja remover este registro?';
        if (acao == 3) {
            msg.text = 'Tem certeza de que deseja salvar as alterações?';
            msg.type = 'info';
            msg.confirmButtonClass = 'btn-success';
        }
        this.mensagem(true, msg, acao, filho);
    }

    mensagem(confirm, mensagem, acao = null, filho = null) {
        if (confirm)
            swal(mensagem,
                confirmacao => {
                    if (confirmacao){
                        if (acao == 1)
                            this.remove(this.scope.aux_item.id);
                        else if (acao == 2)
                            this.remove(this.scope.aux_item.id, filho)
                        else if (acao == 3)
                            this.salva(this.scope.item);
                    }
                });
        else
            swal("Resultado da operação", mensagem, "info");
    }

    requisicao(req, refresh, funcao = null) {
        this.http(req)
            .then(data => {
                    if (funcao != null) funcao();
                    setTimeout(() => this.mensagem(false, data.data.mensagem), 100);
                    if (refresh && !this.self_model)
                        this.lista();
                },
                data  => { this.trataErro(data.data); });
    }

    trataErro(data) {
        console.error(data);
        let msg = Object.keys(data).map(valor => data[valor].join(" ")).join("\n");
        this.mensagem(false, msg);
    }
}
