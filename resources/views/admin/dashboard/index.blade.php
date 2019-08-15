@extends('admin.layout.index')

@section('title')
    Dashboard
@endsection

@section('title.section')
    Dashboard
@endsection

@section('content')

   
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            demo.initStatsDashboard();
        });
    </script>
@endsection