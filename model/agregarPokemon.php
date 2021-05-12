
<body>
<form name="MiForm" id="MiForm" method="post" action="insertarNuevo.php" enctype="multipart/form-data">
    <h4 class="text-center">Seleccione imagen a cargar</h4>
    <div class="form-group">
        <label class="col-sm-2 control-label">Archivos</label>
        <div class="col-sm-8">
            <input type="number" class="form-control" id="id" name="id" required placeholder="ingresar id">
            <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="ingresar nombre">
            <input type="text" class="form-control" id="tipo" name="tipo" required placeholder="ingresar tipo">
            <input type="file" class="form-control" id="imagen" name="imagen" size="20" required>
        </div>
        <button name="submit" class="btn btn-primary">Cargar Imagen</button>
    </div>
</form>
</body>

<?php
?>
