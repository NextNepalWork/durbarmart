<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use SebastianBergmann\Environment\Console;

class ProductCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function($data) {
                $photo=[];
                $placeholder_img='frontend/images/placeholder.jpg';
                if(isset($data->photos)){
                    array_push($photo,$placeholder_img);
                }else{
                    foreach(json_decode($data->photos) as $key=>$img){
                        if(file_exists($img)){
                            array_push($photo,$img);
                        }else{
                            array_push($photo,$placeholder_img);
                        }
                    }
                }
                return [
                    'id' => (integer) $data->id,
                    'name' => $data->name,
                    'photos' => $photo,
                    'thumbnail_image' => file_exists($data->thumbnail_img) ? json_decode($data->thumbnail_img) : $placeholder_img,
                    'featured_image' => file_exists($data->featured_image) ? $data->featured_image : $placeholder_img,
                    'flash_deal_image' => file_exists($data->flash_deal_image) ? $data->flash_deal_image : $placeholder_img,
                    'base_price' => (double) homeBasePrice($data->id),
                    'base_discounted_price' => (double) homeDiscountedBasePrice($data->id),
                    'todays_deal' => (integer) $data->todays_deal,
                    'featured' =>(integer) $data->featured,
                    'unit' => $data->unit,
                    'discount' => (double) $data->discount,
                    'discount_type' => $data->discount_type,
                    'rating' => (double) $data->rating,
                    'sales' => (integer) $data->num_of_sale,
                    'links' => [
                        'details' => route('products.show', $data->id),
                        'reviews' => route('api.reviews.index', $data->id),
                        'related' => route('products.related', $data->id),
                        'top_from_seller' => route('products.topFromSeller', $data->id)
                    ]
                ];
            })
        ];
    }

    public function with($request)
    {
        return [
            'success' => true,
            'status' => 200
        ];
    }
}
