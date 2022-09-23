<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatagoryLevelOne;
use App\Models\CatagoryLevelTwo;
use App\Models\CatagoryLevelThree;
use App\Models\Product;
class CatogeryController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
//Catagory Level 1
    public function CatOneList()
    {
        $firstCatogery = CatagoryLevelOne::all();
        $data = compact('firstCatogery');
        return view('catagory-level-one-list')->with($data);
    }
    public function CatOneAdd()
    {
        return view('catagory-level-one-add');
    }
    public function catOneStore(Request $request){
     
      
        $firstCatogery = new CatagoryLevelOne;
        $firstCatogery->name = $request['name'];
        $firstCatogery->description = $request['description'];
        $firstCatogery->slug = $request['name'];
        if($request['status'])
        {
            $firstCatogery->status = true;
        }
        else
        {
            $firstCatogery->status = false;
        }
        $firstCatogery->save();
        return redirect()->back()->with('message', 'Catagory Uploaded Successfully.');
    }
    public function catOnedelete($id)
    {
        $firstCatogery =  CatagoryLevelOne::find($id)->delete();
        return redirect()->back();
    }
    public function catOneEdit($id)
    {
        $firstCatogery =  CatagoryLevelOne::find($id);
        $data = compact('firstCatogery');
        return view('catagory-level-one-update')->with($data);
    }
    public function catOneupdate(Request $request, $id)
    {
        $firstCatogery = CatagoryLevelOne::find($id);
        $firstCatogery->name = $request['name'];
        $firstCatogery->description = $request['description'];
        $firstCatogery->save();
        return redirect('CatOneList')->with('message', 'Data Updated Successfully.');
    }
//Catagory Level 2
    public function CatTwoList()
    {
        $secondCatogery = CatagoryLevelTwo::all();
        $data = compact('secondCatogery');
        return view('catagory-level-two-list')->with($data);
    }
    public function CatTwoAdd()
    {
        $firstCatogery = CatagoryLevelOne::all();
        $data = compact('firstCatogery');
        return view('catagory-level-two-add')->with($data);
    }
    public function catTwoStore(Request $request)
    {
        $secondCatogery = new CatagoryLevelTwo;
        $secondCatogery->name = $request['name'];
        $secondCatogery->description = $request['description'];
        $secondCatogery->slug = $request['name'];
        if($request['status'])
        {
            $secondCatogery->status = true;
        }
        else
        {
            $secondCatogery->status = false;
        }
        $secondCatogery->catagory_level_one_id = $request['catagory_level_one_id'];
        $secondCatogery->save();
        return redirect()->back()->with('message', 'Catagory Uploaded Successfully.');
    }
    public function catTwodelete($id)
    {
        $secondCatogery =  CatagoryLevelTwo::find($id)->delete();
        return redirect()->back();
    }
    public function catTwoEdit($id)
    {
        $secondCatogery =  CatagoryLevelTwo::find($id);
        $data = compact('secondCatogery');
        return view('catagory-level-two-update')->with($data);
    }
    public function catTwoupdate(Request $request, $id)
    {
        $secondCatogery = CatagoryLevelTwo::find($id);
        $secondCatogery->name = $request['name'];
        $secondCatogery->description = $request['description'];
        $secondCatogery->save();
        return redirect('CatTwoList')->with('message', 'Data Updated Successfully.');
    }
//Catagory Level 3
    public function CatThreeList()
    {
        $thirdCatogery = CatagoryLevelThree::all();
        $data = compact('thirdCatogery');
        return view('catagory-level-three-list')->with($data);
    }
    public function CatThreeAdd()
    {
        $secondCatogery = CatagoryLevelTwo::all();
        $data = compact('secondCatogery');
        return view('catagory-level-three-add')->with($data);
    }
    public function catThreeStore(Request $request)
    {   
        $thirdCatogery = new CatagoryLevelThree;
        $thirdCatogery->name = $request['name'];
        $thirdCatogery->description = $request['description'];
        $thirdCatogery->slug = $request['name'];
        if($request['status'])
        {
            $thirdCatogery->status = true;
        }
        else
        {
            $thirdCatogery->status = false;
        }
        $thirdCatogery->catagory_level_one_id = $request['catagory_level_one_id'];
        $thirdCatogery->catagory_level_two_id = $request['catagory_level_two_id'];
        $thirdCatogery->save();
        return redirect()->back()->with('message', 'Catagory Uploaded Successfully.');
    }
    public function getLevelOneFromLevelThree(Request $request){

        $firstCatogery = CatagoryLevelOne::all();

        return response()->json([
            'status'=>1,
            'firstcats' => $firstCatogery,
        ]);

    }
    public function catThreedelete($id)
    {
        $thirdCatogery =  CatagoryLevelThree::find($id)->delete();
        return redirect()->back();
    }
    public function catThreeEdit($id)
    {
        $thirdCatogery =  CatagoryLevelThree::find($id);
        $data = compact('thirdCatogery');
        return view('catagory-level-three-update')->with($data);
    }
    public function catThreeupdate(Request $request, $id)
    {
        $thirdCatogery = CatagoryLevelThree::find($id);
        $thirdCatogery->name = $request['name'];
        $thirdCatogery->description = $request['description'];
        $thirdCatogery->save();
        return redirect('CatThreeList')->with('message', 'Data Updated Successfully.');
    }
//Product
     public function productList()
     {
        $products =  Product::all();
        $data = compact('products');
         return view('product-list')->with($data);
     }
     public function productAdd()
     {
        $firstCatogery = CatagoryLevelOne::all();
        $data = compact('firstCatogery');
         return view('product-add')->with($data);
     }
     public function getLevelThreeFromLevelproducts(Request $request){

        $thirdcat = CatagoryLevelThree::all();

        return response()->json([
            'status'=>1,
            'thirdcats' => $thirdcat,
        ]);

    }
    public function productStore(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|max:255',
                'description' => 'required',
                'price'=> 'integer|digits_between:1,5000000',
                'offer_price' => 'integer|digits_between:1,5000000',
                'quantity' => 'integer|digits_between:1,100',
                'file'=> 'required',
                
            ]
        );

        $products = new Product;
        $file = $request->file('file');
        $file->move(public_path()."/ProductImages/", $file->getClientOriginalName());
        $products->name = $request['name'];
        $products->description = $request['description'];
        $tag = $request['tags']; 
        $List = implode(', ', $tag);
        $products->tags = $List;
        $products->thumbnail ="/ProductImages/".$file->getClientOriginalName();
        $products->quantity = $request['quantity'];
        $products->offer_price = $request['offer_price'];
        $products->price = $request['price'];
        $products->slug = $request['name'];
        if($request['status'])
        {
            $products->status = true;
        }
        else
        {
            $products->status = false;
        }
        $products->catagory_level_one_id = $request['catagory_level_one_id'];
        $products->catagory_level_two_id = $request['catagory_level_two_id'];
        $products->catagory_level_three_id = $request['catagory_level_three_id'];
        $products->save();
        return redirect()->back()->with('message', 'Product Uploaded Successfully.');
        
    }
    public function changeStatus(Request $request){
        $products = Product::find($request->id);
        if($products->status ==true){
            $products->status = false;
        } 
        else{
            $products->status = true;
        }
        $products->save();
  
        return response()->json([
            'success'=>'Status change successfully.',
            'data' => $products->status
        ]);
    }
    public function getLevelTwoFromLevelOne(Request $request){

        $secondcat = CatagoryLevelTwo::all();

        return response()->json([
            'status'=>1,
            'secondcats' => $secondcat,
        ]);

    }
    public function productDelete($id)
    {
        $products =  Product::find($id)->delete();
        return redirect()->back();
    }
    public function productEdit($id)
    {
        $products =  Product::find($id);
        $data = compact('products');
        return view('product-update')->with($data);
    }
    public function productupdate(Request $request , $id)
    {
        $products = Product::find($id);
        $products->name = $request['name'];
        $products->description = $request['description'];
        $products->price = $request['price'];
        $products->offer_price = $request['offer_price'];
        $products->save();
        return redirect('productList')->with('message', 'Data Updated Successfully.');

    }

}
