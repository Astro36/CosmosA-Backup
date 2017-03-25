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
                <span class="mdl-layout-title">Deneb</span>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Deneb</span>
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
                    <h4>Log</h4>
                    <ul class="mdl-list">
                        <?php
                            include_once 'library/Log.php';

                            $logs = array_reverse(Log::getAll());

                            foreach ($logs as $key => $value) {
                                echo '<li class="mdl-list__item mdl-list__item--two-line">';
                                echo '<span class="mdl-list__item-primary-content">';
                                echo $value['date'] . ' (' . $value['type'] . ')';
                                echo '<span class="mdl-list__item-sub-title">' . $value['description'] . '</span>';
                                echo '</span>';
                                echo '</li>';
                            }

                            if (count($logs) === 0) {
                                echo '<li class="mdl-list__item mdl-list__item--two-line">';
                                echo '<span class="mdl-list__item-primary-content">';
                                echo '기록이 존재하지 않습니다.';
                                echo '</span>';
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