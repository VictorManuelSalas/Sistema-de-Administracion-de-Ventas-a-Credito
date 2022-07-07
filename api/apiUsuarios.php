<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Illuminate\Database\Capsule\Manager as Capsule;


include_once 'vendor/autoload.php';
include_once 'usuarios.php';

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
$app->group('/usuarios', function () use ($app) {
    //Ruta para consultar todos los usuarios
    $app->get('/all', function () use ($app) {
        $usuarios = Usuarios::all();
        echo json_encode($usuarios);
    });
    //Ruta para consultar un usuario por id
    $app->get('/id/{id}', function (
        Request $request,
        Response $response,
        array $args
    ) use ($app) {
        $id = $args['id'];
        $usuario = Usuarios::find($id);
        echo json_encode($usuario);
    });
    //Ruta para insertar un usuario
    $app->post('/new', function (
        Request $request,
        Response $response,
        array $args
    ) use ($app) {
        $data = $request->getParsedBody();
        $usuario = new Usuarios();

        
            $usuario->id = $data["id"];
            $usuario->nombre = $data["nombre"]; 
            $usuario->ap_pat = $data["ap_pat"];
            $usuario->ap_mat = $data["ap_mat"];
            $usuario->edad = $data["edad"];
            $usuario->sexo = $data["sexo"];
            $usuario->telefono = $data["telefono"];
            $usuario->img_url = $data["img_url"];
            $usuario->email = $data["email"];
            $usuario->tipo_usuario = $data["tipo_usuario"];
        


        $insert = $usuario->save();
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
        $id = $data['id'];

        $update = Usuarios::where('id', '=', $id)->limit(1)->update(array(
       
            'nombre' => $data["nombre"],
            'ap_pat' => $data["ap_pat"],
            'ap_mat' => $data["ap_mat"],
            'edad' => $data["edad"],
            'sexo' => $data["sexo"],
            'telefono' => $data["telefono"],
            'email' => $data["email"],
            'tipo_usuario' => $data["tipo_usuario"]
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

        $delete = Usuarios::where('id', '=', $id)->delete();

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
