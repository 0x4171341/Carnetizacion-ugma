<?php
require ('header.php');
?>

    <div class="container theme-showcase" role="main">

      	<h1> <b> Acceso al sistema </b></h1>
        <br><br><br>
        <center>
            <form action ='valida.php' method = 'POST'> <br>


                <table>
                    <tr align="center">
                        <td colspan="2">
                            <label for='nombrea'>Nombre de usuario:</label>
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2">
                            <input  align="center" type='text' name ='usuario' title='Digita tu usuario' placeholder='Luis'>
                        </td>
                        <td id='cad1' width='200'> </td>
                    </tr>

                    <tr align="center">
                        <td colspan="2">
                            <label for='nombrea'>Password:</label>
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2">
                            <input type="password" name='password1' placeholder='********' title='Digita tu contraseña' placeholder='Ejemplo:1822012985'>
                        </td>
                        <td class="t" id='passwo' width='200'> </td>
                    </tr>
                </table>
                <br>
                <button class="botonC" type='submit'>Ingresar</button>

            </form>
            <br>
            <?php
            $msg=$_GET['msg'];
            echo "<font size='5' face='Imprint MT Shadow' color='red'> $msg  </font>";
            ?>

        </CENTER>
    </div>