{{--   Core JS Files. Extra: PerfectScrollbar + TouchPunch libraries inside jquery-ui.min.js   --}}
{!! Html::script('assets/js/jquery-1.10.2.js') !!}
{!! Html::script('assets/js/jquery-ui.min.js') !!}
{!! Html::script('assets/js/bootstrap.min.js') !!}

{{--  Forms Validations Plugin --}}
{!! Html::script('assets/js/jquery.validate/jquery.validate.min.js') !!}
{!! Html::script('assets/js/jquery.validate/messages_es.js') !!}

{{-- CSRF Token --}}
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    });
</script>
{{-- --}}

{{--  Plugin for Date Time Picker and Full Calendar Plugin--}}
{!! Html::script('assets/js/moment/moment.min.js') !!}
{!! Html::script('assets/js/moment/es.js') !!}

{{--  Date Time Picker Plugin is included in this js file --}}
{!! Html::script('assets/js/bootstrap-datetimepicker.js') !!}

{{--  Select Picker Plugin --}}
{!! Html::script('assets/js/bootstrap-selectpicker.js') !!}

{{--  Checkbox, Radio, Switch and Tags Input Plugins --}}
{!! Html::script('assets/js/bootstrap-checkbox-radio-switch-tags.js') !!}

{{-- Circle Percentage-chart --}}
{!! Html::script('assets/js/jquery.easypiechart.min.js') !!}

{{--  Charts Plugin --}}
{!! Html::script('assets/js/chartist.min.js') !!}

{{--  Notifications Plugin    --}}
{!! Html::script('assets/js/bootstrap-notify.js') !!}

{{-- Sweet Alert 2 plugin --}}
{!! Html::script('assets/js/sweetalert2.js') !!}

{{-- Vector Map plugin --}}
{!! Html::script('assets/js/jquery-jvectormap.js') !!}

{{--  Google Maps Plugin    --}}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBx6VAHhpu0_n8Modu0NazY74a_oRYtw7Q&libraries=drawing,places"></script>

{{-- Wizard Plugin    --}}
{!! Html::script('assets/js/jquery.bootstrap.wizard.min.js') !!}

{{--  Bootstrap Table Plugin    --}}
{!! Html::script('assets/js/bootstrap-table.js') !!}

{{--  Plugin for DataTables.net  --}}
{!! Html::script('assets/js/jquery.datatables.js') !!}

{{--  Full Calendar Plugin    --}}
{!! Html::script('assets/js/fullcalendar.min.js') !!}

{{-- Plugin File Input --}}
{!! Html::script('assets/js/bootstrap-fileinput/bootstrap-fileinput.js') !!}

{{-- Paper Dashboard PRO Core javascript and methods for Demo purpose --}}
{!! Html::script('assets/js/paper-dashboard.js') !!}

{{-- Paper Dashboard PRO DEMO methods, don't include it in your project! --}}
{!! Html::script('assets/js/demo.js') !!}

{{-- Script app --}}
{!! Html::script('assets/script/app.js') !!}

