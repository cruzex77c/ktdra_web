const infoG = {
    0: {
        titulo: 'Crédito PYME',
        texto: 'Enfocado a las pequeñas y medianas empresas, el cual puedes cubrir en un corto, mediano o largo plazo, contando con la más atractiva del mercado.'
    },
    1: {
        titulo: 'Crédito AUTOMOTRICES',
        texto: 'Contando con una tasa de interés más baja de las que ofrecen las instituciones de Banca Múltiple.'
    },
    2: {
        titulo: 'Créditos HIPOTECARIOS',
        texto: 'Se realiza a medio o al largo plazo, y se suele respaldar con la garantía de una vivienda, en unas condiciones pactadas y plasmadas en un contrato.'
    },
    3: {
        titulo: 'Créditos PERSONALES',
        texto: 'Solicita tu crédito personal. Con nuestros beneficios podrás disponer de dinero en efectivo para lo que necesites; te prestamos hasta 5 millones.'
    },
    4: {
        titulo: 'Créditos PRENDARIOS',
        texto: '¿Un crédito sin antigüedad mínima requerida y hecho a tu medida? Un crédito flexible que utiliza tus activos como garantía.'
    }
}
$(document).ready(function(){ 
    let plazo = $('#plazo').val();
    $('#mensualidad').text(cotizar(30000,plazo));
    $('.close-modal').click(function(){
        let modal = $(this).closest('.modal');
        modal.toggleClass('modal-show');
    });

    $('#btn_fomulario').click(function(){
        $('#modal_formulario').toggleClass('modal-show');
    });
    $('#title').fadeIn(3000);

    $('#btn-menu').click(function(){
        $('.wrap-menu').toggleClass('show-menu');
    });

    $('.sub-menu').click(function(){
        let anclaje = $(this).data('rel');
        $('html, body').animate({
            scrollTop: $('#'+anclaje).offset().top
            }, 1000);
    });

    $('#listas > li').mouseenter(function(){
        let info = $(this).data('info');
        $('#titulo-lista').text(infoG[info].titulo);
        $('#texto-lista').text(infoG[info].texto);
    });

    $('#form_cotizacion').submit(function(event){
        event.preventDefault();
        if($('#terminos').prop('checked')){
            
            let form = $(this);
            let boton = form.find(':submit');
            boton.prop('disabled',true);
    
            let datos = form.serialize();
    
            $.ajax({
                url: 'control/enviar_correo.php',
                method: 'POST',
                dataType: 'JSON',
                data: datos
            }).done(function(respuesta){
                if(respuesta.estatus == 'success'){
                    alert('mensaje  correctamente');
                    $('#form_cotizacion')[0].reset();
                }else{
                    //console.log(respuesta.erno);
                }
            }).always(function(){
                boton.prop('disabled',false);
            });
        }else{
            alert('Es necesario aceptar los términos y codiciones');
        }
    });



    /*=====cotizador=======*/
    $('#monto').change(function(){
        let monto = $(this).val();
        let plazo = $('#plazo').val();
        $('#monto_val').text('$'+$(this).val());
        $('#mensualidad').text(cotizar(monto,plazo));
        $('#monto_form').val(monto);
    });
    $('#plazo').change(function(){
        let plazo = $(this).val();
        let monto = $('#monto').val();
        $('#plazo_val').text($(this).val()+' meses');
        $('#mensualidad').text(cotizar(monto,plazo));
        $('#plazo_form').val(plazo);
    });
});

function cotizar(monto,plazo){
    let mensualidad = 0;
    if(monto < 150000){
         mensualidad = (monto/plazo)*1.15;
    }else{
         mensualidad = (monto/plazo)*1.07;
    }
    return Math.round(mensualidad);
}