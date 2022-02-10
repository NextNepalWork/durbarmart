<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {{-- category --}}
    @foreach ($categories as $category)
        <url>
            <name>{{$category->name}}</name>
            <loc>{{ url('/') }}/search?category={{ $category->slug }}</loc>
            <lastmod>{{ $category->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
            {{-- sub category --}}
            <?php $subcategories=\App\Subcategory::where('category_id',$category->id)->get(); ?>
                @foreach ($subcategories as $subcategory)
                <url>
                    <name>{{$subcategory->name}}</name>
                    <loc>{{ url('/') }}/search?subcategory={{ $subcategory->slug }}</loc>
                    <lastmod>{{ $subcategory->created_at->tz('UTC')->toAtomString() }}</lastmod>
                    <changefreq>weekly</changefreq>
                    <priority>0.8</priority>
                        {{-- sub sub category --}}
                        <?php $subsubcategories=\App\SubsubCategory::where('sub_category_id',$subcategory->id)->get(); ?>
                        @foreach ($subsubcategories as $subsubcategory)
                        <url>
                            <name>{{$subsubcategory->name}}</name>
                            <loc>{{ url('/') }}/search?subsubcategory={{ $subsubcategory->slug }}</loc>
                            <lastmod>{{ $subsubcategory->created_at->tz('UTC')->toAtomString() }}</lastmod>
                            <changefreq>weekly</changefreq>
                            <priority>0.8</priority>
                        </url>
                        @endforeach
                        {{-- sub sub category --}}
                </url>
                @endforeach
                {{-- sub category --}}
                {{-- products --}}
                <?php $products=\App\Product::where('category_id',$category->id)->get(); ?>
                @foreach ($products as $product)
                <url>
                    <name>{{$product->name}}</name>
                    <loc>{{ url('/') }}/product/{{ $product->slug }}</loc>
                    <lastmod>{{ $product->created_at->tz('UTC')->toAtomString() }}</lastmod>
                    <changefreq>weekly</changefreq>
                    <priority>0.8</priority>
                    
                </url>
                @endforeach
                {{-- products --}}
        </url>
    @endforeach
    {{-- category --}}
</urlset>