<table id="responsiveTable" class="display responsive nowrap w-100">
    <thead>
        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
            @foreach($headers as $header)
                <th>{{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($rows as $row)
            <tr>
                @foreach ($row as $column)
                    <td>{!! $column !!}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
