<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderUpdateRequest extends FormRequest
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
            'refNumber' => 'required | integer',
            'quantity' => 'required',
            'loadingDateTime' => 'required | date',
            'deliveryDateTime' => 'required | date',
            'loading_client_id' => 'required | integer',
            'loading_location_id' => 'required | integer',
            'delivery_client_id' => 'required | integer',
            'delivery_location_id' => 'required | integer',
            'product_id' => 'required | integer',
            'metric_id' => 'required | integer',
            'driver_id' => 'required | integer',
        ];
    }
}
