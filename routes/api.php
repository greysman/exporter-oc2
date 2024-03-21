<?php

use App\Http\Middleware\AccessToken;
use App\Http\Resources\AttributeCollection;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ManufacturerCollection;
use App\Http\Resources\OptionCollection;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Option;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'middleware' => AccessToken::class], function () {
    Route::get('categories', function () {
        return new CategoryCollection(Category::with(
            'description'
        )->paginate(100));
    });
    Route::get('attributes', function () {
        return new AttributeCollection(Attribute::with([
            'description',
            'group',
            'group.description'
        ])->paginate(100));
    });
    Route::get('options', function () {
        return new OptionCollection(Option::with([
            'description',
            'values',
            'values.description'
        ])->paginate(100));
    });
    Route::get('manufacturers', function () {
        return new ManufacturerCollection(Manufacturer::with([
            'description'
        ])->paginate(100));
    });
    Route::get('products', function () {
        return new ProductCollection(Product::with([
            'attributes',
            'attributes.attribute',
            'attributes.attribute.description',
            'attributes.attribute.group',
            'attributes.attribute.group.description',
            'categories',
            'categories.category',
            'categories.category.description',
            'description', 
            'discounts', 
            'images', 
            'manufacturer',
            'manufacturer.description',
            'options', 
            'options.option',
            'options.option.values',
            'optionValues',
            'optionValues.value',
            'optionValues.warehouses',
            'specials',
        ])->where([
            ['status', 1]
        ])->paginate(50));
    });
});
