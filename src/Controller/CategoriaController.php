<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Categoria Controller
 *
 * @property \App\Model\Table\CategoriaTable $Categoria
 */
class CategoriaController extends AppController
{

    public function getcategorias()
    {
        $session = $this->request->session();
        $query = $this->Categoria->find('all')
                     ->select(['idcategoria','nombre','descripcion','subcategoria.idsubcategoria','subcategoria.nombre','subcategoria.descripcion'])
                     ->join([
                        'subcategoria' => [
                            'table' => 'subcategoria',
                            'conditions' => 'idcategoria = subcategoria.categoria_idcategoria'
                        ]
                     ]);

        foreach($query as $row)
        {
            $result[] = $row;
        }

        $session->write('info',$result);
        $this->redirect(['controller'=>'usuario','action'=>'index']);

    }
    

}
