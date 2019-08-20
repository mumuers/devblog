<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
  

<body>
    
    <header class="header text-center">     
      <h1 class="blog-name pt-lg-4 mb-0"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
        
      <nav class="navbar navbar-expand-lg navbar-dark" >
           
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div id="navigation" class="collapse navbar-collapse flex-column" >
        <div class="profile-section pt-3 pt-lg-0">
            <img class="profile-image mb-3 rounded-circle mx-auto" src="<?php $this->options->logoUrl() ?>" alt="image" >      
          
          <div class="bio mb-3"><?php $this->options->subtitle() ?></div><!--//bio-->
          <ul class="social-list list-inline py-3 mx-auto">
                  <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
              </ul><!--//social-list-->
              <hr> 
        </div><!--//profile-section-->
        
        <ul class="navbar-nav flex-column text-left">
          <li class="nav-item active"> <a<?php if($this->is('index')): ?> class="active"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('网站首页'); ?></a></li>
          <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <li class="nav-item"> <a<?php if($this->is('page', $pages->slug)): ?> class="active"<?php endif; ?> href="<?php $pages->permalink(); ?>" class="nav-link" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
                    <?php endwhile; ?>
                


        </ul>
        
        
      </div>
    </nav>
    </header>
    
    <div class="main-wrapper">
    
       <article class="blog-post px-3 py-5 p-md-5">
        <div class="container">
          <header class="blog-post-header">
            <h2 class="title mb-2"><?php $this->title() ?></h2>
            <div class="meta mb-3">分类：<?php $this->category(','); ?> / 时间：<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time> / <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></div>
          </header>
          
          <div class="blog-post-body"><?php $this->content(); ?> </div>
            
          <nav class="blog-nav nav nav-justified my-5">
         <p> 上一篇&gt;&gt; <?php $this->thePrev('%s','没有了'); ?></p>
         <p> 下一篇&gt;&gt; <?php $this->theNext('%s','没有了'); ?></p>
        </nav>
        
        <div class="blog-comments-section">
          
<?php $this->need('comments.php'); ?>

          
        </div><!--//blog-comments-section-->
        
        </div><!--//container-->
      </article>
      
     <?php $this->need('footer.php'); ?>
    