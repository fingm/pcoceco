<?php
    require_once "controlador.php";
?>
<html>
    <head>
        <title>Pagina de Prueba</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="principal">
            <?php if ($_SESSION['logeado']){ ?>
                <div class="cabezal">

                </div>
                <div class="menu">

                </div>
                <div class="seccion">
                    <div class="seccion_1">

                    </div>
                    <div class="seccion_2">

                    </div>
                </div>
            <?php }else{ ?>
                <div class="login">
                    <form action="index.php" method="POST">
                        <ul>
                            <li class="login_celdas"><h4>Ingreso</h4></li>
                            <table>
                                <tr>
                                    <th style="text-align:left;">usuario :</th>
                                    <th><input type="text" name="login_usu"></th>
                                </tr>
                                <tr>
                                    <th style="text-align:left;">password : </th>
                                    <th><input type="password" name="login_pass"></th>
                                </tr>
                            </table>
                            <li class="login_celdas"  style="text-align:right; margin-right:30px;">
                                <button type="submit" name="accion" value="login_ingreso">ingresar</button>
                            </li>
                        </ul>
                    </form>
                </div>
            <?php }?>
        </div>
    </body>
</html>