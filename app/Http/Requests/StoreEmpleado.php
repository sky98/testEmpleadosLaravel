<?php

namespace App\Http\Requests;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreEmpleado extends FormRequest
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
            'nombre'        => 'required|regex:/^[\pL\s\-]+$/u',
            'email'         => 'required|unique:empleados|email',
            'sexo'          => 'required|in:M,F',
            'area_id'       => 'required|exists:areas,id',
            'boletin'       => 'required',
            'descripcion'   => 'required',
            'roles'         => 'required|array',
            //'roles.*.id'    => 'required|exists:rols,id'
        ];
    }

     /**
    * Handle a failed validation attempt.
    *
    * @param \Illuminate\Contracts\Validation\Validator $validator
    * @return void
    *
    * @throws \Illuminate\Validation\ValidationException
    */
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(response()->json(['errors' => $errors
        ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    }

    public function response(){
        if ($this->expectsJson()) {
            return new JsonResponse($errors, 422);
        }
    }
}
