<?php {
        array_push($data, $row);
?> <tr> 
        <td><div class="center"><?php $row['id'];?></div></td>
        <td><div class="center"><?php $row['branch']; ?></div></td>
        <td><div class="center"><?php $row['fname'];?></div></td>
        <td><div class="center"><?php $row['age']; ?></b></div></td>
        <td><div class="center"><?php $row['email']; ?></div></td>
        <td><div class="center"><?php $row['phone']; ?></div></td>
        <td><div class="center"><strong><?php $row['bloodg']; ?></strong></div></td>
        <td><div class="center"><?php $row['addres']; ?></div></td>
        <td><div class="center"><?php $row['gender'];?></div></td>
        <td><div class="center"><?php $row['today'];?></div></td>
    </tr>
    <?php
    }//while ends


}//if ends
?>
<tr>
<td colspan="10">no record found</td>
</tr>
<?php

}//outer if ends

// echo '<pre>';

// print_r($data);
// echo '</pre>';

mysqli_close($link);
?>