<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;

/**
 * Usuario Controller
 *
 */
class UsuarioController extends AppController
{
    public function index() // metodo utilizado para el perfil de usuario
    {
       $this->set('title','perfil de usuario');
       $loguser = $this->Auth->user(); // informacion de usuario logeado
       $session = $this->request->session();

       if($loguser['id_rol'] == 1) // administrador 
       {
        
       }

       if($loguser['id_rol'] == 2) //profesor
       {
  

        if ($this->request->is('post'))
        {
            $request = $this->request->data;
            
            if(isset($request['profesor_descripcion'])) // actualizar descripcion
            {
                $session->write('info',$request);
                $this->requestAction('/profesor/setdescripcion'); // formacion academica del profesor
            }
            if(isset($request['profesor_formacion']))
            {
                $session->write('info',$request);
                $this->requestAction('/formacionacademica/setnewformacionacademica'); // agregar formacion academica del profesor
            }
            if(isset($request['idformacionacademica']))
            {
                $session->write('info',$request);
                $this->requestAction('/formacionacademica/delformacionacademica'); // eliminar formacion academica del profesor
            }
            if(isset($request['profesor_trayectoria']))
            {
                $session->write('info',$request);
                $this->requestAction('/trayectoria/setnewtrayectoria'); // agregar trayectoria del profesor
            }
            if(isset($request['idtrayectoria']))
            {
                $session->write('info',$request);
                $this->requestAction('/trayectoria/deltrayectoria'); // eliminar trayectoria del profesor
            }
        }

        $query = $this->Usuario->find('all')
                     ->select(['profesor.idprofesor','profesor.nombres','profesor.apellidos','profesor.edad','profesor.telefono_celular','profesor.telefono_fijo','profesor.foto_perfil','profesor.especialidad','profesor.descripcion','profesor.video_presentacion','profesor.provincia_idprovincia','profesor.url_facebook','profesor.url_twitter','profesor.url_instagram'])
                     ->join([
                        'profesor' => [
                            'table' => 'profesor',
                            'conditions' => 'idusuario = profesor.usuario_idusuario'
                        ]
                     ]);

            foreach($query as $row)
            {
                $result[] = $row;
            }       

        $this->set('info_profesor',$result); // informacion general del profesor
        $session->write('info',$result[0]->profesor['idprofesor']);
        $this->requestAction('/formacionacademica/getformacionacademica'); // formacion academica del profesor
        $this->set('formacionacademica',$session->consume('info'));
        $session->write('info',$result[0]->profesor['idprofesor']);
        $this->requestAction('/trayectoria/gettrayectoria'); // formacion academica del profesor
        $this->set('trayectoria',$session->consume('info'));
       }

       if($loguser['id_rol'] == 3) //alumno
       {
            $query = $this->Usuario->find('all')
                     ->select(['alumno.idalumno','alumno.nombres','alumno.apellidos','alumno.edad','alumno.telefono_celular','alumno.telefono_fijo','alumno.foto_perfil','alumno.nombre_responsable','alumno.apellido_responsable','alumno.subcategoria_idsubcategoria','alumno.provincia_idprovincia'])
                     ->join([
                        'alumno' => [
                            'table' => 'alumno',
                            'conditions' => 'idusuario = alumno.usuario_idusuario'
                        ]
                     ]);

            foreach($query as $row)
            {
                $result[] = $row;
            }         

            $this->set('info_alumno',$result); // informacion general del alumno

            $this->requestAction('/categoria/getcategorias'); // informacion de categorias y subcategorias de cursos
            $this->set('infocategorias',$session->consume('info'));

            if(!isset($result[0]->alumno['subcategoria_idsubcategoria']) || !isset($result[0]->alumno['provincia_idprovincia']))
            {
                $this->Flash->warning('Por Favor completa tu informacion personal');
            }
            
       }

       



    }

    public function registro()
    {

$this->viewBuilder()->setLayout('registro');
        $this->set('title','registro');


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
        $this->viewBuilder()->setLayout('login');
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
