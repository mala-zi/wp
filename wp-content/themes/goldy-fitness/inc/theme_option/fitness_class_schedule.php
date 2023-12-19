<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldy
 */

$selected_class_categories = get_theme_mod( 'goldy_select_class_schedule_categories', array() );
$goldy_fintess_class = Kirki::get_option( 'goldy_select_class_schedule_time' );

	if ($selected_class_categories) { 
?>
<div class="fitness_class_schedule_section">
    <div class="fitness_class_data">
    	<?php if(get_theme_mod('goldy_fitness_class_schedule_main_title', 'Class Schedule')) { ?>
        	<div class="fitness_class_schedule_main_title heading_main_title wow fadeInUp">
        		<h2><?php echo esc_html(get_theme_mod('goldy_fitness_class_schedule_main_title', 'Class Schedule'));?></h2>
        	</div>
        <?php } ?>
    	<div class="fitness_class_schedule wow fadeInUp">
    		<div class="fitness_text_column">
			   	<div class="fitness_main_wrapper">
			      	<div class="fitness_schedule_init">
			         	<table class="fitness_table_main">
			            	<thead>
			               		<tr class="fitness_table_row">
				                  	<th></th>
				                  	<?php
							            $category_names = array();
							            foreach ($selected_class_categories as $category_id) {
										    $category = get_term($category_id, 'fitness-categories');
										    if (!empty($category->name)) {
										        $category_names[] = $category->name;
										    }
										}
										foreach ($category_names as $category_name) { 
											if (!empty($category_name)) {
							        		?>
					                  	<th class="fitness_class_day"><?php echo esc_html($category_name); ?></th>
				                  	<?php
								    }
								}
							    ?>
				               </tr>
				            </thead>
			            	<tbody>
			            		<?php
                                $row_index = 1;
                                foreach ($goldy_fintess_class as $class) {
                                    if (!empty($class['time'])) {
                                        ?>
				               	<tr class="mptt-shortcode-row" data-index="<?php echo $row_index; ?>">
				                  	<td class="fitness_table_hours"><?php echo esc_html($class['time']); ?></td>
				                  		<?php
                                            foreach ($selected_class_categories as $category_id) {
                                                ?>
				                  		<td class="fitnes_event" colspan="1" rowspan="1">
						                    <div class="fitnes_event_container">
						                    	<?php
						                        	$args = get_posts(array(
													    'post_type' => 'fitness-class',
													    'post_status' => 'publish',
													    'posts_per_page' => -1,
													    'tax_query' => array(
													        array(
													            'taxonomy' => 'fitness-categories',
													            'field'    => 'term_id',
													            'terms'    => $category_id,
													        ),
													    ),
													)); 
													foreach($args as $pro_post){
														$post_link = get_permalink($pro_post->ID);
														$goldy_schedule_trainer_name = get_post_meta($pro_post->ID, 'goldy_schedule_trainer_name', true);
														$goldy_start_time = get_post_meta($pro_post->ID, 'goldy_start_time', true);

													    /*echo "<pre>";
													    print_r($goldy_start_time);
													    echo "</pre>";*/ 

														$goldy_end_time = get_post_meta($pro_post->ID, 'goldy_end_time', true);

														$class_time = strtotime($class['time']);
											            $start_time = strtotime($goldy_start_time);
											            $end_time = strtotime($goldy_end_time);

														if (!empty($class['time']) && (($class_time >= $start_time && $class_time <= $end_time))) {

													?> 
						                        <div class="fitnes_event_inner_content">
					                        	
													<div class="fitness_class_style">
							                            <a href="<?php echo esc_url($post_link); ?>" class="post-title"><?php echo esc_html( $pro_post->post_title ); ?></a>
							                            <?php if(!empty($goldy_schedule_trainer_name)){ ?>
							                            <p class="fitnes_event_subtitle"><?php echo esc_html($goldy_schedule_trainer_name); ?></p>
								                        <?php } ?>
						                            </div>
						                            
						                        </div>
						                        <?php
							                           // break; 
									                        }
	                                                    }
	                                                ?>
						                    </div>
				                  		</td>
					                  	<?php
	                                    }
                                    ?>
			               		</tr>
			               		<?php
                                    $row_index++;
                                        }
                                    }
                                ?>
			            	</tbody>
			         	</table>
			      	</div>
			   	</div>
			</div>
	    </div>
    </div>
</div>
<?php } ?>