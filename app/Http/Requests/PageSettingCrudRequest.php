<?php
namespace App\Http\Requests;

use App\Models\PageSetting;
use App\Http\Requests\Request;
use Backpack\CRUD\app\Http\Requests\CrudRequest;

class PageSettingCrudRequest extends CrudRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $segment = $this->segment(3);
        $req_slug = $this->get('slug');
        $isEditing = ($segment && $segment == $this->get('id'));
        $isSlugExists = (PageSetting::whereSlug($req_slug)->count() > 0);

        $id = ($isEditing && $isSlugExists) ? ','.$this->segment(3) : '';

        return [
            'slug' => 'required|unique:page_setting,slug'.$id,
            'view' => 'required',
            'title' => 'max:60',
            'description' => 'max:150',
            'keyword' => 'max:180'
        ];
    }

}
