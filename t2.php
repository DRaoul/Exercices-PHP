<?php



echo '<table border >

        <tr>

        <th> Nombre </th>
        <th> Nombre </th>
        <th> Nombre </th>

        </tr>' ;

        for ($i = 0; $i < 10; $i++){ 

                     echo'
                     <tr> 
                           <td> '.$i.' </td>
                           <td> '.$i*$i.' </td>
                           <td> '.sqrt($i).' </td>

                     </tr> ';
        
        
        
        }




echo '</table>';