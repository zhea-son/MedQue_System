<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore; }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('user', 'users');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name');
        CRUD::column('email');
        CRUD::column('age');
        CRUD::addColumn([
            'label' => 'Doctor',
            'type'  => 'text',
            'value' => function($v) {
                return $v->doctor() ? $v->doctor()->name : '';
            }
        ]);
        CRUD::addColumn([
            'label' => 'Department',
            'type'  => 'text',
            'value' => function($v) {
                return $v->dept() ? $v->dept()->name : '';
            }
        ]);
        CRUD::column('gender');
        CRUD::column('address');

        CRUD::addColumn([
            'name'  => 'roles',
            'label' => 'Roles',
            'type'  => 'text',
            'value' => function($v) {
                $str = '';
                foreach ($v->roles as $key => $value) {
                    if ($key == count($v->roles)-1)
                        $str .= $value->name;
                    else 
                        $str .= $value->name . ', ';
                }
                return $str;
            }
        ]);
        CRUD::column('address');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(UserRequest::class);

        $this->addUserFields();

        \App\Models\User::creating(function ($entry) {
            $entry->password = \Hash::make($entry->password);
            $entry->dept_id = $this->crud->getRequest()->dpt;
        });
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        CRUD::setValidation(UserEditRequest::class);
        
        $this->addUserFields(); 

        \App\Models\User::updating(function ($entry) {
            if (request('password') == null) {
                $entry->password = $entry->getOriginal('password');
            } else {
                $entry->password = \Hash::make(request('password'));
            }
            $entry->dept_id = $this->crud->getRequest()->dpt;
        });
    }

    protected function addUserFields()
    {
        CRUD::field('name');
        CRUD::field('email');
        CRUD::field('password');
        CRUD::field('age');
        
        $doctors = \App\Models\User::role('Doctor')->pluck('name','id')->toArray();
        CRUD::addField([
            // select_from_array
            'name'    => 'doctor_id',
            'label'   => 'Doctor',
            'type'    => 'select_from_array',
            'options' => $doctors,
        ]);

        $depts = \App\Models\Dept::pluck('name','id')->toArray();
        CRUD::addField([
            // select_from_array
            'name'    => 'dpt',
            'fake' => true,
            'label'   => 'Department',
            'type'    => 'select_from_array',
            'options' => $depts,
        ]);

        CRUD::addField([
            // select_from_array
            'name'    => 'gender',
            'label'   => 'Gender',
            'type'    => 'select_from_array',
            'options' => [
                0 => 'Male',
                1 => 'Female'
            ],
        ]);

        CRUD::addField([   // Checklist
            'label'     => 'Roles',
            'type'      => 'checklist',
            'name'      => 'roles',
            'entity'    => 'roles',
            'attribute' => 'name',
            'model'     => "Backpack\PermissionManager\app\Models\Role",
            'pivot'     => true,
            // 'number_of_columns' => 3,
        ]);

        CRUD::field('address');
    }
}
