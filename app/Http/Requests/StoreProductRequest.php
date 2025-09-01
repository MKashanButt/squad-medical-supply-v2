<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
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
            "thumbnail" => ["required", "image", "mimes:jpeg,jpg,png,avif,webp"],
            "images" => ["nullable", "array"],
            "images.*" => ["image", "mimes:jpeg,jpg,png,avif,webp"],
            "tags" => ["string"],
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "Product name is required",
            "name.string" => "Product name should be a valid string",
            "name.min" => "Product name should be at least 3 characters",
            "name.unique" => "This product name is already taken",

            "description.required" => "Product description is required",
            "description.string" => "Product description should be a valid string",

            "key_benefits.required" => "Key benefits are required",
            "key_benefits.string" => "Key benefits should be a valid string",

            "thumbnail.required" => "Product thumbnail is required",
            "thumbnail.image" => "Thumbnail must be an image file",
            "thumbnail.mimes" => "Thumbnail must be jpeg, jpg, png, avif, or webp",

            "images.array" => "Images must be an array of files",
            "images.*.image" => "Each uploaded file must be an image",
            "images.*.mimes" => "Each image must be jpeg, jpg, png, avif, or webp",

            "tags.string" => "Tags must be a valid string",
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
