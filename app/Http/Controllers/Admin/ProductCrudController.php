<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product');
        CRUD::setEntityNameStrings('product', 'products');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::setFromDb(); // columns
        CRUD::addColumn(
            [
                // 1-n relationship
                'label'     => 'Category', // Table column heading
                'type'      => 'select',
                'name'      => 'category_id', // the column that contains the ID of that connected entity;
                'entity'    => 'category', // the method that defines the relationship in your Model
                'attribute' => 'name_en', // foreign key attribute that is shown to user
                'model'     => "App\Models\Category", // foreign key model
            ],
        );

        CRUD::addColumn(
            [
                // 1-n relationship
                'label'     => 'Company', // Table column heading
                'type'      => 'select',
                'name'      => 'comapny_id', // the column that contains the ID of that connected entity;
                'entity'    => 'company', // the method that defines the relationship in your Model
                'attribute' => 'name_en', // foreign key attribute that is shown to user
                'model'     => "App\Models\Company", // foreign key model
            ],
        );
        CRUD::column('name_en');
        CRUD::column('desc_en');
        CRUD::addColumn(
            [
                'name' => 'image', // The db column name
                'label' => "Product Image", // Table column heading
                'type' => 'image',
                'prefix' => 'storage/',
                // optional width/height if 25px is not ok with you
                'height' => '60px',
                'width' => '60px',
            ],
        );
        CRUD::column('created_at');
        CRUD::column('updated_at');
        CRUD::removeColumn(
            [
                'tag_id','name_uz', 'name_ru','desc_uz','desc_ru','address_uz','address_ru','address_en'
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
        CRUD::setValidation(ProductRequest::class);

        // CRUD::setFromDb(); // fields
        CRUD::addField(
            [  // Select2
                'label'     => "Tag",
                'type'      => 'select2',
                'name'      => 'tag_id', // the db column for the foreign key
                'entity'    => 'tag', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                // 'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?
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
            [  // Select2
                'label'     => "Company",
                'type'      => 'select2',
                'name'      => 'company_id', // the db column for the foreign key
                'entity'    => 'company', // the method that defines the relationship in your Model
                'attribute' => 'name_en', // foreign key attribute that is shown to user
                
                'options'   => (function ($query) {
                        return $query->orderBy('name_en', 'ASC')->get();
                    }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
            ]
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

        CRUD::addField(
            [
                'label' => "Product image",
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
