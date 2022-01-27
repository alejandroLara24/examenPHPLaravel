<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class GangaPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'url' => 'required',
            'category_id' => 'required|numeric|exists:categories,id',
            'points' => 'required|numeric',
            'price' => 'required|numeric',
            'discount_price' => 'required|numeric|gt:0|lt:price',
            'available' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El camp NOM es obligatori',
            'description.required' => 'El camp DESCRIPCIÓ es obligatori',
            'url.required' => 'El camp URL es obligatori',
            'category_id.required' => 'El camp CATEGORIA es obligatori',
            'points.required' => 'El camp PUNTS es obligatori',
            'price.required' => 'El camp PREU es obligatori',
            'discount_price.required' => 'El camp PREU AMB DESCOMPTE es obligatori',
            'available.required' => 'El camp DISPONIBLE es obligatori',
        ];
    }
}
