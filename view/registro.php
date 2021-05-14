<div class="container-fluid">
    
    <div class="row justify-content-around py-4">
        <div class="col-sm-5 tm-1">
            <div style="font-size: 3rem;" class="lead">
                DATOS PERSONALES
            </div>
            <hr>
            <form id="formulario_registro_a">
            <div  class="form-group">
                <label for="nombre" class="lead">Nombres(s):</label>
                <input
                type="text"
                class="form-control form_control-sm"
                id="nombre"
                name="nombre">
            </div>
            <div  class="form-group">
                <label for="paterno" class="lead">Paterno :</label>
                <input
                type="text"
                class="form-control form_control-sm"
                id="paterno"
                name="paterno">
            </div>
            <div  class="form-group">
                <label for="materno" class="lead">Materno :</label>
                <input
                type="text"
                class="form-control form_control-sm"
                id="materno"
                name="materno">
            </div>
            <div  class="form-group">
                <label for="edad" class="lead">Edad: </label> 
                <input
                type="number"
                class="form-control form_control-sm"
                id="edad"
                name="edad">
            </div>
            <div  class="form-group">
                <label for="estatura" class="lead">Estatura :</label>
                <input
                type="text"
                class="form-control form_control-sm"
                id="registro_estatura"
                name="registro_estatura">
            </div>
            <div  class="form-group">
                <label for="peso" class="lead">Peso: </label>
                <input
                type="text"
                class="form-control form_control-sm"
                id="peso"
                name="peso">
            </div>
        
    
        
            <div  class="form-group">
                <span class="btn btn-danger btn-block " id="btn_registro_usuario">
                    <span class="lead"> Registrarse</span>
                </span>
            </div>
            <div  class="form-group">
                <a class="btn btn-dark btn-block " id="btn_cancelar_usuario">
                    <span class="lead"> Cancelar</span>
                </a>
            </div>
        </form>
    </div>

</div>

<script src="manager/manager_registro.js"></script>
