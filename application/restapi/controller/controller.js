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

exports.addproduct = function(req,res){
    var product_name = req.body.product_name;
    var brand_id = req.body.brand_id;

    connection.query('INSERT INTO product (product_name,brand_id) VALUES(?,?)',[product_name,brand_id], function(error){
        if(error){
            console.log(error);
        }else {
            response.ok("Berhasil Menambahkan Data!",res)
        }
    });
};

exports.updateproduct = function(req,res){
    var product_id = req.body.product_id;
    var product_name = req.body.product_name;
    var brand_id = req.body.brand_id;

    connection.query('UPDATE product SET product_name = ?, brand_id = ? where product_id = ?',[product_name,brand_id,product_id], function(error){
        if(error){
            console.log(error);
        }else {
            response.ok("Berhasil Mengubah Data!",res)
        }
    });
};

exports.deleteproduct = function(req,res){
    var product_id = req.body.product_id;

    connection.query('DELETE from product where product_id = ?',[product_id], function(error){
        if(error){
            console.log(error);
        }else {
            response.ok("Berhasil Menghapus Data!",res)
        }
    });
};

