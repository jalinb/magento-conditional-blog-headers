<?php if (Mage::getSingleton('blog/cat')->getCatId() == 4):?>
    <div class="category-header">
        <div class="fluid_container block">
            <div class="block-title blog-block">
                <img class="img-responsive" alt="technology image" src="https://metrahometheater.com/skin/frontend/default/metrahtg/images/headers/blog/metra-home-theater-blog-hdr.png">
            </div>
        </div>
    </div>

    <a href="https://metrahometheater.com/subscribe.html">
        <button class="button">
            <span>Subscribe to Our Blog</span>
        </button>
    </a>
<?php else: ?>
    <a href="https://metrahometheater.com/subscribe.html">
        <button class="button">
            <span>Subscribe to Our News</span>
        </button>
    </a>
<?php endif; ?>