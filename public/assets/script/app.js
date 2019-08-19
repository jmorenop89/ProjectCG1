var app = function () {
    return {
        init: function () {
            var form = $('#frmSearch');
            console.log(form);
            var select = $('.select-pager', form);
            select.change(function () {
                console.log('enviar');
                //$form.submit();
            });
            var $delete = $('.btn-delete');
            var $table = $('.table-model');
            $delete.click(function (e) {
                var $data = $(this).data();
                e.preventDefault();
                swal({
                    title: "¿Esta seguro de Eliminar?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn btn-info btn-fill",
                    confirmButtonText: "Si, eliminar",
                    cancelButtonText: 'Cancelar',
                    cancelButtonClass: "btn btn-danger btn-fill",
                    closeOnConfirm: false,
                    allowOutsideClick: false
                }, function () {
                    $.ajax({
                        type: 'POST',
                        dataType: 'json',
                        url: $data.url,
                        async: false,
                        data: {id: $data.id},
                        success: function (data) {
                            if (data.status == 200) {
                                swal("¡Eliminado!", "Fue eliminado con exito", "success");
                                $('tr[data-id=' + $data.id + ']', $table).remove();
                            }
                        }
                    });
                });
            });
        }
    }
}();

var user = function () {
    return {
        init: function () {
            var frm = $('#frmValidate');
            var data = frm.data();
            frm.validate({
                focusInvalid: false,
                rules: {
                    nombres: {
                        required: true
                    },
                    apellidos: {
                        required: true
                    },
                    numero_documento: {
                        required: true,
                        digits: true,
                        minlength: 8,
                        remote: {
                            url: data.doc,
                            type: 'post',
                            data: {
                                model: data.model,
                                type_doc: function () {
                                    return $('select[name="tipo_documento"]').val();
                                }
                            }
                        }
                    },
                    email: {
                        required: true,
                        email: true,
                        remote: {
                            url: data.email,
                            type: "post",
                            data: {
                                id: data.id
                            }
                        }
                    },
                    direccion: {
                        required: true
                    }
                },
                messages: {
                    email: {
                        remote: 'El correo ya esta registrado'
                    },
                    numero_documento: {
                        remote: 'El número de Documento ya esta registrado'
                    }
                }
            });
        }
    }
}();
