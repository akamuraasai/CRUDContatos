import App from '../base/App';
import CrudBase from '../base/CrudBase';

class ContatosCrud extends CrudBase {
    constructor($scope, $http) {
        super($scope, $http);

        this.scope.url_base = '/';
        this.scope.first_field = '#nome';
        this.novo_item = {telefones: [], emails: []};
        this.scope.lista();
        this.scope.tipoEmail = this.tipoEmail;
        this.scope.tipoTelefone = this.tipoTelefone;
    }

    tipoEmail(tipo) {
        if (tipo == '1') return 'Pessoal';
        else if (tipo == '2') return 'Trabalho';
    }

    tipoTelefone(tipo) {
        if (tipo == '1') return 'Celular';
        else if (tipo == '2') return 'Residencial';
        else if (tipo == '3') return 'Trabalho';
    }
}

let main = App();
main.controller('mainCtrl', ContatosCrud);