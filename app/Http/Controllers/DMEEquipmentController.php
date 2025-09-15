<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DMEEquipmentController extends Controller
{
    public function index(): View
    {
        $products = Product::select('id', 'thumbnail', 'name', 'key_benefits')
            ->get()
            ->toArray();

        $allTags = Product::all()
            ->pluck('tags', 'id');

        $uniqueTags = $this->filterUniqueTags($allTags);

        return view("app.dme-equipments", compact("products", "uniqueTags"));
    }

    public function search(Request $request): View
    {
        $validate = $request->validate([
            'input' => ['nullable', 'string'],
            'tags' => ['nullable', 'string']
        ]);

        $params = request()->query();

        [$input, $tags] = [$validate['input'] ?? null, $validate['tags'] ?? null];

        $query = Product::query();
        $query->select('id', 'thumbnail', 'name', 'key_benefits');

        if ($input) {
            $query->where('name', 'like', '%' . $input . '%');

            $allTags = Product::where('name', 'like', '%' . $input . '%')
                ->pluck('tags', 'id');

            $uniqueTags = $this->filterUniqueTags($allTags);
        } else if ($tags) {
            //TODO: Add tag search filter
        } else if ($input && $tags) {
            $query->where('name', 'like', '%' . $input . '%');

            $allTags = Product::all()->pluck('tags', 'id');
            $uniqueTags = $this->filterUniqueTags($allTags);
        }

        $products = $query
            ->get()
            ->append($params);

        return view("app.dme-equipments", compact("products", "uniqueTags"));
    }

    /* 
    * Create a unique array from provided tags and query string
    *
    * @param Array|Object tags, string query
    * @return Array
    */

    private function filterUniqueTags(array|object $tags, bool|string $extraFilterRules = False): array
    {
        $uniqueTags = [];
        foreach ($tags as $tag) {
            foreach ($tag as $item) {
                if (!in_array($item, $uniqueTags)) {
                    if ($extraFilterRules) {
                        //TODO: Add Extra Filter Rules for Tag Filtering
                    } else {
                        array_push($uniqueTags, $item);
                    }
                }
            }
        }

        return $uniqueTags;
    }
}
