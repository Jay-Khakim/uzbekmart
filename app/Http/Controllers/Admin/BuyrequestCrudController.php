<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BuyrequestRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class BuyrequestCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BuyrequestCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkCloneOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Buyrequest::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/buyrequest');
        CRUD::setEntityNameStrings('buyrequest', 'buyrequests');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // columns
        CRUD::removeColumn(
            [
                'name_uz', 'name_ru','company_uz','company_ru','wants_uz','wants_ru','wants_en', 'amount_uz','amount_ru',
            ]
        );

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
        CRUD::setValidation(BuyrequestRequest::class);

        // CRUD::setFromDb(); // fields
        CRUD::addField(
            [  // Select2
                'label'     => "Tags",
                'type'      => 'select2_multiple',
                'name'      => 'tag_id', // the db column for the foreign key
                'entity'    => 'tag', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?
                // 'select_all' => true, // show Select All and Clear buttons?

                'options'   => (function ($query) {
                        return $query->orderBy('name', 'ASC')->get();
                    }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
            ]
        );

        CRUD::addField(
            [  // Select2
                'label'     => "Category",
                'type'      => 'select2',
                'name'      => 'category_id', // the db column for the foreign key
                'entity'    => 'category', // the method that defines the relationship in your Model
                'attribute' => 'name_en', // foreign key attribute that is shown to user
                
                'options'   => (function ($query) {
                        return $query->orderBy('name_en', 'ASC')->get();
                    }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
            ]
        );
        CRUD::addField(
            [   
                'name'  => 'name_en',
                'label' => "Name in En",
                'type'  => 'text',
            ],
        );

        CRUD::addField(
            [   
                'name'  => 'name_uz',
                'label' => "Name in Uz",
                'type'  => 'text',
            ],
        );

        CRUD::addField(
            [   
                'name'  => 'name_ru',
                'label' => "Name in Ru",
                'type'  => 'text',
            ],
        );
        CRUD::addField(
            [   // Email
                'name'  => 'email',
                'label' => 'Email Address',
                'type'  => 'email'
            ],
        );

        CRUD::addField(
            [   
                'name'  => 'company_en',
                'label' => "Company Name in En",
                'type'  => 'text',
            ],
        );

        CRUD::addField(
            [   
                'name'  => 'company_uz',
                'label' => "Company Name in Uz",
                'type'  => 'text',
            ],
        );

        CRUD::addField(
            [   
                'name'  => 'company_ru',
                'label' => "Company Name in Ru",
                'type'  => 'text',
            ],
        );
        CRUD::addField(
            [   // CKEditor
                'name'          => 'wants_en',
                'label'         => 'What he/she wants in English',
                'type'          => 'ckeditor',

                // optional:
                // 'extra_plugins' => ['oembed', 'widget'],
                'options'       => [
                    'autoGrow_minHeight'   => 100,
                    'autoGrow_bottomSpace' => 30,
                    'removePlugins'        => 'resize,maximize',
                ]
            ],
        );
        CRUD::addField(
            [   // CKEditor
                'name'          => 'wants_uz',
                'label'         => 'What he/she wants in Uzbek',
                'type'          => 'ckeditor',

                // optional:
                // 'extra_plugins' => ['oembed', 'widget'],
                'options'       => [
                    'autoGrow_minHeight'   => 100,
                    'autoGrow_bottomSpace' => 30,
                    'removePlugins'        => 'resize,maximize',
                ]
            ],
        );
        CRUD::addField(
            [   // CKEditor
                'name'          => 'wants_ru',
                'label'         => 'What he/she wants in Russian',
                'type'          => 'ckeditor',

                // optional:
                // 'extra_plugins' => ['oembed', 'widget'],
                'options'       => [
                    'autoGrow_minHeight'   => 100,
                    'autoGrow_bottomSpace' => 30,
                    'removePlugins'        => 'resize,maximize',
                ]
            ],
        );
        CRUD::addField(
            [   
                'name'  => 'amount_en',
                'label' => "Amount of goods in En",
                'type'  => 'text',
            ],
        );

        CRUD::addField(
            [   
                'name'  => 'amount_uz',
                'label' => "Amount of goods in Uz",
                'type'  => 'text',
            ],
        );

        CRUD::addField(
            [   
                'name'  => 'amount_ru',
                'label' => "Amount of goods in Ru",
                'type'  => 'text',
            ],
        );
        CRUD::field('amount_en')->size(4);
        CRUD::field('amount_uz')->size(4);
        CRUD::field('amount_ru')->size(4);
        CRUD::addField(
            [
                'label' => "Image",
                'name' => "image",
                'type' => 'image',
                'crop' => true, // set to true to allow cropping, false to disable
                'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
                // 'disk'      => 's3_bucket', // in case you need to show images from a different disk
                // 'prefix'    => 'uploads/images/profile_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
            ]);
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
        $this->setupCreateOperation();
    }
}
