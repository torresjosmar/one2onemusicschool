<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Formacionacademica Controller
 *
 * @property \App\Model\Table\FormacionacademicaTable $Formacionacademica
 */
class FormacionacademicaController extends AppController
{
    public function getformacionacademica() {
        $session = $this->request->session();
        $query = $this->Formacionacademica->find('all')
                     ->select(['idformacionacademica','descripcion','profesor_idprofesor'])
                     ->join([
                        'profesor' => [
                            'table' => 'profesor',
                            'conditions' => 'profesor_idprofesor = profesor.idprofesor'
                        ]
                     ])->where([
                         'profesor_idprofesor' => $session->consume('info')
                     ]);

            foreach($query as $row)
            {
                $result[] = $row;
            }
        //$query = $this->Formacionacademica->find('all')->where(['profesor_idprofesor'=>$session->consume('info')]);
        if(isset($result))
        {
            $session->write('info',$result);
        }
        else
        {
            $session->write('info',null);
        }
        $this->redirect(['controller'=>'usuario','action'=>'index']);
    }

    public function setnewformacionacademica() 
    {
        $session = $this->request->session();
        $request = $session->consume('info');
        $formacionacademica = $this->Formacionacademica->newEntity();
       
        $formacionacademica->descripcion = $request['profesor_formacion'];
        $formacionacademica->profesor_idprofesor = $request['idprofesor'];

        if($this->Formacionacademica->save($formacionacademica))
        {
            $this->Flash->success('Información Actualizada');
        }
        else
        {
            $this->Flash->error('Error al Actualizar Información');
        }
        $this->redirect(['controller'=>'usuario','action'=>'registro']);
    }

    public function delformacionacademica()
    {   
        $session = $this->request->session();
        $request = $session->consume('info');
        //$formacionacademica = $this->Formacionacademica->newEntity();
        $formacionacademica = $this->Formacionacademica->get($request['idformacionacademica']);
        //$result = $this->Articles->delete($entity);
        //$formacionacademica->idformacionacademica = $request['idformacionacademica'];
        if($this->Formacionacademica->delete($formacionacademica))
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
