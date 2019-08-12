@extends('admin.layout.index')

@section('title')
    Dashboard
@endsection

@section('title.section')
    Dashboard
@endsection

@section('content')

    @include('admin.dashboard.cards')

    <div class="row">
        @include('admin.dashboard.charts')

        @include('admin.dashboard.table-user')

        @include('admin.dashboard.table-driver')
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            demo.initStatsDashboard();
        });
    </script>
@endsection