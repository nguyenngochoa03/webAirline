<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
            $rules =[];
            $currentAction = $this->route()->getActionMethod();
            switch ($this->method()):
                case 'POST':
                    switch ($currentAction):
                        case 'addpro':
                            $rules = [
                                'name' => 'required',
                                'email' => 'required|unique:product,email',
                                'phone' => 'required|unique:product,phone',
                                'addess' => 'required',
                                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                            ];
                            break;
                        default:
                            break;
                            endswitch;
                            break;
                            endswitch;
                            return $rules;
    }
}
