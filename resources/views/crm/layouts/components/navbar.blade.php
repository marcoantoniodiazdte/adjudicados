<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">

            <a href="javascript:void(0);" class="col-cyan navbar-toggle collapsed" data-toggle="collapse"
               data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <div class="">
                <a class="navbar-brand" href="{{route('admin.dashboard')}}">
                    <img src="{{asset('img/logos/logo.png')}}" alt="Inmobiliaria RD" style="max-width: 125px;">
                </a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
{{--
            <ol class="breadcrumb breadcrumb-col-cyan navbar-left m-t-20 hidden-xs">

                @if (count($breadcrumbs))
                    @foreach($breadcrumbs as $breadcrumb )
                        <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                    @endforeach
                @endif
            </ol>
--}}

            <ul class="nav navbar-nav navbar-right">
                <li><a id="logout" href="javascript:void(0);"><i class="material-icons">input</i> <span class="hidden-sm visible-md-inline visible-lg-inline">Log Out</span></a></li>


                <script>
                    $('#logout').on('click',function (event) {
                        event.preventDefault();
                        $('#logout-form').submit();
                    });
                </script>

                <form id="logout-form" action="{{ route('admin.logoutAdmin') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </ul>

        </div>

    </div>
</nav>