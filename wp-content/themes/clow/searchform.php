<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <label for="s" class="screen-reader-text"><?php _e('Search for:','bonestheme'); ?></label>
        <input type="search" id="s" name="s" value="" class="input-search"/>

        <button type="submit" id="searchsubmit" class="main-button" ><?php _e('Search','bonestheme'); ?></button>
    </div>
</form>