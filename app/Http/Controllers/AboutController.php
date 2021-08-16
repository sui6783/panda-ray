<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //顯示所有資料
    public function index() {
        $title = "個人名片 | Ray's Website";

        $skills = array(
            'JavaScript' => '65%',
            'jQuery' =>'85%',
            'HTML' => '95%',
            'CSS' => '95%',
            'PHP' => '95%',
            'MySQL' => '90%',
            'OpenCart' => '80%',
            'Laravel' => '55%',
            'Bootstrap' => '90%',
            'SourceTree' => '85%',
            'Ubuntu' => '60%'
        );

        $data = [
            'title' => $title,
            'skills' => $skills
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
