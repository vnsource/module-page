<?php namespace VnsModules\Page;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required|unique:posts,slug,NULL,id,model,VnsModules\Page\Page',
            'title' => 'required|unique:posts',
            'excerpt' => 'required',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>  __('This is a required field.'),
            'slug.required' =>  __('This is a required field.'),
            'slug.unique' =>  __('Slug already exists.'),
            'title.required' =>  __('This is a required field.'),
            'title.unique' =>  __('Title already exists.'),
            'excerpt.required' =>  __('This is a required field.'),
            'content.required' =>  __('This is a required field.'),
        ];
    }

}