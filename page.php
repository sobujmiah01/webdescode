<?php get_header();?>
    <section class="web_slogan_wrapper">
        <article class="web_slogan">
            <h2>Website</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam sapiente quaerat nemo, quam quos facere
                aperiam doloremque placeat consectetur provident!</p>
        </article>
    </section>
    <main class="main_article_post">
        <article class="web_post_wrapper">
            <div class="web_post_inner">
                <?php
                    if(have_posts()):
                        while(have_posts()): the_post();?>
                        <div class="post_wrapper">
                            <article>
                                <?php the_content();?>
                            </article>
                        </div>
                        <?php endwhile;
                    else:
                        echo'Nothing, Post here';
                    endif;
                ?>
            </div>
        </article>
        <?php get_sidebar();?>
    </main>
<?php get_footer();?>