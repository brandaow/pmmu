<h3 style="font-family: Arial, Helvetica, sans-serif; font-weight: 100"><strong>Prefeitura Municipal de {{ $city }}</strong> | {{ auth()->user()->name }}</h3>
<h4 style="font-family: Arial, Helvetica, sans-serif; font-weight: 100"><strong>Mês:</strong> {{ $monthWri }} - <strong>Autenticador:</strong> {{ Str::random(6) }} - <strong>Emitido em:</strong> {{ date('d/m/Y H:i') }}</h4>
<table border=1 cellspacing=0 cellpadding=2 style="width: 100%">
    <tbody>
        <tr style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-weight: bold">
            <th>Data</th>
            <th>Entrada</th>
            <th>Saída</th>
            <th>Local</th>
            <th>Assinatura</th>
        </tr>
    	@for($i = 1; $i <= date('t', $monthSta); $i++)
            @php $flag = 0; @endphp
            <tr style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-weight: 100">
                <td>{{ date('d/m/Y', mktime(0, 0, 0, $monthNum, $i, date('Y'))) }}</td>
                @forelse($data as $value)
                    @if(date('d/m/Y', strtotime($value->checkIn)) == date('d/m/Y', mktime(0, 0, 0, $monthNum, $i, date('Y'))))
                        <td>{{ date('H:i', strtotime($value->checkIn)) }}</td>
                        @if($value->checkOut != NULL)
                        	<td>{{ date('H:i', strtotime($value->checkOut)) }}</td>
                        @else
                        	<td>Indef.</td>
                        @endif
                        <td>USF</td>
                    	<td></td> 
                        @php $flag = 1; @endphp
                        @break
                    @elseif(date('w', mktime(0, 0, 0, $monthNum, $i, date('Y'))) == 6)
                        <td colspan="3">-----------------------------------------</td>
                        <td><b>SÁBADO</b></td>
                        @php $flag = 1; @endphp
                        @break
                    @elseif(date('w', mktime(0, 0, 0, $monthNum, $i, date('Y'))) == 0)
                        <td colspan="3">-----------------------------------------</td>
                        <td><b>DOMINGO</b></td>
                        @php $flag = 1; @endphp
                        @break
                    @endif
                @empty
					<td>------</td>
					<td>------</td>
					<td>------</td>
					<td>------</td>
					@php $flag = 1; @endphp
                @endforelse
                @if($flag != 1)
                    <td>------</td>
                    <td>------</td>
                    <td>------</td>
                    <td>------</td>
            	@endif
            </tr>
        @endfor
    </tbody>
</table>