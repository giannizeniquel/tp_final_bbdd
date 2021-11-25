<?php
    class ControladorUsuarios{
        static public function ctrIngresar(){
            if(isset($_POST['login_us'])){
                /* preg_match establece el formato excluyendo caracteres especiales */
                if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['login_us']) &&
                    preg_match('/^[a-zA-Z0-9]+$/', $_POST['login_pass']) ){

                        $tabla = "usuarios";
                        $item = "usuario";
                        $valor = $_POST['login_us'];
                        $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item,$valor);

                        if($respuesta['usuario'] == $_POST['login_us'] && 
                            $respuesta['password'] == $_POST['login_pass']){

                                $_SESSION['iniciarSesion']="ok";

                                echo '<script>
                                          window.location = "inicio";
                                      </script>';
                        }else{
                            echo ("<div class='alert alert-danger'>Error al ingresar al sistema</div>");
                        }

                }
            }
        }
    }