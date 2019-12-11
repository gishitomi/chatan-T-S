<?php if(have_posts()):?>
    <?php while(have_posts()) : the_post() ?>

    <!-- アイキャッチを表示させる -->
    <!-- ()内にlargeやmediumとかでサイズを変えられる -->
    <li><?php the_post_thumbnail('medium')?></li>


    <li><?php the_title() ?></li>
    <li><?php the_category() ?></li>
    <li><?php the_author() ?></li>
    <li><?php the_excerpt() ?></li>
    <li><?php the_permalink() ?></li>
    <li><?php the_content() ?></li>
    <li>
        <a href="<?php the_permalink() ?>"><?php the_title()?></a>
    </li>
    <li><?php the_category()?></li>
    <?php endwhile;?>
<?php endif;?>