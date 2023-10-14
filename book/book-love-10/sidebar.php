<div class="main_left"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" alt="" align="top" style="width:100px; height:267px"/>

<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(__('Left sidebar','theme110')) ) : else : ?>	
							<div class="widget_style" id="categories">
								<div class="cats_head_bg">
									<h2 class="h3"><?php _e('Categories','theme110'); ?></h2>
								</div>
								<ul>
									<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
								</ul>
							</div>
							<div class="widget_style" id="archives">
								<div class="cats_head_bg">
									<h2 class="h3"><?php _e('Archives','theme110'); ?></h2>
								</div>
								<ul>
									<?php get_archives('monthly','10','custom','<li>','</li>'); ?>
								</ul>
							</div>
					
<?php endif; ?>
					
							<div class="widget_style" id="meta">
								<div class="cats_head_bg">
									<h2 class="h3"><?php _e('Meta','theme110'); ?></h2>
								</div>
								<ul>
									<?php wp_register('<li>', '</li>'); ?>
									<li><?php wp_loginout(); ?></li>
									<li><a href="http://www.wpthemesmaster.com/" title="Wordpress Themes">Wordpress Themes</a></li>
									<?php wp_meta(); ?> 
							</ul></div>
							
							
						</div>
						<div class="left_2"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" alt="" align="top" style="width:22px; height:1px"/></div>



