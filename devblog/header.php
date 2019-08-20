<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php if($this->_currentPage>1) echo '第 '.$this->_currentPage.' 页 - '; ?><?php $this->archiveTitle('', '', '_'); ?><?php $this->options->title(); ?>
<?php if($this->is('index')): ?>_<?php $this->options->subtitle() ?><?php endif; ?></title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
 <link rel="shortcut icon" href="<?php $this->options->themeUrl('assets/images/favicon.ico'); ?>"> 
<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/theme-1.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/css.css'); ?>">
<?php if($this->is('index')): ?>
  <meta name="description" content="<?php $this->options->description() ?>" />
  <meta name="keywords" content="<?php $this->options->keywords() ?>" />
   <?php else: ?>
    <?php $this->header(); ?><?php endif; ?>
</head> 






