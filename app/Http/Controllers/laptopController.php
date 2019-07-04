<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;
use Validator;
use \App\Helper\Alert;
use \App\Model\Laptop;
use Illuminate\Http\Request;

class laptopController extends Controller
{
    //
    public function index()
    {
        # code...

        return Datatables::of(Laptop::all())
                ->setRowId(function(Laptop $laptop){
                    return $laptop->id;
                })->addColumn('aksi','admin.laptop.action-button')
                ->rawColumns(['aksi'])
                ->make(true);
         }

    public function delete(Request $request){
        $validator = Validator::make($request->all(),[
            "id"=> "required|numeric|exists:laptop,id"
        ]);
        $response = ['ok'=>true];
        if($validator->fails()){
            $response['ok'] = false;
            $response['msg'] = "Id tidak valid";
        }else{
            Laptop::find($request->input('id'))->delete();
            $response['msg'] = "berhasil menghapus data";
        }
        return response()->json($response, 200);
    }
    public function store(Request $request)
    {
        # code...
        $res = ['stored'=>true];
        $validator = Validator::make($request->all(),[
            "product" => "required|min:3",
            'company' => 'required|min:3',
            'typename' => 'required',
            'inches' => 'required|numeric',
            'screenresolution' => 'required',
            'cpu' => 'required',
            'ram' => 'required',
            'memory' => 'required',
            'gpu' => 'required|min:3',
            'operating_system' => 'required|min:3',
            'weight' => 'required|min:3',
            'prices' => 'required|min:3|numeric',
        ]);
        if($validator->fails()){
            $res['msg'] = Alert::errorList($validator->errors());
            $res['stored'] = false;
        }else{
            $laptop = new Laptop();
            $laptop->Company = $request->input("company");
            $laptop->Product = $request->input('product');
            $laptop->TypeName = $request->input('typename');
            $laptop->Inches = $request->input('inches');
            $laptop->ScreenResolution = $request->input('screenresolution');
            $laptop->Cpu = $request->input('cpu');
            $laptop->Ram = $request->input('ram');
            $laptop->Memory = $request->input('memory');
            $laptop->Gpu = $request->input('gpu');
            $laptop->OpSys = $request->input('operation_system');
            $laptop->Weight = $request->input('weight');
            $laptop->Price_euros = $request->input('prices');
            $laptop->save();
            $res['msg'] = Alert::success("Berhasil Menambahkan Data");
        }

        return response()->json($res, 200);
    }
    public function update(Request $request)
    {
        # code...
        $validator = Validator::make($request->all(),[
            "name" => "required|min:3",
            'email' => 'required|email|max:60',
            'role' => 'required'
        ]);

        $response = ["stored"=>true];
        
        if($validator->fails()){
            $response['stored'] = false;
            $response['msg']    = Alert::errorList($validator->errors());
        }else{
            $user = User::find($request->input('id'));
            if($user){

                
                $user->name = $request->input("name");
                $user->email = $request->input('email');
                $user->save();
                $user->role()->sync($request->input('role'));
                $response['msg'] = Alert::success("Berhasil Memperbarui Data Portofolio");
            }else{
                $response['stored'] = false;
                $response['msg']    = Alert::errorList("Data tidak ditemukan");
            }
        }
        return response()->json($response, 200);
    }
}
