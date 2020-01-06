<?php

namespace App\Http\Requests\Area;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class RequestStore extends FormRequest
{

    protected $redirectRoute = 'areas.index'; // si falla
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
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_area' => 'required',
            'descripcion_area' => 'required',            
        ];
    }

    public function messages()
{
    return [
        'nombre_area.required' => 'Nombre del area es obligatorio',
        'descripcion_area.required'  => 'Ingrese la descricpion',
    ];
}

public function attributes()
{
    return [
        'nombre_area' => 'nombre del producto',
        'descripcion_area' => 'precio de venta',
    ];
}


public function response(array $errors)
    {
        if ($this->expectsJson()) {
            return new JsonResponse($errors, 422);
        }
 
        return $this->redirector->to($this->getRedirectUrl())
            ->withInput($this->except($this->dontFlash))
            ->withErrors($errors, $this->errorBag);
    }
}
