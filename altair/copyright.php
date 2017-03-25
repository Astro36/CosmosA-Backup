<!DOCTYPE html>
<html lang="en" class="mdl-js">

<head>
    <?php
        include '../meta.tmpl';
        include 'meta-color.tmpl';
        include 'meta-info.tmpl';
    ?>
</head>

<body>
    <div class="mdl-color--grey-100 mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Altair</span>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Altair</span>
            <nav class="mdl-navigation">
                <?php
                    $navs = json_decode(file_get_contents('navs.json'), true);
                    foreach ($navs as $key => $value) {
                        echo '<a class="mdl-navigation__link" href="' . $value . '">' . $key . '</a>';
                    }
                ?>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div id="top"></div>
            <div class="mdl-grid">
                <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" id="content" style="padding: 0 24px 0px 24px">
                    <h4>License</h4>
                    <ul class="mdl-list">
                        <li class="mdl-list__item mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">
                                <a href="https://github.com/Astro36/Altair">Altair</a>
                                <span class="mdl-list__item-sub-title">© <a href="https://github.com/Astro36">Astro</a>, <a href="https://github.com/Astro36/Altair/blob/master/LICENSE">GPL-3.0</a></span>
                            </span>
                        </li>
                        <li class="mdl-list__item mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">
                                <a href="https://github.com/ezyang/htmlpurifier">Html Purifier</a>
                                <span class="mdl-list__item-sub-title">© <a href="https://github.com/ezyang">ezyang</a>, <a href="https://github.com/ezyang/htmlpurifier/blob/master/LICENSE">LGPL-2.1</a></span>
                            </span>
                        </li>
                        <li class="mdl-list__item mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">
                                <a href="https://github.com/google/material-design-lite">Material Design Lite</a>
                                <span class="mdl-list__item-sub-title">© <a href="https://github.com/google">Google</a>, <a href="https://github.com/google/material-design-lite/blob/master/LICENSE">Apache-2.0</a></span>
                            </span>
                        </li>
                        <li class="mdl-list__item mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">
                                <a href="https://github.com/google/material-design-icons">Material Design Icons</a>
                                <span class="mdl-list__item-sub-title">© <a href="https://github.com/google">Google</a>, <a href="https://github.com/google/material-design-icons/blob/master/LICENSE">Apache-2.0</a></span>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" id="content" style="padding: 0 24px 24px 24px">
                    <h4>Resources</h4>
                    <h5>img_altair.png</h5>
                    <div style="background: url('../assets/img_altair.png') center / cover; border-radius: 8px; width: 256px; height: 256px;">
                    </div>

                    <h5>img_milkyway.jpg</h5>
                    <div style="background: url('assets/img_milkyway.jpg') center / cover; border-radius: 8px; width: 256px; height: 256px;">
                    </div><br>
                    <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="http://wallpaperswide.com/milky_way_mountains_landscape_by_yakub_nihat-wallpapers.html">Download</a><br>
                </div>
            </div>
            <?php include '../footer.tmpl'; ?>
        </main>
    </div>
    <?php include '../scripts.tmpl'; ?>
</body>

</html>