<?php
/**
 * Typecho主题：DEVBLOG（ <a href="https://www.cnbanwagong.com/" target="_blank">主题发布官网地址</a>）
 * 暑假清凉季主题一枚
 *
 * 基于BootStrap前端框架样式架设的Typecho主题，适合个人日志博客使用。 
 * 申明：主题静态模板来自：https://github.com/xriley/DevBlog-Theme，版权归原作者所有。
 * @package DevBlog Typecho博客主题 
 * @author 乐乐
 * @version 2019.8
 * @link https://www.cnbanwagong.com/
 */
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
      <section class="cta-section theme-bg-light py-5">
        <div class="container text-center">
          <h2 class="heading">工欲善其事，必先利其器</h2>
          
          

                <form class="signup-form form-inline justify-content-center pt-3" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
    <div class="form-group"><input placeholder="<?php _e('输入关键字搜索'); ?>"  type="text" name="s" class="form-control mr-md-1 semail" size="32" /> <input type="submit" class="btn btn-primary" value="Search" /></div>
</form>
        </div><!--//container-->
      </section>
      <section class="blog-list px-3 py-5 p-md-5">
        <div class="container">
     <?php while($this->next()): ?>
          <div class="item mb-5">
            <div class="media">
             
              <div class="media-body">
                <h3 class="title mb-1"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
                <div class="meta mb-1"><?php $this->category(','); ?> / <span class="date"><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></span><span class="comment"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></span></div>
                <div class="intro"><?php $this->content(''); ?></div>
                <a class="more-link" href="<?php $this->permalink() ?>">阅读更多 &rarr;</a>
              </div><!--//media-body-->
            </div><!--//media-->
          </div><!--//item-->
            <?php endwhile; ?>  
          
          
          <?php $this->pageNav('前一页', '后一页'); ?>
        
        </div>
      </section>
      
     <?php $this->need('footer.php'); ?>
    