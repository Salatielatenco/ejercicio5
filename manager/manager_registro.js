$(document).ready(function(){

let nombre;
let paterno;
let materno;
let edad
let estatura
let peso



    $('#btn_registro_usuario').click(function(){
        nombre=$('#nombre').val();
        apellido=$('#paterno').val();
        materno=$('#materno').val();
        edad=$('#edad').val();
        estatura=$('#estatura').val();
        pesp=$('#peso').val();


        recolector = "bandera_nombre=" +$('#nombre').val()+
                        "&bandera_paterno=" + $('#paterno').val()+
                        "&bandera_materno=" + $('#materno').val()+
                        "&bandera_estatura=" + $('#estatura').val()+
                        "&bandera_edad=" + $('#edad').val()+
                        "&bandera_peso=" + $('#peso').val();

                    $.ajax({

                        type:'POST',
                        data:
                            recolector
                        ,
                        url: 'control/control_form.php',
                        success : function(resultado){
                            console.log(resultado)
                        }
                    });
    });
});