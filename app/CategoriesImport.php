<?php

namespace App;

use App\Product;
use App\Category;
use App\SubCategory;
use App\SubSubCategory;
use App\SubSubSubCategory;
use App\SubSubSubSubCategory;
use App\User;
// use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Auth;

class CategoriesImport implements ToCollection, WithValidation
{
    // WithHeadingRow
    public function collection(Collection $row)
    {       
        $cat = '';
        $sub_cat = '';
        $sub_sub_cat = '';
        $sub_sub_sub_cat = '';
        $sub_sub_sub_sub_cat = '';
        
        foreach($row as $a => $b){
            $explode = explode('/',$b[0]);
            // dd($explode);
             //this contains the string of category and subcategory
            // return Category::create([
            //     'name' => $cat
            // ]);
            if (isset($explode[1]) && !empty($explode[1])) {
                $cat = $explode['1'];
                if(Category::where('name',$cat)->count() == 0){
                    $cat_upload = Category::create([
                        'name' => $cat,
                        'slug' => str_replace(' ','-',strtolower(trim($cat))),
                        'meta_title' => $cat,
                        'meta_description' => $cat
                    ]);
                }
            }
                // dd(Category::all());
            // else{
            //     $cat_upload = Category::where('name',$cat)->first();
            // }
            
            // $sub_cat = $explode[2];
            if (isset($explode[2]) && !empty($explode[2])) {
                $sub_cat = $explode[2];
                // dd($cat_upload);
                if(SubCategory::where('name',$sub_cat)->count() == 0){
                    $cat_upload = Category::where('name',$cat)->first();
                    $sub_cat_upload = SubCategory::create([
                        'name' => $sub_cat,
                        'category_id' =>  $cat_upload->id,
                        'slug' => str_replace(' ','-',strtolower(trim($sub_cat))),
                        'meta_title' => $sub_cat,
                        'meta_description' => $sub_cat
                    ]);
                }
                // else{
                //     $sub_cat_upload = SubCategory::where('name',$sub_cat)->first();
                // }
            }
            if (isset($explode[3]) && !empty($explode[3])) {
                $sub_sub_cat = $explode[3];
                if(SubSubCategory::where('name',$sub_sub_cat)->count() == 0){
                    $sub_cat_upload = SubCategory::where('name',$sub_cat)->first();
                    $sub_cat_upload = SubSubCategory::create([
                        'name' => $sub_sub_cat,
                        'sub_category_id' =>  $sub_cat_upload->id,
                        'slug' => str_replace(' ','-',strtolower(trim($sub_sub_cat))),
                        'meta_title' => $sub_sub_cat,
                        'meta_description' => $sub_sub_cat
                    ]);
                }
                // else{
                //     $sub_cat_upload = SubSubCategory::where('name',$sub_sub_cat)->first();
                // }
            }
            if (isset($explode[4]) && !empty($explode[4])) {
                $sub_sub_sub_cat = $explode[4];
                if(SubSubSubCategory::where('name',$sub_sub_sub_cat)->count() == 0){
                    $sub_cat_upload = SubSubCategory::where('name',$sub_sub_cat)->first();
                    $sub_cat_upload = SubSubSubCategory::create([
                        'name' => $sub_sub_sub_cat,
                        'sub_sub_category_id' =>  $sub_cat_upload->id,
                        'slug' => str_replace(' ','-',strtolower(trim($sub_sub_sub_cat))),
                        'meta_title' => $sub_sub_sub_cat,
                        'meta_description' => $sub_sub_sub_cat
                    ]);
                }
                // else{
                //     $sub_cat_upload = SubSubSubCategory::where('name',$sub_sub_sub_cat)->first();
                // }
            }
            if (isset($explode[5]) && !empty($explode[5])) {
                $sub_sub_sub_sub_cat = $explode[5];
                if(SubSubSubSubCategory::where('name',$sub_sub_sub_sub_cat)->count() == 0){
                    $sub_cat_upload = SubSubSubCategory::where('name',$sub_sub_sub_cat)->first();
                    $sub_cat_upload = SubSubSubSubCategory::create([
                        'name' => $sub_sub_sub_sub_cat,
                        'sub_sub_sub_category_id' =>  $sub_cat_upload->id,
                        'slug' => str_replace(' ','-',strtolower(trim($sub_sub_sub_sub_cat))),
                        'meta_title' => $sub_sub_sub_sub_cat,
                        'meta_description' => $sub_sub_sub_sub_cat
                    ]);
                }
                // else{
                //     $sub_cat_upload = SubSubSubSubCategory::where('name',$sub_sub_sub_sub_cat)->first();
                // }
            }
        }
        return true;
        // dd($all);
        // return new Product([
        //    'name'     => $row['name'],
        //    'added_by'    => Auth::user()->user_type == 'seller' ? 'seller' : 'admin',
        //    'user_id'    => Auth::user()->user_type == 'seller' ? Auth::user()->id : User::where('user_type', 'admin')->first()->id,
        //    'category_id'    => $row['category_id'],
        //    'subcategory_id'    => $row['subcategory_id'],
        //    'subsubcategory_id'    => $row['subsubcategory_id'],
        //    'brand_id'    => $row['brand_id'],
        //    'video_provider'    => $row['video_provider'],
        //    'video_link'    => $row['video_link'],
        //    'unit_price'    => $row['unit_price'],
        //    'purchase_price'    => $row['purchase_price'],
        //    'unit'    => $row['unit'],
        //    'current_stock' => $row['current_stock'],
        //    'meta_title' => $row['meta_title'],
        //    'meta_description' => $row['meta_description'],
        //    'colors' => json_encode(array()),
        //    'choice_options' => json_encode(array()),
        //    'variations' => json_encode(array()),
        //    'slug' => preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $row['slug'])).'-'.str_random(5),
        // ]);
    }

    public function rules(): array
    {
        return [
             // Can also use callback validation rules
             'unit_price' => function($attribute, $value, $onFailure) {
                  if (!is_numeric($value)) {
                       $onFailure('Unit price is not numeric');
                  }
              }
        ];
    }
}
