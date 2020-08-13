<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InvestmentRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class InvestmentCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class InvestmentCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Investment::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/investment');
        CRUD::setEntityNameStrings('investment', 'investments');
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
                'tag_id','title_uz', 'title_ru', 'slug_en','avaragepower_uz','avaragepower_ru','address_uz','address_ru','address_en'
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
        CRUD::setValidation(InvestmentRequest::class);
        // CRUD::field('subcategory_id')->size(6);
        
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
                // 'attribute' => 'name_ru', // foreign key attribute that is shown to user
                
                'options'   => (function ($query) {
                    return $query->orderBy('name_en', 'ASC')->get();
                }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
                ]
            );
        CRUD::addField(
            [   
                'name'  => 'title_en',
                'label' => "Title in En",
                'type'  => 'text',
            ],
        );
        
        CRUD::addField(
            [   
                'name'  => 'title_uz',
                'label' => "Title in Uz",
                'type'  => 'text',
            ],
        );
        
        CRUD::addField(
            [   
                'name'  => 'title_ru',
                'label' => "Title in Ru",
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
        
        CRUD::field('amount')->size(6);
        CRUD::field('payback')->size(6);
        CRUD::addField(
            [   
                'name'  => 'amount',
                'label' => "Amount of Investmentin mln dollars",
                'type'  => 'text',
            ],
        );
        CRUD::field('avaragepower_en')->size(4);
        CRUD::field('avaragepower_uz')->size(4);
        CRUD::field('avaragepower_ru')->size(4);
        CRUD::field('iir')->size(4);
        CRUD::field('npv')->size(4);
        CRUD::field('workplaces')->size(4);

        CRUD::addField(
            [   
                'name'  => 'avaragepower_en',
                'label' => "Avarage Yearly Power in En",
                'type'  => 'text',
            ],
        );CRUD::addField(
            [   
                'name'  => 'avaragepower_uz',
                'label' => "Avarage Yearly Power in Uz",
                'type'  => 'text',
            ],
        );CRUD::addField(
            [   
                'name'  => 'avaragepower_ru',
                'label' => "Avarage  Yearly Power in Ru",
                'type'  => 'text',
            ],
        );
        CRUD::addField(
            [   
                'name'  => 'iir',
                'label' => "IIR for 10 year (%)",
                'type'  => 'text',
            ],
        );
        CRUD::addField(
            [   
                'name'  => 'npv',
                'label' => "NPV for 10 years mln dollars",
                'type'  => 'text',
            ],
        );
        CRUD::addField(
            [   
                'name'  => 'payback',
                'label' => "Payback (mounths)",
                'type'  => 'text',
            ],
        );
        CRUD::addField(
            [   
                'name'  => 'workplaces',
                'label' => "Work Places",
                'type'  => 'text',
            ],
        );



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
