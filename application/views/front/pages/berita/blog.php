<!--================Home Banner Area =================-->
<div class="banner_area">
  <div class="overlay">
    <h1>Berita</h1>
  </div>
</div>
<!--================End Home Banner Area =================-->

<!-- Berita -->
<div class="last-news mt-4 mb-5">
	<div class="container">

		<div class="row">
			<?php foreach($news as $n) : ?>
				<div class="col-lg-3 col-md-6 col-12 mb-4">
					
					<div class="news-card">

						<!-- FOTO -->
						<div class="news-img">
							<img src="<?= base_url('img/berita/thumbs/' . $n->photo) ?>">
						</div>

						<!-- ISI -->
						<div class="news-body">
							<h5><?= $n->title ?></h5>
							<p><?= character_limiter($n->content,50) ?></p>

							<a href="<?= base_url("blog/baca/$n->seo_title") ?>" class="btn btn-success btn-sm">
								Baca <i class="fa fa-angle-right ml-1"></i>
							</a>
						</div>

					</div>

				</div>
			<?php endforeach ?>
		</div>

		<!-- Pagination -->
		<div class="row mt-4">
			<div class="col text-center">
				<nav>
					<?= $pagination ?>
				</nav>
			</div> 
		</div>
		<!-- End of Pagination -->

	</div>
</div>
<!-- End of Berita -->

<!-- STYLE -->
<style>

/* BANNER */
.banner_area{
  background: url('<?= base_url('img/banner_area/bg.jpg') ?>') center/cover no-repeat;
  height:180px;
  position:relative;
  border-radius:0 0 25px 25px;
}

.banner_area .overlay{
  background:rgba(0,0,0,0.5);
  height:100%;
  display:flex;
  justify-content:center;
  align-items:center;
}

.banner_area h1{
  color:white;
  font-weight:bold;
}

/* CARD BERITA */
.news-card{
  background:#fff;
  border-radius:15px;
  overflow:hidden;
  box-shadow:0 6px 15px rgba(0,0,0,0.1);
  transition:0.3s;
  height:100%;
  display:flex;
  flex-direction:column;
}

.news-card:hover{
  transform:translateY(-5px);
}

/* GAMBAR */
.news-img{
  height:150px;
  overflow:hidden;
}

.news-img img{
  width:100%;
  height:100%;
  object-fit:cover;
  transition:0.3s;
}

.news-card:hover img{
  transform:scale(1.05);
}

/* BODY */
.news-body{
  padding:12px;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  flex:1;
}

.news-body h5{
  font-size:14px;
  font-weight:bold;
  margin-bottom:8px;
}

.news-body p{
  font-size:12px;
  color:#666;
}

/* BUTTON */
.btn-success{
  background:#25D366;
  border:none;
  border-radius:8px;
}

.btn-success:hover{
  background:#128C7E;
}

/* PAGINATION */
.pagination{
  justify-content:center;
}

/* MOBILE */
@media(max-width:768px){
  .banner_area{
    height:140px;
  }

  .news-body h5{
    font-size:13px;
  }
}

</style>