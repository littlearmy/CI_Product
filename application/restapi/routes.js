'use strict';

module.exports = function(app) {
    var jsn = require('./controller/controller');

    app.route('/')
        .get(jsn.index);

    app.route('/showallproduct')
        .get(jsn.showallproduct);
    
    app.route('/showproduct/:id')
        .get(jsn.showproduct);
    
    
}