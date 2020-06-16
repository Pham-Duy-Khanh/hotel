<?php 
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class RegisterRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;

    }

    public function rules() {

        return [
            'email' => 'required|email|unique:customer,email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
            'name' => 'required',
            'cmnd' => 'required|max:12'
        ];
    }

    public function messages() {
        return [
            'email.unique'=> 'Tài khoản đã có người sử dụng',
            'email.required'=> 'Không được để trống!',
            'name.required'=> 'Không được để trống!',
            'password.required'=> 'Không được để trống!',
            'password.min'=> 'Phải nhập mật khẩu lớn hơn 8 kí tự',
            'cmnd.required'=> 'Không được để trống!',
            'cmnd.max'=> 'Phải nhập nhỏ hơn 12 kí tự',
            'confirm_password.required'=> 'Không được để trống!',
            'confirm_password.same'=> 'Mật khẩu không trùng khớp',
        ];
    }
}