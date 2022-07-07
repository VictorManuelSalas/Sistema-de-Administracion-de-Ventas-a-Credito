<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Illuminate\Database\Capsule\Manager as Capsule;


include_once 'vendor/autoload.php';
include_once 'ventas.php';

// Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
    'displayErrorDetails' => true
]];
$app = new \Slim\App($config);
$capsule = new Capsule;

//Conexión a base de datos
$capsule->addConnection(array(
    'driver' => 'mysql',
    'host'   => 'localhost',
    'database' => 'sistem_credit',
    'username' => 'root',
    'password' => ''
));

$capsule->bootEloquent();
$capsule->setAsGlobal();

//Definir rutas
$app->group('/ventas', function () use ($app) {
    //Ruta para consultar todos los usuarios
    $app->get('/all', function () use ($app) {
        $ventas = Ventas::all();
        echo json_encode($ventas);
    });
    //Ruta para consultar un usuario por id
    $app->get('/id/{id}', function (
        Request $request,
        Response $response,
        array $args
    ) use ($app) {
        $id = $args['id'];
        $ventas = Ventas::find($id);
        echo json_encode($ventas);
    });
    //Ruta para insertar un usuario
    $app->post('/new', function (
        Request $request,
        Response $response,
        array $args
    ) use ($app) {
        $data = $request->getParsedBody();
        $ventas = new Ventas();

        
            $ventas->Articulo = $data["Articulo"]; 
            $ventas->Cantidad = $data["Cantidad"];
            $ventas->FechadeVenta = $data["FechadeVenta"];
            $ventas->Cliente = $data["Cliente"];
            $ventas->ACuantosMeses = $data["ACuantosMeses"];
            $ventas->img_url = $data["img_url"];
            $ventas->total = $data["total"];
        


        $insert = $ventas->save();
        if ($insert) {
            $response = array('code' => '200', 'msg' => 'insert OK');
            echo json_encode($response);
        } else {
            $response = array('code' => '500', 'msg' => 'insert ERROR');
            echo json_encode($response);
        }
    });
    //Ruta para actualizar un usuario
    $app->post('/update', function (
        Request $request,
        Response $response,
        array $args
    ) {
        $data = $request->getParsedBody();
        $id = $data['ID'];

        $update = Ventas::where('ID', '=', $id)->limit(1)->update(array(
       
            'Articulo' => $data["Articulo"],
            'Cantidad' => $data["Cantidad"],
            'FechadeVenta' => $data["FechadeVenta"],
            'Cliente' => $data["Cliente"],
            'ACuantosMeses' => $data["ACuantosMeses"],
            'total' => $data["total"]
        ));


        if ($update) {
            $response = array('code' => '200', 'msg' => 'Update OK');
            echo json_encode($response);
        } else {
            $response = array('code' => '500', 'msg' => 'Update ERROR');
            echo json_encode($response);
        }
    });
    //Ruta para eliminar un usuario
    $app->delete('/delete/{id}', function (
        Request $request,
        Response $response,
        array $args
    ) {
        $id = $args['id'];

        $delete = Ventas::where('id', '=', $id)->delete();

        if ($delete) {
            $response = array('code' => '200', 'msg' => 'Delete OK');
            echo json_encode($response);
        } else {
            $response = array('code' => '500', 'msg' => 'Delete ERROR');
            echo json_encode($response);
        }
    });
});

// Define app routes
$app->get('/hello/{name}', function ($request, $response, $args) {
    return $response->write("Hello " . $args['name']);
});

// Run app
$app->run();
