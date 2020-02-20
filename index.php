<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        
        <!-- Remote Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap-grid.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap-reboot.min.css" />
        
        <?php wp_head(); ?>	
    </head>
    <body>
    <div id="app">   
    <transition name="fade-in"> 
        <router-view 
          v-bind:posts="posts" 
          v-bind:post="post" 
          v-bind:comments="comments"
          v-bind:pagers="pagers">
        </router-view>
    </transition>
    </div>
    <!--app-->
    <?php get_template_part('/templates/home'); ?>
    <?php get_template_part('/templates/archive'); ?>
    <?php get_template_part('/templates/search'); ?>
    <?php get_template_part('/templates/single'); ?>
    <?php get_template_part('/templates/page'); ?> 
    <?php get_template_part('/templates/404'); ?> 
    <?php get_template_part('/templates/_header'); ?>
    <?php get_template_part('/templates/_footer'); ?>
    <?php get_template_part('/templates/_theloop'); ?>
    <?php get_template_part('/templates/_sidebar'); ?>
    <?php get_template_part('/templates/_search-form'); ?>
    <?php get_template_part('/templates/_comments'); ?>
    <?php get_template_part('/templates/_comment-form'); ?>
    <?php get_template_part('/templates/_nopost'); ?>
    
    <!-- Remote Scripts -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>        
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>    
    
    <!-- Bundle Script -->
    <script src="<?php echo get_template_directory_uri(); ?>/dist/all.bundle.js"></script>
    
    <?php wp_footer(); ?>
    </body>
</html>