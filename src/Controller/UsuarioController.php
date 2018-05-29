<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Usuario Controller
 *
 */
class UsuarioController extends AppController
{
    public function index() // metodo utilizado para el perfil de usuario
    {
       $this->set('title','perfil de usuario');
    }

    public function registro()
    {
        $this->set('title','Registro');
        $session = $this->request->session();
        $usuario = $this->Usuario->newEntity();

        if ($this->request->is('post')) {
            debug($this->request->data); //impresion de informacion enviada via post
            $request = $this->request->data;
            
            if($request['tipo_usuario'] == '1' ) //registro alumno
            {
                $usuario->rol_idrol = '3';
                $usuario->estado_idestado = '1';//usuario verificado por defecto
                $usuario->email = $request['email'];
                $hasher = new DefaultPasswordHasher;
                $usuario->password = $hasher->hash($request['clave']);

                if($this->Usuario->save($usuario))
                {

                    $idususario = $usuario->idusuario;
                    $informacion_alumno['idusuario'] = $idususario;
                    $informacion_alumno['nombres'] = $request['alum_nombres'];
                    $informacion_alumno['apellidos'] = $request['alum_apellidos'];
                    $informacion_alumno['edad'] = $request['alum_edad'];
                    $informacion_alumno['nombresresponsable'] = $request['alum_nombresresponsable'];
                    $informacion_alumno['apellidosresponsable'] = $request['alum_apellidosresponsable'];
                    $informacion_alumno['telefonomovil'] = $request['alum_telefonomovil'];
                    $informacion_alumno['telefonofijo'] = $request['alum_telefonofijo'];

                    $session->write('addinfo',$informacion_alumno);
                    $this->requestAction('/alumno/add');

                    $this->Flash->success('Alumno creado con exito');
                    return $this->redirect(['controller' => 'Usuario', 'action' => 'index']);
                }
                
            }
            if($request['tipo_usuario'] == '2') //registro profesor
            {
                $usuario->rol_idrol = '2';
                $usuario->estado_idestado = '2';//usuario pendiente por verificar por defecto
                $usuario->email = $request['email'];
                $hasher = new DefaultPasswordHasher;
                $usuario->password = $hasher->hash($request['clave']);
                
                if($this->Usuario->save($usuario))
                {
                    $idususario = $usuario->idusuario;
                    $informacion_profesor['idusuario'] = $idususario;
                    $informacion_profesor['nombres'] = $request['prof_nombres'];
                    $informacion_profesor['apellidos'] = $request['prof_apellidos'];
                    $informacion_profesor['edad'] = $request['prof_edad'];
                    $informacion_profesor['telefonomovil'] = $request['prof_telefonomovil'];
                    $informacion_profesor['telefonofijo'] = $request['prof_telefonofijo'];

                    $session->write('addinfo',$informacion_profesor);
                    $this->requestAction('/profesor/add');

                    $this->Flash->success('Profesor creado con exito');
                    return $this->redirect(['controller' => 'Usuario', 'action' => 'index']);
                }
                
            }

            

        }
    }

    public function login()
    {
        $this->set('title','Login');
        if($this->request->is('post'))
        {
            $user = $this->Auth->identify();
            if($user)
            {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectURL());
            }
            else
            {
                $this->Flash->error('Usuario o Clave incorrectas, por favor intente nuevamente',['hey'=>'auth']);
            }
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

}
