select = $('.select-pager');
form = $('#frmSearch');
select.change(function(){
    //console.log('cambio');
    form.submit();//evento submit
});
//console.log(select);