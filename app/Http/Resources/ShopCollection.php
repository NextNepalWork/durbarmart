<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ShopCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function($data) {
                $a = \App\User::where('id',$data->user_id);
                return [
                    'name' => $data->name,
                    'user' => [
                        'name' => $a->get('name'),
                        // $data->user->name
                        
                        'email' => $a->get('email'),
                        // $data->user->email
                        'avatar' => $a->get('avatar'),
                        // $data->user->avatar
                        'avatar_original' => $a->get('avatar_original')
                        // $data->user->avatar_original
                    ],
                    'logo' => $data->logo,
                    'sliders' => json_decode($data->sliders),
                    'address' => $data->address,
                    'facebook' => $data->facebook,
                    'google' => $data->google,
                    'twitter' => $data->twitter,
                    'youtube' => $data->youtube,
                    'instagram' => $data->instagram,
                    'links' => [
                        'featured' => route('shops.featuredProducts', $data->id),
                        'top' => route('shops.topSellingProducts',  $data->id),
                        'new' => route('shops.newProducts', $data->id),
                        'all' => route('shops.allProducts', $data->id),
                        'brands' => route('shops.brands', $data->id)
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
