<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BikeRequest extends FormRequest
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
            'brand' => 'required',
            'model' => 'required | between: 2,30',
            'category_id' => 'required',
            'price' => 'required | numeric',
            'country' => 'required',
            'quantity' => 'required | numeric',
            'sold_item' => 'required | numeric',
            'cc' => 'required | numeric',
            'color' => 'required',
            'warranty' => 'required',
        ];
    }
}
