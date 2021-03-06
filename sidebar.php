
<aside class="main__left">
    <div class="main__left-box">
        <nav class="main__nav">
            <ul class="main__nav-list">
              <?php 
                if ( is_home() ) {
                // This is the blog posts index
                  echo '<li class="main__nav-item main__nav-active"><a href="/" class="main__nav-link">Главное</a></li>';
                  get_sidebar( 'blog' );
                } else {
                  echo '<li class="main__nav-item"><a href="/" class="main__nav-link">Главное</a></li>';
                  // This is not the blog posts index
                  get_sidebar();
                }
               ?>
            </ul>
               <?php wp_nav_menu(array(
                  'theme_location' => 'main',
                  'container'       => 'ul',
                  'items_wrap' => '<ul class="%s$s">%3$s</ul>',
                  'menu_class' => 'main__nav-list',
                  'depth' => '1',
                 )) ?>
        </nav>
        <div class="main__social social">
            <a target="_blank" class="pqrldvk _vk social__link" href="<?php echo get_theme_mod( 'social-network_vk' , 'https://vk.com' ); ?>">
                <svg viewBox="0 0 10 6" id="ui-social-vk" class="social__link-svg">
                    <path d="M9.947 5.153a.686.686 0 0 0-.034-.065c-.173-.313-.505-.696-.994-1.15l-.01-.011-.006-.005-.005-.006h-.005a6.107 6.107 0 0 1-.422-.427c-.108-.138-.132-.28-.073-.422.042-.107.198-.334.469-.682.142-.183.255-.331.338-.442.6-.799.86-1.309.78-1.531L9.956.36C9.935.33 9.88.3 9.794.274A.813.813 0 0 0 9.46.261l-1.5.01a.194.194 0 0 0-.103.003L7.789.29l-.026.013-.02.016a.226.226 0 0 0-.058.054.358.358 0 0 0-.052.091c-.163.42-.349.81-.557 1.172-.129.215-.247.402-.354.56a2.718 2.718 0 0 1-.27.348 1.872 1.872 0 0 1-.199.18c-.059.045-.104.064-.135.057a5.556 5.556 0 0 1-.089-.02.342.342 0 0 1-.117-.128.567.567 0 0 1-.06-.203 2.318 2.318 0 0 1-.015-.46l.005-.22c0-.132.003-.275.008-.43l.013-.366c.003-.09.005-.186.005-.287 0-.1-.006-.18-.018-.237a.803.803 0 0 0-.055-.166.28.28 0 0 0-.107-.125.598.598 0 0 0-.174-.07A3.49 3.49 0 0 0 4.811 0c-.646-.007-1.06.035-1.244.125a.698.698 0 0 0-.198.156c-.063.076-.071.118-.026.125.208.031.355.106.442.224l.032.062a.98.98 0 0 1 .072.24c.025.114.04.241.047.38.018.253.018.47 0 .65a7.51 7.51 0 0 1-.05.422.844.844 0 0 1-.132.36.09.09 0 0 1-.026.026.386.386 0 0 1-.14.026c-.05 0-.108-.024-.178-.073a1.248 1.248 0 0 1-.216-.2 2.677 2.677 0 0 1-.252-.357 6.238 6.238 0 0 1-.292-.542l-.083-.15a12.296 12.296 0 0 1-.214-.425 8.086 8.086 0 0 1-.239-.54.346.346 0 0 0-.125-.166L1.963.33A.555.555 0 0 0 1.76.25L.333.26C.188.261.09.294.037.36L.016.39A.17.17 0 0 0 0 .474C0 .513.01.56.031.615c.209.49.435.962.68 1.416.244.455.457.821.637 1.099.181.278.365.54.552.786.188.246.312.404.373.474.06.07.108.121.143.156l.13.125c.083.083.206.183.367.3.162.116.34.23.536.343.197.113.425.205.685.276.26.071.514.1.76.086h.6a.414.414 0 0 0 .275-.115l.02-.026a.53.53 0 0 0 .057-.24c-.002-.148.009-.283.035-.403.026-.12.055-.21.088-.27a.653.653 0 0 1 .201-.23.35.35 0 0 1 .041-.018c.084-.027.182 0 .295.081.112.082.218.182.317.302.1.12.218.255.357.404.139.149.26.26.364.333l.104.062c.07.042.16.08.271.115a.58.58 0 0 0 .292.026l1.333-.02a.603.603 0 0 0 .307-.066c.073-.043.116-.091.13-.143a.404.404 0 0 0 .003-.177.676.676 0 0 0-.037-.138z" fill="currentColor"></path>
                </svg>
            </a>
            <a target="_blank" class="xuycvo social__link _fb" href="<?php echo get_theme_mod( 'social-network_facebook' , 'https://facebook.com' ); ?>">
                <svg viewBox="0 0 6 10" id="ui-social-fb" class="social__link-svg">
                    <path d="M5.163.133L3.976.131c-1.334 0-2.196.885-2.196 2.253v1.04H.586A.186.186 0 0 0 .4 3.61v1.505c0 .103.084.186.186.186H1.78V9.1c0 .103.084.187.187.187h1.557a.187.187 0 0 0 .187-.187V5.301h1.396a.187.187 0 0 0 .186-.186V3.61c0-.05-.02-.097-.054-.133a.186.186 0 0 0-.132-.054H3.711v-.88c0-.424.1-.639.652-.639h.8a.186.186 0 0 0 .186-.187V.32a.187.187 0 0 0-.186-.187z" fill="currentColor"></path>
                </svg>
            </a>
            <a target="_blank" class="sworfv social__link _tw" href="<?php echo get_theme_mod( 'social-network_twitter' , 'https://twitter.com' ); ?>">
                <svg viewBox="0 0 20 16" id="ui-social-tw" class="social__link-svg">
                    <path d="M20 1.857a8.48 8.48 0 0 1-2.38.655c.85-.492 1.473-1.31 1.813-2.239-.793.437-1.643.82-2.606.983A4.174 4.174 0 0 0 13.824 0c-2.266 0-4.079 1.802-4.079 4.041 0 .328.057.6.113.928A11.646 11.646 0 0 1 1.416.765c-.34.6-.566 1.31-.566 2.02 0 1.42.736 2.621 1.813 3.331-.68 0-1.303-.218-1.87-.491v.054A3.988 3.988 0 0 0 4.08 9.611c-.34.11-.68.164-1.076.164-.283 0-.51 0-.793-.055a4.063 4.063 0 0 0 3.852 2.785 8.303 8.303 0 0 1-5.099 1.748c-.34 0-.68 0-.963-.055A11.707 11.707 0 0 0 6.289 16C13.824 16 17.96 9.884 17.96 4.532v-.546A9.268 9.268 0 0 0 20 1.856z" fill="currentColor"></path>
                </svg>
            </a>
            <a target="_blank" class="_ok social__link vnjysbz" href="<?php echo get_theme_mod( 'social-network_ok' , 'https://ok.ru' ); ?>">
                <svg viewBox="0 0 13 21" id="ui-social-ok" class="social__link-svg">
                    <path d="M6.187 3.102c1.258 0 2.282.984 2.282 2.192 0 1.208-1.024 2.191-2.282 2.191s-2.283-.983-2.283-2.19c0-1.21 1.025-2.193 2.283-2.193zm0 7.484c3.04 0 5.512-2.374 5.512-5.292C11.7 2.374 9.227 0 6.187 0 3.147 0 .674 2.375.674 5.294c0 2.918 2.472 5.292 5.513 5.292zm2.23 4.318a10.554 10.554 0 0 0 3.201-1.273c.754-.456.982-1.414.506-2.138-.474-.726-1.47-.945-2.226-.488a7.245 7.245 0 0 1-7.423 0c-.755-.457-1.752-.238-2.226.488-.476.725-.249 1.682.505 2.138a10.57 10.57 0 0 0 3.202 1.273l-3.082 2.96a1.508 1.508 0 0 0 0 2.193c.316.302.729.454 1.142.454.413 0 .827-.152 1.143-.454l3.027-2.908 3.03 2.908c.63.606 1.652.606 2.283 0a1.506 1.506 0 0 0 0-2.193l-3.082-2.96z" fill="currentColor"></path>
                </svg>
            </a>
            <a target="_blank" class="social__link grwfuja _yb" href="<?php echo get_theme_mod( 'social-network_youtube' , 'https://youtube.com' ); ?>">
                <svg viewBox="0 0 16 12" id="ui-social-yb" class="social__link-svg">
                    <path clip-rule="evenodd" d="M14.251.746a2.04 2.04 0 0 1 1.415 1.465C16 3.504 16 6.2 16 6.2s0 2.696-.334 3.989a2.04 2.04 0 0 1-1.415 1.465C13.003 12 8 12 8 12s-5.003 0-6.251-.346a2.04 2.04 0 0 1-1.415-1.465C0 8.896 0 6.2 0 6.2s0-2.696.334-3.989A2.04 2.04 0 0 1 1.75.746C2.997.4 8 .4 8 .4s5.003 0 6.251.346zM10.5 6.452l-4-2.522v5.044z" fill="currentColor" fill-rule="evenodd"></path>
                </svg>
            </a>
            <a target="_blank" class="_tg cuhqwx social__link" href="<?php echo get_theme_mod( 'social-network_telegram' , 'https://t.me/' ); ?>">
                <svg viewBox="0 0 14 14" id="ui-social-tg" class="social__link-svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.485 8.94l5.188 3.961c.592.338 1.02.163 1.167-.568L13.952 2.05c.216-.896-.33-1.302-.897-1.036L.654 5.954c-.847.351-.842.84-.155 1.057l3.183 1.026 7.367-4.803c.348-.218.667-.1.405.14" fill="currentColor"></path>
                </svg>
            </a>
            <a target="_blank" class="social__link _ig prdxk" href="<?php echo get_theme_mod( 'social-network_instagram' , 'https://www.instagram.com' ); ?>">
                <svg viewBox="0 0 14 14" id="ui-social-ig" class="social__link-svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7 0C5.1 0 4.862.008 4.115.042 3.37.076 2.86.194 2.415.368c-.46.178-.85.417-1.24.807-.39.389-.628.78-.808 1.24-.173.445-.291.954-.325 1.699C.01 4.86 0 5.099 0 7c0 1.901.008 2.139.042 2.886.035.745.153 1.254.326 1.699.178.46.418.85.807 1.24.389.389.78.629 1.24.808.445.173.954.29 1.699.325.746.034.985.042 2.886.042 1.901 0 2.139-.008 2.886-.042.745-.034 1.254-.152 1.7-.325.46-.18.85-.419 1.239-.808.389-.39.628-.78.808-1.24.172-.446.29-.954.325-1.7C13.99 9.14 14 8.902 14 7c0-1.901-.009-2.14-.042-2.886-.035-.746-.153-1.254-.325-1.7-.18-.46-.419-.85-.808-1.24a3.422 3.422 0 0 0-1.24-.806c-.446-.174-.955-.292-1.7-.326C9.138.008 8.9 0 6.998 0h.003zm-.627 1.261H7c1.869 0 2.09.007 2.828.04.683.032 1.053.146 1.3.242.327.127.56.278.804.523.245.245.397.479.524.805.096.247.21.617.241 1.3.034.738.041.96.041 2.827 0 1.869-.007 2.09-.04 2.828-.032.683-.146 1.053-.242 1.3-.127.326-.279.559-.524.804a2.164 2.164 0 0 1-.804.523c-.246.096-.617.21-1.3.241-.738.034-.96.041-2.828.041-1.87 0-2.091-.007-2.829-.04-.682-.032-1.053-.146-1.3-.242a2.168 2.168 0 0 1-.805-.523 2.17 2.17 0 0 1-.524-.805c-.095-.247-.21-.617-.24-1.3-.034-.737-.041-.96-.041-2.828 0-1.87.007-2.09.04-2.828.032-.683.146-1.053.241-1.3.127-.326.28-.56.524-.805.245-.245.479-.396.805-.524.247-.096.618-.21 1.3-.24.646-.03.896-.039 2.2-.04v.001zm4.364 1.163a.84.84 0 1 0 0 1.68.84.84 0 0 0 0-1.68zm-3.736.981a3.595 3.595 0 1 0 0 7.19 3.595 3.595 0 0 0 0-7.19zm0 1.262a2.333 2.333 0 1 1 0 4.666 2.333 2.333 0 0 1 0-4.666z" fill="currentColor"></path>
                </svg>
            </a>
        </div>
         <?php dynamic_sidebar('sidebar-1'); ?>
    </div>
</aside>