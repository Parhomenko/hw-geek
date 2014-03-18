<?php get_header(); ?>

    <div class="content">
    	<p class="about_gh"><strong>GeekHub</strong>— це проект, що надає можливість отримати практичні знання та навички в сфері розробки програмного забезпечення. На відміну від традиційної освіти, викладачі GeekHub працюють з новітніми технологіями у провідних софтверних компаніях, тому слухачі GeekHub отримують тільки актуальні знання. Якщо ти зацікавлений — запрошуємо ознайомитись з деталями проекту, та <a href="#">зареєструватися</a> слухачем!</p>
    	<h2>Наши курсы</h2>

    	<ul class="main_content">
    		<?php if (have_posts()) : ?>
    		<?php while (have_posts()) : the_post()?>
        		<li>
        			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        			<?php the_content(); ?>
        		</li>
    		<?php endwhile; ?>


    	    <?php endif; ?>
    	</ul>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
