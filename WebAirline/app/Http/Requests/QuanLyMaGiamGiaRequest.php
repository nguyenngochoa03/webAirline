<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuanLyMaGiamGiaRequest extends FormRequest
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
    public function rules(): array
    {
        $rules = [];
        // lây các phương thức đang hoạt động
        $currentAction = $this->route()->getActionMethod();
        switch ($this->method()):
            case 'POST':
                switch ($currentAction):
                    case "addmagiamgia":
                        $rules = [
                            "TenMaGiamGia" => "required",
                            "GiaGiamGia" => "required|numeric", // Ví dụ: kiểm tra là số thực
                        ];
                        break;
                    case "editmagiamgia":
                        $rules = [
                            'TenMaGiamGia' => 'required',
                            'GiaGiamGia' => 'required|numeric|min:0', // Kiểm tra là số thực và phải lớn hơn hoặc bằng 0
                        ] ;
                        break;
                    default:
                        break;
                endswitch;
                break;
        endswitch;
        return $rules;
    }
    public function messages()
    {
        return [
            'TenMaGiamGia.required' => 'Bắt buộc phải nhập tên.',
            'GiaGiamGia.required' => 'Bắt buộc phải nhập giá vé.',
            'GiaGiamGia.numeric' => 'Giá vé phải là một số thực.',
            'GiaGiamGia.min' => 'Giá vé phải lớn hơn hoặc bằng 0.',
        ];
    }
}
