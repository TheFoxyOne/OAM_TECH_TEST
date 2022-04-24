<!-- FEATURED TALENT -->
<div class="featured_talent">
    <h2><?php echo $json_data['featured_talent'] ?></h2>
    <div class="featured_talent_search_filter">
        <h3><?php echo $json_data['search_filter'] ?></h3>
        <div class="featured_talent_filters">
            <button class="button active"><?php echo $json_data['show_all'] ?></button>
            <button class="button"><?php echo $json_data['talent_a'] ?></button>
            <button class="button"><?php echo $json_data['talent_b'] ?></button>
            <button class="button"><?php echo $json_data['talent_c'] ?></button>
            <button class="button"><?php echo $json_data['talent_d'] ?></button>
        </div>
    </div>
    <div class="featured_talents">
    <?php foreach($json_data['featured_talents'] as $index => $post){
                    echo '<div class="featured_talents_talent">
                    <div class="row">
                        <div class="column_a">
                            <img src='.$post['image'].' alt="" srcset="">
                        </div>
                        <div class="column_b">
                            <div class="featured_talents_talent_paragraph">
                                <p>'.$post['paragraph'].'</p>
                            </div>
                            <div class="featured_talents_talent_url row bigScreen">
                                <h4>'.$json_data['talent_url'].'</h4>
                                <a href='.$post['url'].'>'.$post['url_title'].'</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mobile">
                        <div class="column_a"></div>
                        <div class="column_b">
                            <div class="featured_talents_talent_url row">
                                <h4>'.$json_data['talent_url'].'</h4>
                                <a href='.$post['url'].'>'.$post['url_title'].'</a>
                            </div>
                        </div>
                    </div>
                </div>';
                } ?>
        
    </div>
</div>