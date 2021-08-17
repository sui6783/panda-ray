<table id="lotto-table" class="table table-striped table-hover">
    <tbody>
        <tr>
            <th colspan="2">日期</th>
            <th colspan="12" class="text-center">第一區</th>
            <th class="text-center">第二區</th>
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