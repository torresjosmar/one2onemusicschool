<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuarioFixture
 *
 */
class UsuarioFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'usuario';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idusuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'rol_idrol' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estado_idestado' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'email' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_usuarios_rol_idx' => ['type' => 'index', 'columns' => ['rol_idrol'], 'length' => []],
            'fk_usuarios_estado1_idx' => ['type' => 'index', 'columns' => ['estado_idestado'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idusuario'], 'length' => []],
            'fk_usuarios_estado1' => ['type' => 'foreign', 'columns' => ['estado_idestado'], 'references' => ['estado', 'idestado'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_usuarios_rol' => ['type' => 'foreign', 'columns' => ['rol_idrol'], 'references' => ['rol', 'idrol'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'idusuario' => 1,
                'rol_idrol' => 1,
                'estado_idestado' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
