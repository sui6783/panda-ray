<table id="lotto-table" class="table table-striped table-hover">
    <tbody>
        <tr>
            <th colspan="1">日期</th>
            <th colspan="10" class="text-center">獎號</th>
            <th></th>
        </tr>
        @foreach($lotto_data as $date => $lottos)
        <tr>
            <td>{{ $date }}<td>
            @foreach($lottos as $key => $lotto)
            <td class="text-center">{{ $lotto }}<td>
            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>