<div class="Heading"> <h2> Специальное предложения </h2>  </div>
<?php
$taimlog = $_COOKIE["$naim"];
$taim = time();
$taimSk = 86400 - ($taim - $taimlog);
$taimhour = intval($taimSk /3600);

$taimsek = $taimSk % 60;
$taimSk= floor($taimSk/60);
$taimmin = $taimSk % 60;
$taimSk= floor($taimSk/60);
$taimmhour = floor($taimSk);


?>
<div class="sale-wrap">
<div class="sale-inner">
<div class="sale-text"><h2>Весеннее предложение</h2>
<p>40% <span>скидка*</span></p>
<p><span>Спа-массаж стоп</span></p>

<p class="sale-text-info">до истечения предложения очталось <?php echo ("$taimmhour ч $taimmin мин $taimsek сек");?> </p>
</div>
</div>
</div>