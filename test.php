<?php  
        require 'connect.php';
        $record2 = $collection2->find();
        foreach($record2 as $int){
            
              echo "<tr>
              <td data-title='Provider Name'>".
                $int['name']."
              </td>
              <td data-title='Provider Name'>".
                $int['nbed']."
              </td>
              <td data-title='Provider Name'>".
                $int['ncyn']."
              </td>";
              
              
        }
?>