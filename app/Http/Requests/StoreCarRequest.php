<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'car.user_id' => 'required|numeric',
            'car.name' => 'required|string',
            'car.year' => 'required|numeric',
            'car.motor' => 'required|string',
            'car.doors' => 'required|numeric',
            'car.passenger' => 'required|numeric',
            'car.transmission' => 'required|string',
            'car.participation_damage' => 'required|numeric',
            'car.deposit' => 'required|numeric',
            'car.basic_insurance' => 'required|numeric',
            'car.full_insurance' => 'required|numeric',
            'images.*.type' => 'required|string',
            'images.*.name' => 'required|string',
            'prices.*.season' => 'required|string|in:winter,spring,summer,autumn',
            'prices.*.default' => 'required|numeric',
            'prices.*.1-3' => 'required|numeric',
            'prices.*.4-7' => 'required|numeric',
            'prices.*.8-15' => 'required|numeric',
            'prices.*.16-22' => 'required|numeric',
            'prices.*.23+' => 'required|numeric',
            'files.*' => 'required|file',
        ];
    }
}
