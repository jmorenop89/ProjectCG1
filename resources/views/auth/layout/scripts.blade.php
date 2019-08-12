{{--   Core JS Files. Extra: PerfectScrollbar + TouchPunch libraries inside jquery-ui.min.js   --}}
{!! Html::script('assets/js/jquery-1.10.2.js') !!}
{!! Html::script('assets/js/jquery-ui.min.js') !!}
{!! Html::script('assets/js/bootstrap.min.js') !!}

{{--  Forms Validations Plugin --}}
{!! Html::script('assets/js/jquery.validate/jquery.validate.min.js') !!}
{!! Html::script('assets/js/jquery.validate/messages_es.js') !!}

{{--  Checkbox, Radio, Switch and Tags Input Plugins --}}
{!! Html::script('assets/js/bootstrap-checkbox-radio-switch-tags.js') !!}

{{-- Paper Dashboard PRO Core javascript and methods for Demo purpose --}}
{!! Html::script('assets/js/paper-dashboard.js') !!}

{{-- Paper Dashboard PRO DEMO methods, don't include it in your project! --}}
{!! Html::script('assets/js/demo.js') !!}

<script type="text/javascript">
    $().ready(function () {
        demo.checkFullPageBackgroundImage();

        setTimeout(function () {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>