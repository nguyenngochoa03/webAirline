<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuanLyDatVeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
                    case "adddatve":
                        $rules = [
                            "Name" => "required",
                            "NgayDatVe" => "required|date", // Ví dụ: kiểm tra định dạng ngày
                            "NgayKhoihanh" => "required|date", // Ví dụ: kiểm tra định dạng ngày
                            "SoLuong" => "required|integer", // Ví dụ: kiểm tra là số nguyên
                            "GiaVe" => "required|numeric", // Ví dụ: kiểm tra là số thực
                        ];
                        break;
                        endswitch;
        endswitch;
        return $rules;
    }
}
