<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePromotionsRequest extends FormRequest
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
                'nombre' => 'required',
                'fecha inicio' => 'required',
                'fecha vencimiento' => 'required',
                'desc' => 'required',
                'id empleado' => 'required'
        ];
    }
}
