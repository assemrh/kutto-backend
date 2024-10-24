<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PetRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PetCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PetCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Pet::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/pet');
        CRUD::setEntityNameStrings('pet', 'pets');
        // CRUD::field([   // Upload
        //     'name' => 'image',
        //     'label' => 'Image',
        //     'type' => 'upload',
        //     'attributes' => [
        //         'aria-label' => 'Email Address',
        //         'file' => 'file|mimes:jpeg,png,jpg,gif,svg',
        //     ],
        //     'file' => 'file|mimes:jpeg,png,jpg,gif,svg',
        //     'withFiles' => true
        // ]);
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.
        CRUD::field([   // Upload
            'name' => 'image',
            'label' => 'Image',
            'type' => 'upload',
            'withFiles' => true
        ]);
        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
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
        CRUD::setValidation(PetRequest::class);
        CRUD::setFromDb(); // set fields from db columns.
        CRUD::field([   // Upload
            'name' => 'image',
            'label' => 'Image',
            'type' => 'upload',
            'withFiles' => true,
            'attributes' => [
                'accept' => 'image/*',
            ],
            'file' => 'file|mimes:jpeg,png,jpg,gif,svg',
        ]);
        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
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
        $this->setupCreateOperation();
    }
}
