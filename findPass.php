<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" type="image/ico" href="Css/images/favicon.ico"/>
        <link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
        <script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="Js/bootstrap/bootstrap.js"></script>
        <script type="text/javascript" src="Js/jquery.validate.min.js"></script>
        <title>Buscar passwd</title>
    </head>
    <body>
        <?php require_once 'Includes/navegador.php'; ?>
    <center>
        <div class="container">
            <div style="margin: 0;padding-top: 35px;">
                <fieldset>
                    <legend><span class="text-info">BUSQUEDA DE USUARIOS EN EL SISTEMA DE NOTAS</span></legend>
                    <div class="row" style="padding-top: 5px;">
                        <div class="span6"><h5>INGRESE USUARIO O DNI:</h5></div>
                        <div class="span6"><input type="text" id="txtdni" name="txtdni" maxlength="8" min="8" required/></div>
                        <div class="span12">
                            <br><br><button id="btnrun" name="btnrun" class="btn btn btn-danger">BUSCAR DETALLES DEL USUARIO</button><br><br>
                            <span id="mensaje" class="text-success" style="font-weight: bold;"></span>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </center>
    <?php include './Includes/modal-footer.php'; ?>
</body>
</html>
<script type="text/javascript">
    $(function () {
        $('#btnrun').prop('disabled', true);
    });

    $('#txtdni').change(function (e) {
        valuetxt = e.target.value;
        if (valuetxt == '') {
            $('#btnrun').prop('disabled', true);
        } else {
            $('#btnrun').prop('disabled', false);
        }
    });

    $('#btnrun').click(function (e) {
        dni = $('#txtdni').val();
        FindDni(dni);
    });


    function FindDni(DNI) {
        $.ajax({
            url: 'http://localhost:8080/SISTEMA-DE-NOTAS/findpassData.php',
            type: 'POST',
            data: {dni: DNI},
            beforeSend: function (xhr) {
                $('#mensaje').html('procesando');
                $('#btnrun').prop('disabled', true);
                
            },
            success: function (data, textStatus, jqXHR) {
                $('#mensaje').html(data).addClass('text-success').removeClass('text-error');
                $('#btnrun').prop('disabled', true);
                $('#txtdni').val('');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $('#mensaje').html('error').addClass('text-error').removeClass('text-success');
                $('#btnrun').prop('disabled', false);
            }
        });
    }
</script>