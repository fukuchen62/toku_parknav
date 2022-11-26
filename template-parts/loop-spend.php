<div class="info">
            <div class="container">
                <ul class="info_list">
                    <li>
                        <span>
                            <?php
                            $img = get_field('course_image1');
                            if(!empty($img)):
                            ?>
                            <img src="<?php echo $img['sizes']['medium']; ?>" alt="<?php echo $img['alt']; ?>">
                            <?php endif; ?>
                        </span>
                    </li>
                    <li>
                        <span><?php the_field('course_discription1');?></span>
                    </li>
                    <li>
                        <span>
                            <?php the_field('course_time1');?>
                        </span>
                    </li>
                </ul>
            </div>
