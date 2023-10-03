<?php

namespace App\Http\Controllers;

use App\Models\SixteenPersonality;
use App\Models\InfoSixteenPersonalityType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SixteenPersonalitiesController extends Controller
{
    // ユーザがログインしていることを確認
    public function __construct()
    {
        $this->middleware('auth');
    }

    // 一覧表示画面
    public function index()
    {
        $sixteenPersonalities = Auth::user()->sixteenPersonalities; // Authenticated user's personalities
        return view('sixteen_personalities.index', compact('sixteenPersonalities'));
    }

    // 登録画面表示
    public function create()
    {
        $types = InfoSixteenPersonalityType::all(); // Get all personality types
        return view('sixteen_personalities.create', compact('types'));
    }

    // データベースに保存
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type_id' => 'required|exists:info_sixteen_personality_types,id',
        ]);

        $sixteenPersonality = new SixteenPersonality($validated);

        // associate methodを使用して、ユーザと関連付けます。
        $sixteenPersonality->user()->associate(Auth::user());
        $sixteenPersonality->save(); // Save to the database

        return redirect()->route('sixteen_personalities.index');
    }

    // 詳細表示画面
    public function show(SixteenPersonality $sixteenPersonality)
    {
        return view('sixteen_personalities.show', compact('sixteenPersonality'));
    }

    // 編集画面表示
    public function edit(SixteenPersonality $sixteenPersonality)
    {
        $types = InfoSixteenPersonalityType::all(); // Get all personality types
        return view('sixteen_personalities.edit', compact('sixteenPersonality', 'types'));
    }

    // データベースを更新
    public function update(Request $request, SixteenPersonality $sixteenPersonality)
    {
        $validated = $request->validate([
            'type_id' => 'required|exists:info_sixteen_personality_types,id',
        ]);

        $sixteenPersonality->update($validated); // Update the personality

        return redirect()->route('sixteen_personalities.index');
    }

    // データベースから削除
    public function destroy(SixteenPersonality $sixteenPersonality)
    {
        $sixteenPersonality->delete(); // Delete the personality
        return redirect()->route('sixteen_personalities.index');
    }
}