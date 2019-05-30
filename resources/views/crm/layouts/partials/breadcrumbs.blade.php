@if (count($breadcrumbs))
    <ol class="breadcrumb breadcrumb-col-cyan navbar-left m-t-20 hidden-xs">
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)
                <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}"><i class="material-icons">$breadcrumb->icon</i>{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
            @endif

        @endforeach
    </ol>

@endif
