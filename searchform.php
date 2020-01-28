<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>" class="c-search-form">

   <label class="c-search-form__label">
      <span class="u-screen-reader-text">
         <?php echo esc_html_x( 'Search for:', 'label', '_themename' ) ?>
      </span>
      <input type="search" name="s" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', '_themename') ?>" value="<?php echo esc_attr(get_search_query()) ?>" class="c-search-form__field" />
   </label>

   <button type="submit" class="c-search-form__button">
      <span class="u-screen-reader-text">
         <?php echo esc_html_x( 'Search', 'submit button', '_themename' ); ?>
      </span>
      <i class="fas fa-search" aria-hidden="true"></i>
   </button>
   
</form>