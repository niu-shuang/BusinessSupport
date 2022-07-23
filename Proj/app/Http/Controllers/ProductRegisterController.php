<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductRegisterController extends Controller
{
    //
    public function registerProduct(Request $request)
    {
        $inputs = $request->all();

        if($file = $request->agent_photo)
        {
            $fileName = time().$file->getClientOriginalName();
            $target_path = public_path('trunk/img/');
            $file->move($target_path, $fileName);
            $inputs['agent_photo']=$fileName;
        }
        else
        {
            return back()->withErrors(['err_msg'=>'ファイルが正しくアップロードしませんでした']);
        }
        if($file = $request->thumbnail)
        {
            $fileName = time().$file->getClientOriginalName();
            $target_path = public_path('trunk/img/');
            $file->move($target_path, $fileName);
            $inputs['thumbnail']=$fileName;
        }
        else
        {
            return back()->withErrors(['err_msg'=>'ファイルが正しくアップロードしませんでした']);
        }


        \DB::beginTransaction();
        try{
            Product::create($inputs);
            \DB::commit();
        }catch(\Throwable $e)
        {
            echo $e->getMessage();
            \DB::rollback();
            abort(500);
        }
        return redirect('productRegister')->with('upload_success','アップロード成功しました');
    }

    public function show()
    {
        return view('productRegister');
    }
}
