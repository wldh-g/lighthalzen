<?php
/**
 * The main theme template file
 *
 * The main templates that includes DOCTYPE and html tag.
 * All other parts are included in 'partial' directory.
 *
 * @todo Add [role] and [aria].
 * @todo Include shortcuts for screen reader.
 *
 * @package Lighthalzen
 * @subpackage Rekenber
 *
 * @link https://github.com/yuoa/lighthalzen#readme
 * @author Jio Gim (CiTE 5th)
 * @copyright Yuoa (Jio Gim)
 *
**/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php

        // Two cases: Mainpage vs Subpage
        if ( is_front_page() ) :
            get_template_part('partial/head/main');
        else:
            get_template_part('partial/head/sub');
        endif;

        // Insert common part at last
        get_template_part('partial/head/common');

    ?>
</head>
<body id="begin">
    <?php get_header(); ?>
    <span>콘텐츠</span>
    <?php get_footer(); ?>
</body>
</html>
