<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LisaRequest extends FormRequest
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
        $resuls = [];
        $curresAction = $this->route()->getActionMethod();
        switch ($this->method()):
            case "POST":
                switch ($curresAction):
                    case 'addlisa':
                        $resuls = [
                            "title" => 'required',
                            "author" => 'required',
                            "price" => 'required',
                            "description" => 'required',
                            "image" => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                            "email" => 'required',
                            "phone" => 'required'
                        ];
                        break;
                    default:
                        break;
                        endswitch;
                        break;
                        endswitch;
                        return $resuls;
    }
}
