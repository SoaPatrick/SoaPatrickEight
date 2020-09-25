<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickeight
 */


$format = get_post_format();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article post-single'); ?>>
  <?php if ($format === 'quote' || $format === 'link' || $format === 'status') : ?>

    <header class="grid article__header">
      <div class="inner-wrapper inner-wrapper__<?php echo $format ?>">
        <?php
          if($format === 'status') :
            echo '<svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M115.2 70.4v121.792c-12.189-5.437-27.01-9.791-44.8-9.791C29.922 182.4 0 214.687 0 256c0 48.546 53.853 57.8 76.315 71.683 17.761 11.062 57.069 42.869 67.144 60.919C134.194 394.208 128 404.38 128 416v64c0 17.673 14.327 32 32 32h224c17.673 0 32-14.327 32-32v-64c0-9.167-3.861-17.428-10.038-23.262C413.719 358.089 448 321.746 448 267.636V244.4c0-59.606-36.084-90.256-85.87-88.631-17.108-14.3-42.155-21.279-65.494-16.635-11.856-7.229-25.395-11.348-39.582-11.885a92.713 92.713 0 0 0-1.054-.033V70.4C256 32.063 224.084 0 185.6 0c-38.161 0-70.4 32.77-70.4 70.4zM160 480v-64h224v64H160zm64-409.6v99.301c16.003-14.004 46.718-15.726 66.6 5.4 21.431-12.247 49.771-1.841 58.5 14.1 42.685-7.116 66.9 10.993 66.9 55.201v23.236c0 44.337-31.267 76.684-40.861 116.364H176.462c-10.706-29.835-59.818-68.904-83.262-83.5C67.686 284.704 32 280 32 256s16-41.6 38.4-41.6c38.4 0 57.9 28.8 76.8 28.8V70.4c0-20.1 18-38.4 38.4-38.4 20.7 0 38.4 17.7 38.4 38.4zM352 428c11.046 0 20 8.954 20 20s-8.954 20-20 20-20-8.954-20-20 8.954-20 20-20z"></path></svg>';
          elseif ($format === 'quote') :
            echo '<svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M176 32H64C28.7 32 0 60.7 0 96v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56H56c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136H56c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56H64c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216zM448 32H336c-35.3 0-64 28.7-64 64v128c0 35.3 28.7 64 64 64h64v24c0 30.9-25.1 56-56 56h-16c-22.1 0-40 17.9-40 40v32c0 22.1 17.9 40 40 40h16c92.6 0 168-75.4 168-168V96c0-35.3-28.7-64-64-64zm32 280c0 75.1-60.9 136-136 136h-16c-4.4 0-8-3.6-8-8v-32c0-4.4 3.6-8 8-8h16c48.6 0 88-39.4 88-88v-56h-96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32h112c17.7 0 32 14.3 32 32v216z"></path></svg>';
          elseif ($format === 'link') :
            echo '<svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M301.148 394.702l-79.2 79.19c-50.778 50.799-133.037 50.824-183.84 0-50.799-50.778-50.824-133.037 0-183.84l79.19-79.2a132.833 132.833 0 0 1 3.532-3.403c7.55-7.005 19.795-2.004 20.208 8.286.193 4.807.598 9.607 1.216 14.384.481 3.717-.746 7.447-3.397 10.096-16.48 16.469-75.142 75.128-75.3 75.286-36.738 36.759-36.731 96.188 0 132.94 36.759 36.738 96.188 36.731 132.94 0l79.2-79.2.36-.36c36.301-36.672 36.14-96.07-.37-132.58-8.214-8.214-17.577-14.58-27.585-19.109-4.566-2.066-7.426-6.667-7.134-11.67a62.197 62.197 0 0 1 2.826-15.259c2.103-6.601 9.531-9.961 15.919-7.28 15.073 6.324 29.187 15.62 41.435 27.868 50.688 50.689 50.679 133.17 0 183.851zm-90.296-93.554c12.248 12.248 26.362 21.544 41.435 27.868 6.388 2.68 13.816-.68 15.919-7.28a62.197 62.197 0 0 0 2.826-15.259c.292-5.003-2.569-9.604-7.134-11.67-10.008-4.528-19.371-10.894-27.585-19.109-36.51-36.51-36.671-95.908-.37-132.58l.36-.36 79.2-79.2c36.752-36.731 96.181-36.738 132.94 0 36.731 36.752 36.738 96.181 0 132.94-.157.157-58.819 58.817-75.3 75.286-2.651 2.65-3.878 6.379-3.397 10.096a163.156 163.156 0 0 1 1.216 14.384c.413 10.291 12.659 15.291 20.208 8.286a131.324 131.324 0 0 0 3.532-3.403l79.19-79.2c50.824-50.803 50.799-133.062 0-183.84-50.802-50.824-133.062-50.799-183.84 0l-79.2 79.19c-50.679 50.682-50.688 133.163 0 183.851z"></path></svg>';
          endif ;
          the_content();
        ?>
      </div>
      <div class="article__meta">
        <?php
          soapatrickeight_posted_on();
          soapatrickeight_tags();
          soapatrickeight_edit_post();
        ?>
      </div>
    </header>

  <?php else : ?>

    <header class="grid article__header">
      <?php the_title( '<h1 class="title-large">', '</h1>' ); ?>

      <div class="article__meta">
        <?php
          soapatrickeight_posted_on();
          soapatrickeight_tags();
          soapatrickeight_edit_post();
        ?>
      </div>
    </header>

    <div class="grid article__content">
      <?php the_content(); ?>
    </div>

  <?php endif; ?>
</article>
