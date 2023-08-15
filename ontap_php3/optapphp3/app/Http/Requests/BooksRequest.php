<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BooksRequest extends FormRequest
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
       $rules = [];
       $currenAction = $this->route()->getActionMethod();
       switch ($this->method()):
           case "POST":
               switch ($currenAction):
                   case 'addbook':
                       $rules = [
                           'title' => 'required',
                           'author' => 'required',
                           'price' => 'required',
                           'description' => 'required',
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
