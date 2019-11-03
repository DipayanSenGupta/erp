<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreRequest extends FormRequest
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
            'refNo' => 'required|string|min:|max:50',
            'customer_name' => 'required|string|min:5|max:50',
            'city' => 'required|string|min:5|max:50',
            'country' => 'required|string|min:5|max:50',
            'telephone' => 'required|string|min:5|max:50',
            'mobile' => 'required|string|min:5|max:50',
            'fax' => 'required|string|min:5|max:50',
            'contact_person' => 'required|string|min:5|max:50',
            'email_id' => 'required|email',
            'address' => 'required',
            'account_details' => 'required',
            'bank_name' => 'required|string|min:5|max:50',
            'account_number' =>'required|string|min:5|max:50' ,
            'swift_code' => 'required|string|min:5|max:50'
          ];
    }
    
    public function message(){
        return [
            'min' => 'Input need to be atleast 5 characters',
            'max' => 'Input can be atmost 50 charavters',
        ]; 
    }
}
