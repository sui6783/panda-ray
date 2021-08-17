<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LottoController extends Controller
{
    //顯示所有資料
    public function index() {
        $title = "台彩開獎 | Ray's Website";

        $lotto_arr = array(
            'biglotto' => '大樂透',
            'superlotto' => '威力彩',
            'dailycash' => '今彩539'
        );

        $lotto_cookie = 'biglotto';

        $lotto_data = file_get_contents('./lotto_list/' . $lotto_cookie . '.json');

        $lotto_data = json_decode($lotto_data, true);

        $data = [
            'title' => $title,
            'lotto_arr' => $lotto_arr,
            'lotto_cookie' => $lotto_cookie,
            'lotto_data' => $lotto_data
        ];

        return view('lotto', $data);
    }

    public function getLottoList(Request $request) {
        $type = $request->type;

        $lotto_data = file_get_contents('./lotto_list/' . $type . '.json');

        $lotto_data = json_decode($lotto_data, true);

        $data = [
            'lotto_data' => $lotto_data
        ];

        return view($type . '_table', $data);
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
