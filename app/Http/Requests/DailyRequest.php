<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DailyRequest extends FormRequest
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
            'primresp' => 'required',
            'segunresp' => 'required',
            'tercresp' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'primresp.required' => '"O que você fez ontem?" é um campo obrigatório.',
            'segunresp.required' => '"O que você fará hoje?" é um campo obrigatório.',
            'tercresp.required' => '"Há algum impedimento no seu caminho?" é um campo obrigatório.',
        ];
    }
}

//php artisan make:request DailyRequest