<?php
namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\PageSettingCrudRequest as StoreRequest;
use App\Http\Requests\PageSettingCrudRequest as UpdateRequest;

class PageSettingCrudController extends CrudController {

  public function setup()
    {
        $this->crud->setModel("App\Models\PageSetting");
        $this->crud->setRoute("admin/page-settings");
        $this->crud->setEntityNameStrings('pageSetting', 'pagesSetting');

        $this->crud->setColumns([
          [
            'name' => 'slug',
            'label' => 'Slug',
            'type' => 'text'
          ],
          [
            'name' => 'title',
            'label' => 'Page Title',
            'type' => 'text'
          ],
          [
            'name' => 'keyword',
            'label' => 'Keywords',
            'type' => 'multidimensional_array',
            'visible_key' => 'name'
          ]
        ]);

        $this->crud->addField([
          'name' => 'slug',
          'label' => "URL Segment (slug)"
        ]);
        $this->crud->addField([
          'name' => 'view',
          'label' => "View Content File"
        ]);
        $this->crud->addField([
          'name' => 'title',
          'label' => "Page SEO Title"
        ]);
        $this->crud->addField([
          'name' => 'description',
          'label' => "Page SEO Description",
          'type' => 'textarea'
        ]);
        $this->crud->addField([
          'name' => 'keyword',
          'label' => "Page SEO Keywords",
          'type' => 'table',
          'entity_singular' => 'keyword',
          'columns' => [
            'name' => 'Keyword'
          ],
          'max' => 10,
          'min' => 0
        ]);
    }

  public function store(StoreRequest $request)
  {
    return parent::storeCrud();
  }

  public function update(UpdateRequest $request)
  {
    return parent::updateCrud();
  }
}
