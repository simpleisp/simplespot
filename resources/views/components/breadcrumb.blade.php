<div class="row page-titles">
    <ol class="breadcrumb">
        @foreach ($items as $item)
            <li class="breadcrumb-item {{ $item['active'] ? 'active' : '' }}">
                @if(!$item['active'])
                    <a href="{{ $item['url'] }}" style="direction: ltr;">{{ $item['name'] }}</a>
                @else
                    <span style="direction: ltr;">{{ $item['name'] }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</div>
