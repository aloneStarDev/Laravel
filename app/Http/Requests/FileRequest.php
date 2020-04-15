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
            'name' => 'required|max:50',
            'buy'=>'nullable|numeric|max:9999999',
            'ejare'=>'nullable|numeric|max:9999999',
            'rahn'=>'nullable|numeric|max:9999999',
            'lastname' => 'required|max:50',
            'phonenumber' => 'required|max:20',
            'buildingType' => 'required|not_in:0',
            'area' => 'required|numeric|max:65535',
            'floor' => 'numeric|max:255',
            'age' => 'nullable|numeric|max:65535',
            'unit' => 'nullable|numeric|max:255',
            'bedroom' => 'nullable|numeric|max:255',
            'addressPu' => 'required|max:191',
            'addressPv' => 'required|max:191',
            'region' => 'required|not_in:0|numeric|max:14',
            'floorCovering' => 'required',
            'cabinet' => 'required',
            'direction' => 'required',
            'heating' => 'required',
            'cooling' => 'required',
            'view' => 'required',
            'document' => 'required'
        ];
    }
}
