<div class="search-container">
                    <div class="search-toggle" id="searchToggle">
                        <i class="fas fa-search"></i>
                        <span><?php echo get_search_query(); ?></span>
                    </div>
                    <div class="search-box" id="searchBox">
                        <form action="/" method="get" class="search-form">
                          <input value="<?php echo get_search_query(); ?>"  name="s" type="text" class="search-input" placeholder="Search destinations, guides, tips...">
                          <input type="hidden" value="post" name="post_type" id="post_type" />
                            <button type="submit" class="search-button">
                              <i class="fas fa-search"></i>
                            </button>
                        </form>
                        <div class="search-suggestions">
                            <span class="search-suggestion">Bali</span>
                            <span class="search-suggestion">Switzerland</span>
                            <span class="search-suggestion">Japan</span>
                            <span class="search-suggestion">Photography</span>
                            <span class="search-suggestion">Budget Travel</span>
                        </div>
                    </div>
                </div>