<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Inventaris';
?>
<div class="site-index">

    <!-- <div class="jumbotron"> -->
        <!-- <h1>Selamat Datang!</h1> -->

        <!-- <p class="lead">Anda berada di PT. KUNANGO JANTAN CABANG PEKANBARU</p> -->

        <?php /* Html::a('Lihat Data Asset Inventaris', ['/laporan/laporan'], ['class'=>'btn btn-lg btn-success']) */ ?>

    <!-- </div> -->

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Visi</h2>

                <p>“Ikut menunjang Pembangunan Listrik & Infrastruktur Bagi Masyarakat Luas”</p>

                <p><a class="btn btn-default" href="#">Read more.. &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Misi</h2>

                <p>a.   Menjadi sebuah pabrik Tiang Beton dan Tiang Pancang yang terpercaya, dan selalu mengutamakan kualitas demi kepuasan pelanggan.</p>
                <p>b.   Memperhatikan dan peduli terhadap kondisi lingkungan sekitar pabrik.</p>
                <p>c.  Mengembangkan perusahaan dengan manajemen yang bersifat professional, sehat dan menguntungkan<span id="dots">...</span></p>
                <p><span id="more">d.  Menjadi mitra bisnis yang tepat di bidang pelistrikan dan infrastruktur Indonesia.</p>
                <p>e.  Menyadari bahwa setiap hasil dari produksi nantinya bisa dipakai dan bermanfaat bagi kehidupan orang banyak.</p>
                <p>f.  Menjadi suatu kebanggaan bagi setiap karyawan dan karyawati yang bekerja di perusahaan.</span></p>



                <p><a class="btn btn-default" id="myBtn" onclick="myFunction()">Read more... &raquo;</a></p>
            </div> 
            <div class="col-lg-4">
                <h2>Sejarah</h2>

                <p>PT.KUNANGO JANTAN adalah sebuah perusahaan yang bergerak di bidang manufacturing dan trading yang didirikan berdasarkan Akta Notaris Arry Supratno, SH No. 30 tanggal 09 April 1993, perusahaan ini awalnya bergerak  bidang trading mekanikal elektrikal yang mengakibatkan terjadinya perubahan pada Akta Notaris Frida Damayanti, SH No. 4 tanggal 09 Januari 2001. Pada awal berdirinya perusahaan ini hanya memproduksi Manufacture Tiang Besi. </p>

                <p><a class="btn btn-default" href="#">Read more... &raquo;</a></p>
            </div>
        </div>

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
