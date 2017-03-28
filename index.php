<!DOCTYPE html>
<html lang="en" class="mdl-js">

<head>
    <?php
        include 'meta.tmpl';
        include 'meta-color.tmpl';
        include 'meta-info.tmpl';
    ?>
</head>

<body>
    <div class="mdl-color--grey-100 mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">MineDev</span>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">MineDev</span>
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
                            <img src="assets/ic_create_white.png" width="96px" height="96px">
                        </td>
                        <td class="mdl-color-text--white">
                            <h4 style="margin-top: 0;">Index</h4>
                            환영합니다!<br>
                            좌측 탭에서 원하는 페이지로 이동할 수 있습니다.
                        </td>
                    </tr>
                </table>
            </div>
            <div class="mdl-grid">
                <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" id="logo" style="padding: 24px 24px 24px 24px">
                    <div style="background: url('assets/img_favicon.png') center / cover; border-radius: 8px; margin: 0 auto; width: 200px; height: 200px;">
                    </div>

                    <h4>About</h4>
                    프로그래밍을 다루는 사이트로 나름 다양한 기능을 제공한다.<br>
                    특히 ModPE 스크립트 개발자들에게 코드 난독화 사이트로 알려져 있다.<br>
                    2016년 1월 25일 생성되었지만, 개발자가 한동안 묵혀두고 있었다.<br>
                    2016년 5월 5일부터 본격적인 개발에 들어가 현재의 모습이 되었다.<br>
                    2017년 3월 6일 한 번 갈아 엎었다.
                </div>
                <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" id="logo" style="padding: 24px 24px 24px 24px">
                    <div style="background: url('assets/img_astro.png') center / cover; border-radius: 8px; margin: 0 auto; width: 200px; height: 200px;">
                    </div>

                    <h4>Astro</h4>
                    이 사이트의 개발자이다.<br>
                    스페인어로 <a href="http://m.spdic.naver.com/m/spEntry.nhn?entryNO=10186">별</a>이라는 뜻이다.<br><br>
                    <span class="mdl-chip mdl-chip--contact">
                        <span class="mdl-chip__contact mdl-color--primary mdl-color-text--white">A</span>
                        <a class="mdl-chip__text mdl-color-text--grey-800" href="https://t.me/psj1026" style="text-decoration: none;">Astro | Telegram</a>
                    </span>
                    <span class="mdl-chip mdl-chip--contact">
                        <span class="mdl-chip__contact mdl-color--primary-dark mdl-color-text--white">A</span>
                        <a class="mdl-chip__text mdl-color-text--grey-800" href="mailto:astr36@naver.com" style="text-decoration: none;">Astro | E-mail</a>
                    </span>
                </div>
            </div>

            <div style="background: url('assets/img_full_moon.jpg') center / cover; height: 400px;"></div>
            <div class="mdl-color--blue-grey-700" style="padding: 28px; text-align: center;">
                <h1 class="mdl-color-text--white">Hello, world!</h1>
                <h4 class="mdl-color-text--white">Welcome to MineDev</h4>
            </div>

            <div class="mdl-grid">
                <?php
                    $apps = json_decode(file_get_contents('apps.json'), true);
                    $i = 0;
                    foreach ($apps as $name => $app) {
                        echo '<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col' . ($i % 2 === 0 ? ' mdl-cell--2-offset-desktop' : '') . '" id="logo" style="padding: 24px 24px 24px 24px">';
                        echo '<div style="background: url(' . $app['image'] . ') center / cover; border-radius: 8px; margin: 0 auto; width: 200px; height: 200px;"></div>';
                        echo '<h4>' . $name . '</h4>';
                        echo $app['description'] . '<br><br>';

                        echo '<div style="text-align: right;">';
                        foreach ($app['links'] as $key => $link) {
                            echo '<a class="mdl-color-text--white mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--accent" href="' . $link['url'] . '">' . $link['text'] . '</a>';
                        }
                        echo '</div>';
                        echo '</div>';
                        $i++;
                    }
                ?>
            </div>
            <?php include 'footer.tmpl'; ?>
        </main>
    </div>
    <?php include 'scripts.tmpl'; ?>
</body>

</html>