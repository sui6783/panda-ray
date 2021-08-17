@extends('common.master')

@section('title', $title)

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>※ 此頁為練習實作Python爬蟲使用，實際開獎資訊以台灣彩券官網為主，本網站對所提供的有關資訊不作任何承擔。 但如果真的中獎記得跟我分紅</p>
                <ul class="nav nav-tabs md-tabs">
                    @foreach($lotto_arr as $lotto_key => $lotto_name)
                    <li class="nav-item">
                        <a class="nav-link <?php echo $lotto_key == $lotto_cookie ? 'active' : ''; ?>" data-block="{{ $lotto_key }}">{{ $lotto_name }}</a>
                        <div class="slide"></div>
                    </li>
                    @endforeach
                </ul>
                <br/>
                <h1>大樂透開獎結果</h1>
                <div id="lotto-div" class="text-center" style="min-height: 300px;">
                    <table id="lotto-table" class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <th colspan="2">日期</th>
                                <th colspan="12" class="text-center">獎號</th>
                                <th class="text-center">特別號</th>
                                <th></th>
                            </tr>
                            @foreach($lotto_data as $date => $lottos)
                            <tr>
                                <td>{{ $date }}<td>
                                @foreach($lottos as $key => $lotto)
                                <td class="text-center" <?php echo $key == count($lottos) - 1 ? 'style="color: red; font-weight: bold;"' : '';?>>{{ $lotto }}<td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function(){
            $('body').on('click', '.nav-link', function() {
                $('.nav-link').removeClass('active');
                $(this).addClass('active');

                var type = $(this).data('block') || '';
                var name = $(this).text();

                if(type != ''){
                    $('h1').text(name + '開獎結果');

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "POST",
                        url: '/getLottoList',
                        data: {type:type},
                        dataType: 'html',
                        beforeSend: function(){
                            $('#lotto-div').html(
                                '<div class="spinner-border text-secondary" style="margin: 100px auto;"></div>'
                            );
                        },
                        success: function(html) {
                            $('#lotto-div').html(html);
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                        }
                    });
                }else{
                    alert('發生錯誤，請重新整理頁面');
                }
            });
        });
    </script>
@endsection