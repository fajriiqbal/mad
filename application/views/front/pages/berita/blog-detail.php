<style>
  .article-page{
    padding: 28px;
  }

  .article-shell{
    max-width: 920px;
    margin: 0 auto;
  }

  .article-head{
    margin-bottom: 18px;
  }

  .article-title{
    font-size: clamp(1.8rem, 3vw, 3rem);
    line-height: 1.12;
    font-weight: 800;
    letter-spacing: -0.04em;
    margin: 14px 0 12px;
  }

  .article-meta{
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 12px;
    border-radius: 999px;
    background: var(--accent-soft);
    color: var(--accent);
    font-size: 13px;
    font-weight: 700;
  }

  .article-cover{
    border-radius: 24px;
    overflow: hidden;
    border: 1px solid var(--border);
    box-shadow: var(--shadow-soft);
    margin: 20px 0;
  }

  .article-cover img{
    width: 100%;
    display: block;
  }

  .article-body{
    padding: 2px 0 0;
    color: var(--text);
    line-height: 1.95;
    font-size: 1rem;
  }

  .article-body img{
    max-width: 100%;
    height: auto;
    border-radius: 18px;
  }

  .article-back{
    margin-top: 24px;
  }

  @media (max-width: 767.98px){
    .article-page{
      padding: 18px;
    }
  }
</style>

<section class="article-page">
  <div class="article-shell">
    <div class="article-head">
      <div class="section-eyebrow"><i class="fas fa-newspaper"></i> Berita</div>
      <h1 class="article-title"><?= $berita->title ?></h1>
      <div class="article-meta">
        <i class="fas fa-calendar-alt"></i>
        <span><?= mediumdate_indo($berita->date) ?></span>
      </div>
    </div>

    <div class="article-cover">
      <img src="<?= base_url('img/berita/' . $berita->photo) ?>" alt="<?= $berita->title ?>">
    </div>

    <div class="article-body">
      <?= $berita->content ?>
    </div>

    <div class="article-back">
      <a href="<?= base_url('blog') ?>" class="soft-btn soft-btn-outline">
        <i class="fas fa-arrow-left mr-2"></i> Kembali ke Berita
      </a>
    </div>
  </div>
</section>
