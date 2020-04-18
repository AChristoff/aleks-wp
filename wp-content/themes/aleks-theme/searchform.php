<form role="search" method="get" id="searchform"
      class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <div>
        <label class="screen-reader-text" for="s">
            <?php _x('', 'label'); ?>
        </label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s"/>
        <button type="submit"
                id="searchsubmit"
                value="<?php echo esc_attr_x('', 'submit button'); ?>">
            <i class="fas fa-search"></i>
        </button>
    </div>
</form>
