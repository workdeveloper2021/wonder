<?php

namespace App\Http\Controllers;

use App\Models\Walldecal;
use Illuminate\Http\Request;
use Auth;
use FORM;
class WalldecalController extends Controller
{
    
    function __construct()
    {
         // $this->middleware('permission:category-list|categorys-create|categorys-edit|categorys-delete', ['only' => ['index', 'show']]);
         // $this->middleware('permission:categorys-create', ['only' => ['create', 'store']]);
         // $this->middleware('permission:categorys-edit', ['only' => ['edit', 'update']]);
         // $this->middleware('permission:categorys-delete', ['only' => ['destroy']]);
    }

   
    public function index(Request $request)
    {
        return view('admin.walldecal.index');
    }

    public function walldecalList() {
        $industry = Walldecal::get();
        return datatables()->of($industry)
            ->editColumn('created_at', '{{ date("d-m-Y", strtotime($created_at)) }}')
            ->editColumn('status', function($row) {
                            return $row->status == 1 ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">In-Active</span>';
                        })
            ->addColumn('action', function($row) {
                $btn = '';
                $btn .= '<div class="btn-group">';
                $btn .= ' <a class="btn btn-primary" href="' . route('categorys.edit', [$row->id]) . '">Edit</a>';
                return $btn;
            })
            ->rawColumns([
                'status' => 'status',
                'category_name' => 'category_name',
                'bussiness' => 'bussiness',
                'category_code' => 'category_code',
                'action' => 'action'
            ])
            ->make(true);
    }

    
    public function create()
    {   
        return view('admin.walldecal.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description'=>'required',
        ]);
        $input = $request->except(['_token']);
        $input['user_id'] = Auth::user()->id;
        Walldecal::create($input);
    
        return redirect()->route('walldecal.index')
            ->with('success','Walldecal created successfully.');
    }

   
    public function show($id)
    {
        $post = Walldecal::find($id);

        return view('admin.walldecal.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Walldecal::find($id);
        return view('admin.walldecal.edit',compact('post'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description'=>'required',
        ]);

        $post = Walldecal::find($id);
    
        $post->update($request->all());
    
        return redirect()->route('walldecal.index')
            ->with('success', 'Walldecal updated successfully.');
    }

    public function destroy($id)
    {
        Walldecal::where('id',$id)->delete();
        return redirect()->route('walldecal.index')
            ->with('success', 'Walldecal deleted successfully.');
    }
}