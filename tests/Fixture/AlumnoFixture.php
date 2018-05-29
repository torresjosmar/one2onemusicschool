<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlumnoFixture
 *
 */
class AlumnoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'alumno';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idalumno' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombres' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'usuario_idusuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'apellidos' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'edad' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'telefono_celular' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'telefono_fijo' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'foto_perfil' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nombre_responsable' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'apellido_responsable' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'subcategoria_idsubcategoria' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'provincia_idprovincia' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_alumno_usuario1_idx' => ['type' => 'index', 'columns' => ['usuario_idusuario'], 'length' => []],
            'fk_alumno_subcategoria1_idx' => ['type' => 'index', 'columns' => ['subcategoria_idsubcategoria'], 'length' => []],
            'fk_alumno_provincia1_idx' => ['type' => 'index', 'columns' => ['provincia_idprovincia'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idalumno'], 'length' => []],
            'fk_alumno_provincia1' => ['type' => 'foreign', 'columns' => ['provincia_idprovincia'], 'references' => ['provincia', 'idprovincia'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_alumno_subcategoria1' => ['type' => 'foreign', 'columns' => ['subcategoria_idsubcategoria'], 'references' => ['subcategoria', 'idsubcategoria'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_alumno_usuario1' => ['type' => 'foreign', 'columns' => ['usuario_idusuario'], 'references' => ['usuario', 'idusuario'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'idalumno' => 1,
                'nombres' => 'Lorem ipsum dolor sit amet',
                'usuario_idusuario' => 1,
                'apellidos' => 'Lorem ipsum dolor sit amet',
                'edad' => 1,
                'telefono_celular' => 'Lorem ipsum dolor ',
                'telefono_fijo' => 'Lorem ipsum dolor ',
                'foto_perfil' => 'Lorem ipsum dolor sit amet',
                'nombre_responsable' => 'Lorem ipsum dolor sit amet',
                'apellido_responsable' => 'Lorem ipsum dolor sit amet',
                'subcategoria_idsubcategoria' => 1,
                'provincia_idprovincia' => 1
            ],
        ];
        parent::init();
    }
}
