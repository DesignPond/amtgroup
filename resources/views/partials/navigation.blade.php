<div id="menu-wrapper" class="menu-wrapper ">
    <div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>
    <nav id="main-menu" class="menu-header-menu-container">
        <ul class="menu">
            @foreach($links as $link)
                <li id="menu-item-705" class="menu-item {{ Request::is($link['slug']) ? 'current-menu-item' : '' }}  page_item menu-links-with-border menu-item-simple-parent ">
                    <a href="{{ secure_url($link['slug']) }}">{{ $link['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
    <div class="menu-icons-wrapper">
        <div class="search">
            <a href="javascript:void(0)" class="dt-search-icon"> <span class="fa fa-search"> </span> </a>
            <div class="top-menu-search-container">
                <!-- **Searchform** -->
                <form method="get" id="searchform" action="https://financewp.wpengine.com/">
                    <input id="s" name="s" type="text" value="Enter Keyword" class="text_input" onblur="if(this.value==''){this.value='Enter Keyword';}" onfocus="if(this.value =='Enter Keyword') {this.value=''; }" />
                    <a href="javascript:void(0)" class="dt-search-icon"> <span class="fa fa-close"> </span> </a>
                    <input name="submit" type="submit"  value="Go" />
                </form>
                <!-- **Searchform - End** -->
            </div>
        </div>
    </div>
</div>
