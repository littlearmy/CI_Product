'use strict';

var response = require('../res');
var connection = require('../connection');

exports.index = function(req, res){
    response.ok(" Application Running",res);
}

exports.showallproduct = function(req,res){
    connection.query('select * from product', function(error,rows,fields){
        if(error){
            console.log(error);
        }else {
            response.ok(rows, res)
        }
    });
};

exports.showproduct = function(req,res){
    let id = req.params.id;
    connection.query('select * from product where product_id = ?',[id], function(error,rows,fields){
        if(error){
            console.log(error);
        }else {
            response.ok(rows, res)
        }
    });
};

