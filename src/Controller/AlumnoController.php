<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Alumno Controller
 *
 *
 * @method \App\Model\Entity\Alumno[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlumnoController extends AppController
{

  
    public function add()
    {
        $session = $this->request->session();
        $info_alumno = $session->consume('addinfo');
        $alumno = $this->Alumno->newEntity();

        $alumno->usuario_idusuario = $info_alumno['idusuario'];
        $alumno->nombres = $info_alumno['nombres'];
        $alumno->apellidos = $info_alumno['apellidos'];
        $alumno->edad = $info_alumno['edad'];
        $alumno->telefono_celular = $info_alumno['telefonomovil'];
        $alumno->telefono_fijo = $info_alumno['telefonofijo'];
        $alumno->nombre_responsable = $info_alumno['nombresresponsable'];
        $alumno->apellido_responsable = $info_alumno['apellidosresponsable'];

        $this->Alumno->save($alumno);

        $this->redirect(['controller'=>'usuario','action'=>'registro']);
       
    }

    
}
