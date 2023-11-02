'use strict';

module.exports = function(app) {
    var jsn = require('./controller/controller');

    app.route('/')
        .get(jsn.index);

    app.route('/showallproduct')
        .get(jsn.showallproduct);
    
    app.route('/showproduct/:id')
        .get(jsn.showproduct);

    app.route('/addproduct')
        .post(jsn.addproduct);

    app.route('/updateproduct')
        .post(jsn.updateproduct);
    
    app.route('/deleteproduct')
        .post(jsn.deleteproduct);

    app.route('/showallproductbrand')
        .get(jsn.showallproductbrand);
    
    app.route('/showproductbrand/:id')
        .get(jsn.showproductbrand);

    app.route('/addproductbrand')
        .post(jsn.addproductbrand);

    app.route('/updateproductbrand')
        .post(jsn.updateproductbrand);
    
    app.route('/deleteproductbrand')
        .post(jsn.deleteproductbrand);

    // app.route('/showreport')
    //     .get(jsn.showreportproduct);
}