<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chronotype;
use App\Models\InfoChronotype;
use Illuminate\Support\Facades\Auth;

class ChronotypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // 認証ユーザーのみアクセスを許可
    }

    public function index()
    {
        $user = Auth::user();
        $chronotype = $user->chronotype;
        $infoChronotype = InfoChronotype::where('chronotype_id', $chronotype->id)->first();
        return view('chronotypes.index', compact('chronotype', 'infoChronotype'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        
        if($user->chronotype) {
            // ユーザーがすでにchronotypeを持っている場合、更新する
            $user->chronotype->update($request->all());
        } else {
            // ユーザーがchronotypeを持っていない場合、新規作成する
            $chronotype = new Chronotype($request->all());
            $chronotype->user()->associate($user);
            $chronotype->save();
        }
        
        return redirect()->back()->with('success', 'クロノタイプが登録されました');
    }

    public function update(Request $request, $id)
    {
        $chronotype = Chronotype::findOrFail($id);
        $chronotype->update($request->all());
        return redirect()->back()->with('success', 'クロノタイプが更新されました');
    }
}