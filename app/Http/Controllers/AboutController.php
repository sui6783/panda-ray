<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //顯示所有資料
    public function index() {
        $title = "個人名片 | Ray's Website";

        $data = [
            'title' => $title
        ];

        return view('about', $data);
    }
    
    //新增一筆資料
    public function create() {
        //
    }

    //儲存資料
    public function store(Request $request) {
        //
    }

    //顯示一筆資料
    public function show($id) {
        //
    }

    //編輯一筆資料
    public function edit($id) {
        //
    }

    //更新一筆資料
    public function update(Request $request, $id) {
        //
    }

    //刪除一筆資料
    public function destroy($id) {
        //
    }
}
