<?php
function afficheDate(){
  $cejour = getdate();
  //$libmois[] = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre' );
  $libmois[1] = 'janvier';
  $libmois[2] = 'février';
  $libmois[3] = 'mars';
  $libmois[4] = 'avril';
  $libmois[5] = 'mai';
  $libmois[6] = 'juin';
  $libmois[7] = 'juillet';
  $libmois[8] = 'aout';
  $libmois[9] = 'septembre';
  $libmois[10] = 'octobre';
  $libmois[11] = 'novembre';
  $libmois[12] = 'décembre';
?>
<div class="">
  <?php  echo $cejour['mday'] . ' ' . $libmois[$cejour['mon']] . ' ' . $cejour['year'];?>
</div>
<?php } ?>
