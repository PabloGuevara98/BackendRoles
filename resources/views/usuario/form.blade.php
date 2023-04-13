<h1>{{ $modo }} Usuario</h1>
<br>
<div class="form-group">


<label for="nombre">Nombre:</label>
<input type="text" id="nombre" class="form-control" value="{{ isset($usuario->nombre)?$usuario->nombre:'' }}" name="nombre" required>
<br>
</div>

<div class="form-group">
<label for="apellido">Apellido:</label>
<input type="text" id="apellido" class="form-control" value="{{ isset($usuario->apellido)?$usuario->apellido:''}}" name="apellido" required>
<br>
</div>


<div class="form-group">
<label for="correo">Correo:</label>
<input type="email" id="email"  class="form-control" value="{{ isset($usuario->correo)?$usuario->correo:'' }}" name="correo">
<br>
</div>


<div class="form-group">
<label for="celular">Celular:</label>
<input type="text" id="celular" class="form-control" value="{{ isset($usuario->celular)?$usuario->celular:'' }}" name="celular">
<br>
</div>

<div class="form-group">
<label for="edad">Edad:</label>
<input type="text" id="edad" class="form-control" value="{{ isset($usuario->edad)?$usuario->edad:'' }}" name="edad">
<br>
</div>


<div class="form-group">
<label for="cedula">Cédula:</label>
<input type="text" id="cedula" class="form-control" value="{{ isset($usuario->cedula)?$usuario->cedula:'' }}" name="cedula">
<br>
</div>

<div class="form-group">
<label for="tipo_usuario">Tipo de usuario::</label>
<select name="tipo_usuario" id="tipo_usuario" class="form-control" value="{{ isset($usuario->tipo_usuario)?$usuario->tipo_usuario:'' }}">
    <option value="">Seleccione el tipo de usuario</option>
    <option value="jurado">Jurado</option>
	<option value="participante">Participante</option>
	<option value="administrador">Administrador</option>
</select>
<br>
</div>
<input class="btn btn-success" type="submit" value="{{ $modo }} datos">
<a class="btn btn-primary" href="{{ url('usuario/') }}">Regresar</a>
<br>