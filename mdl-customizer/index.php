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
            <div id="top"></div>
            <div class="mdl-grid">
                <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" id="about" style="padding: 24px 24px 24px 24px">
                    <div style="background: url('../assets/img_mdl_customizer.png') center / cover; border-radius: 8px; margin: 0 auto; width: 200px; height: 200px;">
                    </div>

                    <h4>CSS Customizer</h4>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 30%;">
                        <input class="mdl-textfield__input" type="text" pattern="#[A-Fa-f0-9]{3,}" id="primary">
                        <label class="mdl-textfield__label" for="primary">Primary</label>
                        <span class="mdl-textfield__error">Input is not a color!</span>
                    </div><br>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 30%;">
                        <input class="mdl-textfield__input" type="text" pattern="#[A-Fa-f0-9]{3,}" id="primary-dark">
                        <label class="mdl-textfield__label" for="primary-dark">Primary Dark</label>
                        <span class="mdl-textfield__error">Input is not a color!</span>
                    </div><br>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 30%;">
                        <input class="mdl-textfield__input" type="text" pattern="#[A-Fa-f0-9]{3,}" id="accent">
                        <label class="mdl-textfield__label" for="accent">Accent</label>
                        <span class="mdl-textfield__error">Input is not a color!</span>
                    </div><br>
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" onclick="createCss();">Create</button><br><br>

                    <div class="mdl-textfield mdl-js-textfield" style="width: 100%;">
                        <textarea class="mdl-textfield__input" type="text" rows="10" id="output"></textarea>
                        <label class="mdl-textfield__label" for="output">Output</label>
                    </div>
                </div>
            </div>
            <?php include '../footer.tmpl'; ?>
        </main>
    </div>
    <?php include '../scripts.tmpl'; ?>
    <script type="text/javascript">
        function createCss() {
            readFile("assets/1.3.0/material.min.css", function (css) {
                document.getElementById("output").value = css.toString().replace(/\{\{PRIMARY_COLOR\}\}/g, document.getElementById("primary").value).replace(/\{\{PRIMARY_DARK_COLOR\}\}/g, document.getElementById("primary-dark").value).replace(/\{\{ACCENT_COLOR\}\}/g, document.getElementById("accent").value);
            });
        }

        function readFile(path, callback) {
            var rawFile = new XMLHttpRequest();
            rawFile.open("GET", path, false);
            rawFile.onreadystatechange = function () {
                if (rawFile.readyState === 4) {
                    if (rawFile.status === 200 || rawFile.status == 0) {
                        callback(rawFile.responseText);
                    }
                }
            };
            rawFile.send(null);
        }
    </script>
</body>

</html>