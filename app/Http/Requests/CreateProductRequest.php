<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check() && Auth::user()->checkAccountType();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => ["required", "string", "min:3", "unique:products,name"],
            "description" => ["required", "string"],
            "key_benefits" => ["required", "string"],
            "thumbnail" => ["required", "string"],
            "images" => ["array"],
            "tags" => ["array"],
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "name is required",
            "name.string" => "name shoule be a valid string",
            "name.min" => "name should atleast be 3 characters",
            "name.unique" => "name is already present",

            "description.required" => "description is required",
            "description.string" => "description should be a valid string",

            "key_benefits.required" => "key Benefits are required",
            "key_benefits.string" => "key Benefits should be a valid string",

            "thumbnail.required" => "thumbnail are required",
            "thumbnail.string" => "thumbnail should be a valid file path",

            "images.array" => "image should be valid files",

            "tags.array" => "tags should be valid tags",
        ];
    }

    public function attributes(): array
    {
        return [
            "name" => "Product Name",
            "description" => "Product Description",
            "key_benefits" => "Product Key Benefits",
            "thumbnail" => "Product Thumbnail",
            "images" => "Product Images",
            "tags" => "Product Tags",
        ];
    }
}
