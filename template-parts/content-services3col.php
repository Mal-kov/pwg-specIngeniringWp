<?php  ?>

<div class="col-md-4">
    <div class="taskElement">
        <div class="taskElement_title">
            <?php the_excerpt(); ?>
        </div>
        <div class="taskElement_devider"></div>
        <div class="taskElement_bg">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="taskElement_text">
            <?php the_content(); ?>
        </div>
    </div>
</div>