<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name'=>'Required|max:191',
            'lastname'=>'Required|max:191',
            'phonenumber'=>'Required|max:191',
            'region'=>'Required',
            'address'=>'Required|max:191',
            'panel'=>'Required',
        ];
    }
}
