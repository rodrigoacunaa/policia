<?php
                    include("db.php");
                    $sql = "SELECT * FROM `alumnos` WHERE `estado` = 1";
                    $sqlEX = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_array($sqlEX);

                    foreach($sqlEX as $row){
                        
                    echo '
                    <tr>
                    <td>'.$row["nomApe"].'</td>
                    <td>'.$row["dni"].'</td>
                    <td>'.$row["telefono"].'</td>
                    <td>'.$row["distrito"].'</td>       
                    </tr>
                    ';
                    }
                    ?>