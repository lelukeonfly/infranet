<table border="1">
    @foreach ($municipalities as $municipality)
    {{ $municipality->numbers }}
        <tr>
            <td><h2>{{ $municipality->id }}</h2></td>
            <td><h2>{{ $municipality->name_de }}</h2></td>
            @foreach ($municipality->streets as $street)
                <td><h3>{{ $street->id }}</h3></td>
                <td><h3>{{ $street->name_de }}</h3></td>
                @foreach ($street->numbers as $number)
                    <td>{{ $number->id }}</td>
                    <td>{{ $number->number }}</td>
                @endforeach
            @endforeach
        </tr>
    @endforeach
</table>
