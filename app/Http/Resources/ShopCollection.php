<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ShopCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function($data) {
                $placeholder_img='frontend/images/placeholder.jpg';
                $a = \App\User::where('id',$data->user_id);
                // $a = $data->user;
                // dd($data->user->name);
                // echo '<pre>';
                // print_r($data->user);
                // echo '</pre>';
                return [
                    'name' => $data->name,
                    'user' => [
                        'name' => $a->first('name'),
                        // $data->user->name
                        
                        'email' => $a->first('email'),
                        // $data->user->email
                        'avatar' => file_exists($a->first('avatar')) ? $a->first('avatar') : $placeholder_img ,
                        // $data->user->avatar
                        'avatar_original' => file_exists($a->first('avatar_original')) ? $a->first('avatar_original') : $placeholder_img
                        // $data->user->avatar_original
                    ],
                    'logo' => file_exists($data->logo) ? $data->logo : $placeholder_img,
                    'sliders' => file_exists($data->sliders) ? json_decode($data->sliders) : $placeholder_img,
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
