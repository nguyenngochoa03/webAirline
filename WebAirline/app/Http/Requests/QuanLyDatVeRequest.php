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
                    case "adddatve":
                        $rules = [
                            "DiemKhoiHanh" => "required",
                            "DiemDen" => "required",
                            "NgayDatVe" => "required|date", // Ví dụ: kiểm tra định dạng ngày
                            "NgayKhoiHanh" => "required|date", // Ví dụ: kiểm tra định dạng ngày
                            "SoLuong" => "required|integer", // Ví dụ: kiểm tra là số nguyên
                            "GiaVe" => "required|numeric", // Ví dụ: kiểm tra là số thực
                        ];
                        break;
                    case "editdatve":
                        $rules = [
                            "DiemKhoiHanh" => "required",
                            "DiemDen" => "required",
                            'NgayDatVe' => 'nullable|date', // Cho phép để trống hoặc là định dạng ngày
                            'NgayKhoiHanh' => 'nullable|date', // Cho phép để trống hoặc là định dạng ngày
                            'SoLuong' => 'required|integer|min:1', // Kiểm tra là số nguyên và phải lớn hơn hoặc bằng 1
                            'GiaVe' => 'required|numeric|min:0', // Kiểm tra là số thực và phải lớn hơn hoặc bằng 0
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
        'DiemKhoiHanh.required' => 'Bắt buộc phải nhập điểm khởi hành.',
        'DiemDen.required' => 'Bắt buộc phải nhập điểm đến.',
        'NgayDatVe.required' => 'Bắt buộc phải nhập ngày đặt vé.',
        'NgayDatVe.date' => 'Ngày đặt vé phải là định dạng ngày.',
        'NgayKhoiHanh.required' => 'Bắt buộc phải nhập ngày khởi hành.',
        'NgayKhoiHanh.date' => 'Ngày khởi hành phải là định dạng ngày.',
        'SoLuong.required' => 'Bắt buộc phải nhập số lượng.',
        'SoLuong.integer' => 'Số lượng phải là một số nguyên.',
        'SoLuong.min' => 'Số lượng phải lớn hơn hoặc bằng 1.',
        'GiaVe.required' => 'Bắt buộc phải nhập giá vé.',
        'GiaVe.numeric' => 'Giá vé phải là một số thực.',
        'GiaVe.min' => 'Giá vé phải lớn hơn hoặc bằng 0.',
    ];
}
}
