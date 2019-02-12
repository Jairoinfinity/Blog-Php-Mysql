<?php
    if(isset($_POST)){
        //Datos del formulario.
        $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : false;
        $apellidos = isset($_POST["apellidos"]) ? $_POST["apellidos"] : false;
        $email = isset($_POST["email"]) ? $_POST["email"] : false;
        $password = isset($_POST["password"]) ? $_POST["password"] : false;
    
        //Array de errores.
        $errores = array();

        //Validar los datos del usuario.
        //Validar campo nombre
        if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
            $nombre_validado = true;
        }else{
            $nombre_validado = false;
            $errores["nombre"] = "El nombre no es valido";
        }

        //Validar campo apellidos
        if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
            $apellidos_validado = true;
        }else{
            $apellidos_validado = false;
            $errores["apellidos"] = "Los apellidos no son validos";
        }

        //Validar campo email
        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_validado = true;
        }else{
            $email_validado = false;
            $errores["email"] = "El email no es valido";
        }

        //Validar campo contraseña
        if(!empty($password)){
            $password_validado = true;
        }else{
            $password_validado = false;
            $errores["password"] = "La contraseña esta vacia";
        }

        $guardar_usuario = false;
        if(count($errores) == 0){
            $guardar_usuario = true;

            //Insertamos los datos en la tabla usuarios de la BBDD
            

        }
    }

?>