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
                <span class="mdl-layout-title">Meta</span>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Meta</span>
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
            <div class="mdl-color--primary-dark" id="top">
                <table style="margin-left: 10%; margin-right: 10%;">
                    <tr style="height: 168px;">
                        <td style="margin: 0 auto; width: 128px;">
                            <img src="assets/ic_group_white.png" width="96px" height="96px">
                        </td>
                        <td class="mdl-color-text--white">
                            <h4 style="margin-top: 0;">Meta</h4>
                            Youth Developer Team
                        </td>
                    </tr>
                </table>
            </div>
            <div class="mdl-grid">
                <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" id="about" style="padding: 24px 24px 24px 24px">
                    <div style="background: url('../assets/img_meta.png') center / cover; border-radius: 8px; margin: 0 auto; width: 200px; height: 200px;">
                    </div>

                    <h4>About</h4>
                    Meta는 2016년 청소년 개발자를 주축으로 설립되었으며, Team IO, Object Studio, Team LeveL의 역사를 이어받고 있습니다.
                </div>
                <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" id="members" style="padding: 0 24px 0 24px">
                    <h4>Memebers</h4>
                    <ul class="demo-list-icon mdl-list">
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-icon">person</i>
                                Astro
                            </span>
                        </li>
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-icon">person</i>
                                Redstone
                            </span>
                        </li>
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-icon">person</i>
                                Scripter
                            </span>
                        </li>
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-icon">person</i>
                                SuYong
                            </span>
                        </li>
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-icon">person</i>
                                tive
                            </span>
                        </li>
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-icon">person</i>
                                만동이
                            </span>
                        </li>
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-icon">person</i>
                                물외한인
                            </span>
                        </li>
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-icon">person</i>
                                4계절
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" id="milestone" style="padding: 0 24px 24px 24px">
                    <h4>Milestone</h4>
                    <table class="mdl-data-table mdl-js-data-table" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">Date</th>
                                <th class="mdl-data-table__cell--non-numeric">Event</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">2016.01.20</td>
                                <td class="mdl-data-table__cell--non-numeric">Meta 설립</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">2016.01.20</td>
                                <td class="mdl-data-table__cell--non-numeric">자율 실적제 시행</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">2016.02.03</td>
                                <td class="mdl-data-table__cell--non-numeric">1차 공채</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">2016.05.28</td>
                                <td class="mdl-data-table__cell--non-numeric">의무 실적제 시행</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">2016.06.14</td>
                                <td class="mdl-data-table__cell--non-numeric">2차 공채</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">2016.12.20</td>
                                <td class="mdl-data-table__cell--non-numeric">3차 공채</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">2017.01.20</td>
                                <td class="mdl-data-table__cell--non-numeric">Meta 1주년</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">2017.02.05</td>
                                <td class="mdl-data-table__cell--non-numeric">Adagio 팀장 탄핵</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php include '../footer.tmpl'; ?>
        </main>
    </div>
    <?php include '../scripts.tmpl'; ?>
</body>

</html>