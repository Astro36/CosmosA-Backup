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
                <span class="mdl-layout-title">Proxima B</span>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Proxima B</span>
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
                <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" id="content" style="padding: 0 24px 24px 24px">
                    <h4>Error <span class=mdl-color-text--primary>403</span> Forbidden.</h4>
                    <span class=mdl-color-text--primary>엑세스가 금지되었습니다.</span><br><br>
                    요청하신 페이지는 엑세스가 금지되었습니다. 요청하신 디렉토리 내에 인덱스 페이지가 없으신 경우 업로드 하신 후 접속해 보시기 바랍니다.
                </div>
                <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" id="content" style="padding: 0 24px 0 24px">
                    <ul class="mdl-list">
                        <?php
                            foreach ($navs as $key => $value) {
                                echo '<li class="mdl-list__item">';
                                echo '<a class="mdl-color-text--grey-700 mdl-button mdl-js-button mdl-js-ripple-effect" href="' . $value . '" style="margin: 0 auto;">' . $key . '</a>';
                                echo '</li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <?php include '../footer.tmpl'; ?>
        </main>
    </div>
    <?php include '../scripts.tmpl'; ?>
</body>

</html>