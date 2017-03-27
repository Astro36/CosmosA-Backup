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
                <span class="mdl-layout-title">JS Tools</span>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">JS Tools</span>
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
                    <h4>Tools</h4>
                    <ul class="mdl-list">
                        <li class="mdl-list__item mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">
                                <a href="?type=caeser_cipher">Caeser Cipher</a>
                                <span class="mdl-list__item-sub-title">카이사르 암호를 사용해서 코드를 난독화합니다.</span>
                            </span>
                        </li>
                        <li class="mdl-list__item mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">
                                <a href="?type=hex_beautifier">Hex Beautifier</a>
                                <span class="mdl-list__item-sub-title"><a class="mdl-color-text--grey-700" href="http://javascriptobfuscator.com">Javascript Obfuscator</a>으로 난독화된 코드를 해제합니다. (불안정)</span>
                            </span>
                        </li>
                        <li class="mdl-list__item mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">
                                <a href="?type=hex_encryptor">Hex Encryptor</a>
                                <span class="mdl-list__item-sub-title">객체의 속성을 난독화합니다.</span>
                            </span>
                        </li>
                        <li class="mdl-list__item mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">
                                <a href="?type=kkyuly_encryptor">Kkyuly Encryptor</a>
                                <span class="mdl-list__item-sub-title">뀨진법을 사용하여 난독화합니다.</span>
                            </span>
                        </li>
                        <li class="mdl-list__item mdl-list__item--two-line">
                            <span class="mdl-list__item-primary-content">
                                <a href="?type=mangle_properties">Mangle Properties</a>
                                <span class="mdl-list__item-sub-title">객체의 Private 속성을 압축합니다. (불안정)</span>
                            </span>
                        </li>
                    </ul>
                </div>
                <?php
                    $type = $_GET['type'];
                    if (!empty($type)) {
                        echo '<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" id="content" style="padding: 0 24px 24px 24px">';
                        switch ($type) {
                            case 'caeser_cipher':
                                echo file_get_contents('caeser_cipher.html');
                                break;
                            case 'hex_beautifier':
                                echo file_get_contents('hex_beautifier.html');
                                break;
                            case 'hex_encryptor':
                                echo file_get_contents('hex_encryptor.html');
                                break;
                            case 'kkyuly_encryptor':
                                echo file_get_contents('kkyuly_encryptor.html');
                                break;
                            case 'mangle_properties':
                                echo file_get_contents('mangle_properties.html');
                                break;
                        }
                        echo '</div>';
                    }
                ?>
            </div>
            <?php include '../footer.tmpl'; ?>
        </main>
    </div>
    <?php include '../scripts.tmpl'; ?>
</body>

</html>