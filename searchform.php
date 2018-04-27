<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <label for="s" class="searchform__label"><?php _e('Search for:','bonestheme'); ?></label>
        <input type="search" id="s" name="s" class="searchform__input" value="" />

        <button type="submit" id="searchsubmit" class="searchform__submit" ><?php _e('Search','bonestheme'); ?></button>
    </div>
</form>