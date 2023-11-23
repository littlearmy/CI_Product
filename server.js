const express = require('express');
const bodyParser = require('body-parser');
const { listen } = require('express/lib/application');
const app = express();


app.use(bodyParser.urlencoded({extended: true}));
app.use(bodyParser.json());

var routes = require('./application/restapi/routes');
routes(app);

app.listen(3000, () => {
    console.log(`Server started on port 3000`);
});