<form class="search-form" method="get" action="<?php echo home_url(); ?>" role="search">
  <input class="search-input" type="text" name="s" placeholder="To search, type and hit enter" value="<?php echo get_search_query(); ?>">
  <button class="search-submit" type="submit" aria-label="Submit"></button>
</form>
