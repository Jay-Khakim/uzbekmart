<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CompanyRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CompanyCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CompanyCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Company::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/company');
        CRUD::setEntityNameStrings('company', 'companies');
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
                'tag_id', 'name_uz', 'name_ru', 'desc_en','desc_uz','desc_ru','address_uz','address_ru','address_en'
            ]
        );
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
        CRUD::addColumn(
            [
                // 1-n relationship
                'label'     => 'Categpry', // Table column heading
                'type'      => 'select',
                'name'      => 'category_id', // the column that contains the ID of that connected entity;
                'entity'    => 'category', // the method that defines the relationship in your Model
                'attribute' => 'name_en', // foreign key attribute that is shown to user
                'model'     => "App\Models\Category", // foreign key model
            ],
        );
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CompanyRequest::class);

        // CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
        // CRUD::addField(
        //     'name'=>
        // );
        CRUD::field('category_id')->size(6);
        CRUD::field('subcategory_id')->size(6);
        // CRUD::field('tag_id')->size(6);
        // CRUD::field('status  ')->size(6);
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
            [  // Select2
                'label'     => "Subcategory",
                'type'      => 'select2',
                'name'      => 'subcategory_id', // the db column for the foreign key
                'entity'    => 'subcategory', // the method that defines the relationship in your Model
                'attribute' => 'name_en', // foreign key attribute that is shown to user

                'options'   => (function ($query) {
                        return $query->orderBy('name_en', 'ASC')->get();
                    }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
            ]
        );

        CRUD::addField(
            [  // Select2
                'label'     => "Tag",
                'type'      => 'select2',
                'name'      => 'tag_id', // the db column for the foreign key
                'entity'    => 'tag', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                // 'select_all' => true, // show Select All and Clear buttons?

                'options'   => (function ($query) {
                        return $query->orderBy('name', 'ASC')->get();
                    }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
            ]
        );
         CRUD::addField(
            [   // Enum
                'name'  => 'status',
                'label' => 'Company Status',
                'type'  => 'enum'
            ],
        );

        CRUD::addField(
            [   // Enum
                'name'  => 'companytype',
                'label' => 'Company-Type',
                'type'  => 'enum'
            ],
        );
        
        CRUD::addField(
            [   
                'name'  => 'name_en',
                'label' => "Name En",
                'type'  => 'text',
            ],
        );

        CRUD::addField(
            [   
                'name'  => 'name_uz',
                'label' => "Name Uz",
                'type'  => 'text',
            ],
        );

        CRUD::addField(
            [   
                'name'  => 'name_ru',
                'label' => "Name Ru",
                'type'  => 'text',
            ],
        );
         CRUD::addField(
            [   
                'name'  => 'slug_en',
                'label' => "Slug En",
                'type'  => 'text',
            ],
        );

        CRUD::addField(
            [   // CKEditor
                'name'          => 'desc_en',
                'label'         => 'Description in English',
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
                'name'          => 'desc_uz',
                'label'         => 'Description in Uzbek',
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
                'name'          => 'desc_ru',
                'label'         => 'Description in Russian',
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

        CRUD::field('email')->size(6);
        CRUD::field('web')->size(6);
        
        CRUD::addField(
            [   // URL
                'name'  => 'web',
                'label' => 'Website of Company',
                'type'  => 'url'
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
            [   // Number
                'name' => 'phone',
                'label' => 'Phone Number',
                'type' => 'number',
                
                // optionals
                // 'attributes' => ["step" => "any"], // allow decimals
                'prefix'     => "+",
                // 'suffix'     => ".00",
            ],
        );
        
        CRUD::addField(
            [   
                'name'  => 'address_en',
                'label' => "Address of English",
                'type'  => 'text',
            ],
        );
        CRUD::addField(
            [   
                'name'  => 'address_uz',
                'label' => "Address of Uzbek",
                'type'  => 'text',
            ],
        );
        CRUD::addField(
            [   
                'name'  => 'address_ru',
                'label' => "Address of Russian",
                'type'  => 'text',
            ],
        );
        
        CRUD::addField(
            [
                'label' => "Company Logo",
                'name' => "image",
                'type' => 'image',
                'crop' => true, // set to true to allow cropping, false to disable
                'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
                'disk'      => 'uploads', // in case you need to show images from a different disk
                // 'prefix'    => 'uploads/images/profile_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
            ]
        );
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
