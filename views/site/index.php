<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Beranda';
$this->params['breadcrumbs'][] = $this->title;


Yii::$app->user->getId()
?>
<div class="site-index">

    <div class="body-content">

        <H1 style="text-align: center; margin-top: 100px;">Assalamua'laikum Selamat Datang...</H1>

    </div>
</div>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
