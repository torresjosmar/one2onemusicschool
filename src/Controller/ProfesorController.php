<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Profesor Controller
 *
 * @property \App\Model\Table\ProfesorTable $Profesor
 */
class ProfesorController extends AppController
{
    public function add()
    {
        $session = $this->request->session();
        $info_profesor = $session->consume('addinfo');
        $profesor = $this->Profesor->newEntity();

        $profesor->usuario_idusuario = $info_profesor['idusuario'];
        $profesor->nombres = $info_profesor['nombres'];
        $profesor->apellidos = $info_profesor['apellidos'];
        $profesor->edad = $info_profesor['edad'];
        $profesor->telefono_celular = $info_profesor['telefonomovil'];
        $profesor->telefono_fijo = $info_profesor['telefonofijo'];
        
        $this->Profesor->save($profesor);

        $this->redirect(['controller'=>'usuario','action'=>'registro']);
    }

    public function setdescripcion()
    {
        $session = $this->request->session();
        $request = $session->consume('info');
        $profesor = $this->Profesor->newEntity();
        $profesor->idprofesor = $request['id_profesor'];
        $profesor->descripcion = $request['profesor_descripcion'];
        $profesor->video_presentacion = $request['video_url'];
        
        if($this->Profesor->save($profesor))
        {
            $this->Flash->success('Información Actualizada');
        }

        else
        {
            $this->Flash->error('Error al Actualizar Información');
        }

        $this->redirect(['controller'=>'usuario','action'=>'registro']);
    }
}
