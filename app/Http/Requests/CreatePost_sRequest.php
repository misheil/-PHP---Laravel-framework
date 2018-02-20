<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePost_sRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'inputTitle' => 'required|max:150',
            'inputEmail' => 'required|max:100',
            'selectCatagory' => 'required',
            'inputPost' => 'required|max:300'
        ];
    }
}
