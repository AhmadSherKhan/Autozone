<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductCategory;
use App\Models\ProductImages;
use App\Models\AutopartsProducts;
use App\Models\cart;
use App\Http\Requests\ProductFormRequest;


class AutopartsController extends Controller
{
    public function index(){
        $products = ProductCategory::all();
        return view ('admin.autopartscategory', compact('products'));
    }
    public function createcategory(){
        return view ('admin.createautopartcategory');
    }
    public function create(Request $request){
        $data = new ProductCategory;

        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('categoryimage', $imagename);

        $data->image=$imagename;

        $data->name=$request->name;
        $data->slug=$request->slug;
        $data->description=$request->description;
        $data->meta_title=$request->meta_title;
        $data->meta_keyword=$request->meta_keyword;
        $data->meta_description=$request->meta_description;
        $data->status=$request->status == true ? '1':'0';
        $data->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }
    public function edit($id)
    {
        $data = ProductCategory::find($id);
        return view('admin.editautopartcategory', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = ProductCategory::find($id);
        $data->name=$request->name;
        $data->slug=$request->slug;
        $data->description=$request->description;
        $data->meta_title=$request->meta_title;
        $data->meta_keyword=$request->meta_keyword;
        $data->meta_description=$request->meta_description;
        $data->status=$request->status == true ? '1':'0';
        $data->save();
        return redirect()->back()->with('message', 'Category Edited Successfully');
    }
    public function destroy($id)
    {
        ProductCategory::destroy($id);
        return redirect()->back()->with('message', 'Deleted Successfully');
    }




    public function indexB(){
        $data = AutopartsProducts::paginate(12);
        $categories = ProductCategory::where('status', '0')->get();
        return view ('autoparts', compact('data', 'categories'));
    }
    public function addautopart(){
        $categories = ProductCategory::all();
        return view ('admin.addautopart', compact('categories'));
    }
    public function uploadautopart(ProductFormRequest $request){
       
        $validatedData = $request->validated();
        $category = ProductCategory::findOrFail($validatedData['category_id']);

        $product = $category->products()->create([
            'category_id' =>  $validatedData['category_id'],
            'name' =>  $validatedData['name'],
            'slug' =>  Str::slug($validatedData['slug']),
            'small_description' =>  $validatedData['small_description'],
            'description' =>  $validatedData['description'],
            'price' =>  $validatedData['price'],
            'quantity' =>  $validatedData['quantity'],
            'trending' => $request->trending == true ? '1' : '0',
            'status' => $request->status == true ? '1' : '0',
            'meta_title' =>  $validatedData['meta_title'],
            'meta_keyword' =>  $validatedData['meta_keyword'],
            'meta_description' =>  $validatedData['meta_description'],
        ]);

        if ($request->hasFile('image')){
            $uploadPath = 'uploads/productimage/';
            $i = 1;

            foreach($request->file('image') as $imageFile){
                $extention = $imageFile->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extention;
                $imageFile->move($uploadPath,$filename);
                $finalImagePathName =$uploadPath.$filename;

                $product->productimages()->create([
                    'product_id' => $product->id,
                    'image' => $finalImagePathName,
                ]);
            }
        }
        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function autopartlist(){
        $products = AutopartsProducts::all();
        return view ('admin.autopartlist', compact('products'));
    }
    public function editproduct($id){
        $products = AutopartsProducts::find($id);
        $categories = ProductCategory::all();
        return view ('admin.editproduct', compact('products', 'categories'));
    }
    public function updateproduct(ProductFormRequest $request,int  $product_id)
    {
        $validatedData = $request->validated();
        $product = ProductCategory::findOrFail($validatedData['category_id'])
        ->products()->where('id', $product_id)->first();
        if ($product){
            $product->update([
                'category_id' =>  $validatedData['category_id'],
                'name' =>  $validatedData['name'],
                'slug' =>  Str::slug($validatedData['slug']),
                'small_description' =>  $validatedData['small_description'],
                'description' =>  $validatedData['description'],
                'price' =>  $validatedData['price'],
                'quantity' =>  $validatedData['quantity'],
                'trending' => $request->trending == true ? '1' : '0',
                'status' => $request->status == true ? '1' : '0',
                'meta_title' =>  $validatedData['meta_title'],
                'meta_keyword' =>  $validatedData['meta_keyword'],
                'meta_description' =>  $validatedData['meta_description'],
            ]);

            if ($request->hasFile('image')){
                $uploadPath = 'uploads/productimage/';
                $i = 1;
    
                foreach($request->file('image') as $imageFile){
                    $extention = $imageFile->getClientOriginalExtension();
                    $filename = time().$i++.'.'.$extention;
                    $imageFile->move($uploadPath,$filename);
                    $finalImagePathName =$uploadPath.$filename;
    
                    $product->productimages()->create([
                        'product_id' => $product->id,
                        'image' => $finalImagePathName,
                    ]);
                }
            }
            return redirect()->back()->with('message', 'Product Added Successfully');

        }
        else
        {
            return redirect()->back()->with('message', 'No product id found');
        }
    }


    //destroy images with product delete also
    public function destroyproduct(int $product_id)
    {

        $product = AutopartsProducts::findOrFail($product_id);
        if($product->productimages){
            foreach($product->productimages as $image){
                if(File::exists($image->image)){
                    File::delete($image->image);
                }
            }
        }
        $product->delete();
        return redirect()->back()->with('message', 'Deleted Successfully');
    }

    public function productcard($id){
        $data = AutopartsProducts::find($id);
        return view ('productcard', compact('data'));
    }
    public function catproduct($category_slug){
        $categories = ProductCategory::where('status', '0')->get();
        $category = ProductCategory::where( 'slug' , $category_slug)->first();
        if($category){
            $products = $category->products()->get();
            return view ('productswrtcategory' , compact('products', 'category', 'categories'));
        }else{
            return redirect()->back();
        }
    }

    
}
