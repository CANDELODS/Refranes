<div class="formulario__campo">
    <input
        type="text"
        class="formulario__input"
        name="nombre" id="nombre"
        placeholder="Nombres"
        value="<?php echo $usuario->nombre;?>">
</div>

<div class="formulario__campo">
    <input
        type="text"
        class="formulario__input"
        name="apellido" id="apellido"
        placeholder="Apellidos"
        value="<?php echo $usuario->apellido;?>">
</div>


<div class="formulario__campo">
    <input
        type="email"
        class="formulario__input"
        name="email" id="email"
        placeholder="Correo Electrónico"
        value="<?php echo $usuario->email;?>">
</div>

<div class="formulario__campo">
    <input
        type="password"
        class="formulario__input"
        name="password" id="password"
        placeholder="Contraseña">
</div>

<div class="formulario__campo">
    <input
        type="password2"
        class="formulario__input"
        name="password2" id="password2"
        placeholder="Repite Tu Contraseña">
</div>

<label class="formulario__label formulario__label--label-imagen">Foto De Perfil (Formato png, jpg)</label>

<div class="formulario__campo formulario__campo--imagen">
        <input
        type="file"
        class="formulario__input formulario__input--file"
        name="imagen" id="imagen">
        <label class="formulario__label formulario__label--imagen" for="imagen"><span>Seleccionar Archivo</span></label>
</div>