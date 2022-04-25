<!-- CONNECTION -->
<?php 
// Read the JSON file 
$twitter_feed_json = file_get_contents('./localization/twitter_feed.json');
  
// Decode the JSON file
$twitter_feed_json_data = json_decode($twitter_feed_json,true);
?>

<div class="connection">
    <div class="column_a">
        <div class="info_paragraph">
            <h2><?php echo $json_data['info_title'] ?></h2>
            <p><?php echo $json_data['info_paragraph'] ?></p>
        </div>
        <div class="twitter_feed">
            <h2><?php echo $json_data['twitter_feed_title'] ?></h2>
            <div class="twitter_feed_card">
                <?php foreach($twitter_feed_json_data['data'] as $index => $post){
                    echo '<div class="twitter_feed_post">
                        <div class="twitter_feed_post_image"><img src='.$post['image'].' alt="" srcset=""></div>
                        <div class="twitter_feed_post_data">
                            <div class="twitter_feed_post_title"><h3>'.$post['user'].'</h3></div>
                            <div class="twitter_feed_post_text"><p>'.$post['post'].'</p></div>
                        </div>
                    </div>';
                } ?>
            </div>
        </div>
    </div>
    <div class="column_b">
        <div class="get_in_touch">
            <h2><?php echo $json_data['get_in_touch_title'] ?></h2>
            <div class="get_in_touch_form card">
                <form action="/">
                    <label for="name"><?php echo $json_data['name'] ?>*</label>
                    <input type="text" id="name" name="name" value="" required>
                    <label for="email"><?php echo $json_data['email'] ?>*</label>
                    <input type="text" id="email" name="email" value="" required>
                    <label for="tel"><?php echo $json_data['tel'] ?></label>
                    <input type="text" id="tel" name="tel" value="">
                    <label for="message"><?php echo $json_data['message'] ?>*</label>
                    <textarea name="message" id="message" cols="30" rows="10" required> </textarea>
                    <input type="submit" class="button" value="Submit">
                </form>
                <div class="get_in_touch_required">*<?php echo $json_data['required'] ?></div>
            </div>
        </div>
    </div>
</div>