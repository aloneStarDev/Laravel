<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends FormRequest
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
            'title'=> 'max:191',
            'name' => 'required|max:50',
            'lastname' => 'required|max:50',
            'phonenumber' => 'required|max:20',
            'buildingType' => 'required|numeric|max:6',
            'area' => 'numeric|max:65535',
            'age' => 'numeric|max:65535',
            'unit' => 'numeric|max:255',
            'bedroom' => 'numeric|max:255',
            'addressPu' => 'required|max:191',
            'addressPv' => 'required|max:191',
            'region' => 'required|numeric|max:255',
        ];
    }
}
