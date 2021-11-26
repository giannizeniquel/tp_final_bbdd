<?php
    class ControladorUsuarios{

        static public function ctrMostrarUsuarios($item, $valor){
            $tabla = "usuarios";
            $respuesta = ModeloUsuarios::mdlMostrarusuarios($tabla, $item, $valor);
            return $respuesta;
        }

        static public function ctrEditarUsuario(){
            if(isset($_POST['editar_usuario_nombre']) && isset($_POST['editar_usuario_email']) &&
                isset($_POST['editar_usuario_clave']) && isset($_POST['editar_usuario_rol'])){

                $tabla = "usuarios";
                $salt = md5($_POST['editar_usuario_clave']);
                $pass_encriptado = crypt($_POST['editar_usuario_clave'], $salt);

                $datos = array("nombre" => $_POST['editar_usuario_nombre'], 
                                "usuario" => $_POST['editar_usuario_email'],
                                "password" => $pass_encriptado, 
                                "perfil" => $_POST['editar_usuario_rol']);

                $respuesta = ModeloUsuarios::mdlEditarUsuario($tabla, $datos);
                if($respuesta == "ok"){
                    echo( "<script>
                            Swal.fire({
                                title: 'Success!',
                                text: 'Usuario actualizado con éxito',
                                icon: 'success',
                                confirmButtonText: 'Aceptar'
                            });
                        </script>"
                    );
                }else{
                    echo( "<script>
                            Swal.fire({
                                title: 'Error!',
                                text: 'No se pudo actualizar usuario, intentalo de nuevo',
                                icon: 'error',
                                confirmButtonText: 'Aceptar'
                            });
                        </script>"
                    );
                }

            }
        }

        static public function ctrCrearusuario(){
            if(isset($_POST['usuario_nombre']) && isset($_POST['usuario_email']) &&
                isset($_POST['usuario_clave']) && isset($_POST['usuario_rol'])){

                $tabla = "usuarios";
                $salt = md5($_POST['usuario_clave']);
                $pass_encriptado = crypt($_POST['usuario_clave'], $salt);

                $datos = array("nombre" => $_POST['usuario_nombre'], "usuario" => $_POST['usuario_email'],
                            "password" => $pass_encriptado, "perfil" => $_POST['usuario_rol']);

                $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);
                if($respuesta == "ok"){
                    echo( "<script>
                            Swal.fire({
                                title: 'Success!',
                                text: 'Usuario creado con éxito',
                                icon: 'success',
                                confirmButtonText: 'Aceptar'
                            });
                        </script>"
                    );
                }else{
                    echo( "<script>
                            Swal.fire({
                                title: 'Error!',
                                text: 'No se pudo crear usuario, intentalo de nuevo',
                                icon: 'error',
                                confirmButtonText: 'Aceptar'
                            });
                        </script>"
                    );
                }

            }
        }

        static public function ctrIngresar(){
            if(isset($_POST['login_us'])){
                /* preg_match establece el formato excluyendo caracteres especiales */
                /* if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['login_us']) &&
                    preg_match('/^[a-zA-Z0-9]+$/', $_POST['login_pass']) ){ */

                    $tabla = "usuarios";
                    $item = "usuario";
                    $valor = $_POST['login_us'];
                    $salt = md5($_POST['login_pass']);
                    $pass_encriptado = crypt($_POST['login_pass'], $salt);
                    $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item,$valor);
                    echo '<script>
                                       console.log($respuesta);
                                    </script>';

                    if($respuesta['usuario'] == $_POST['login_us'] && 
                        $respuesta['password'] == $pass_encriptado){

                            $_SESSION['iniciarSesion'] = "ok";
                            $_SESSION['nombre'] = $respuesta['nombre'];
                            $_SESSION['usuario'] = $respuesta['usuario'];
                            $_SESSION['perfil'] = $respuesta['perfil'];
                            $_SESSION['ultimo_login_fecha'] = $respuesta['ultimo_login'];
                            
                            //Fecha login
                            date_default_timezone_set("America/Argentina/Buenos_Aires");
                            $fecha = date("y-m-d");
                            $hora = date("H:i:s");
                            $fecha_actual = $fecha." ".$hora;
                            $item1 = "ultimo_login";
                            $valor1 = $fecha_actual;
                            $item2 = "id";
                            $valor2 = $respuesta['id'];
                            $actualizar_login = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);
                            if($actualizar_login == "ok"){
                                echo '<script>
                                        window.location = "inicio";
                                    </script>';
                            }else{
                                echo ("<div class='alert alert-danger' style='text-align: center; margin-top: 2%;'>Error al iniciar sesión, contacte a un administrador</div>");
                            }
                            
                    }else{
                        echo ("<div class='alert alert-danger' style='text-align: center; margin-top: 2%;'>Usuario o contraseña incorrectos</div>");
                    }

                /* } */
            }
        }
    }