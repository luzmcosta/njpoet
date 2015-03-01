<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="description" content="New Jersey Poet Professor Activist Charles Bivona reports on the funny and the sad of American culture. Laugh at the truth. Tweet @CharlesBivona" />
  <meta property="og:url" content="<?php echo the_permalink(); ?>" />
  <meta property="og:title" content="Charles Bivona" />
  <meta property="og:description" content="#njpoet" />
  <meta property="og:image" content="<?php echo get_bloginfo('template_directory') ?>/assets/img/njpoet_logo_small.png; ?>" />

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
</head>
