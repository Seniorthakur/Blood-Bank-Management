<?php

if(isset($_POST['search']))
{

$search = $_POST['search'];

$q=$db->query("SELECT * FROM donor_reg WHERE fname LIKE '%$search%' OR addres LIKE '%$search%' OR today LIKE '%$search%' OR phone LIKE '%$search%' OR bloodg LIKE '%$search%' OR email LIKE '%$search%' OR branch LIKE '%$search%' OR age LIKE '%$search%'");
while($r1=$q->Fetch(PDO::FETCH_OBJ))

?>
<tr>
<td><div class="center"><?= $id; ?></b></td>
<td><div class="center"><?=$branch; ?></div></td>
<td><div class="center"><?=$fname; ?></div></td>
<td><div class="center"><?=$age; ?></b></div></td>
<td><div class="center"><?=$email; ?></div></td>
<td><div class="center"><?=$phone; ?></div></td>
<td><div class="center"><strong><?=$bloodg; ?></strong></div></td>
<td><div class="center"><?=$addres; ?></div></td>
<td><div class="center"><?=$gender; ?></div></td>
<td><div class="center"><?=$today; ?></div></td>
</tr>
<?php

}
else
{
?>
<tr>
<td colspan="10">no record found</td>
</tr>
<?php
}
?>