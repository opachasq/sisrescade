<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'dni' => ['required','unique:clientes,dni','max:8'],
            'nombres' => ['required'],
            'apellidos' => ['required'],
            'celular' => ['required'],
            'correo' => ['required'],
            'direccion' => ['required']
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function($validator) {
            if($validator->errors()->count()) {
                if(!in_array($this->method(), ['PUT', 'PATCH'])) {
                    $validator->errors()->add('post', true);
                }
            }
        });
    }
}
