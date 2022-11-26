 <div class="info">
            <div class="container">
                <ul class="info_list">
                    <li>
                        <!-- <b>価格</b> -->
                        <span>
                            <?php
                            $img1 = get_field('course_image1');
                            if(!empty($img1)):
                            ?>
                            <img src="<?php echo $img1['sizes']['medium']; ?>" alt="<?php echo $img1['alt']; ?>">
                            <?php endif; ?>
                        </span>
                    </li>
                    <li>
                        <!-- <b>カロリー</b> -->
                        <span><?php the_field('course_discription1');?></span>
                    </li>
                    <li>
                        <!-- <b>アレルギー</b> -->
                        <span>
                            <?php the_field('course_time1');?>
                        </span>
                    </li>
                </ul>
            </div>
