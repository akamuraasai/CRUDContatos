import Angular from 'angular';
import dirPagination from 'angular-utils-pagination';

export default () => {
    let app = Angular.module('mainApp', [dirPagination]);
    return app;
}
