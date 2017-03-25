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
            <div class="mdl-color--primary-dark" id="top">
                <table style="margin-left: 10%; margin-right: 10%;">
                    <tr style="height: 224px;">
                        <td style="margin: 0 auto; width: 128px;">
                            <img src="assets/ic_build_white.png" width="96px" height="96px">
                        </td>
                        <td class="mdl-color-text--white">
                            <h4 style="margin-top: 0;">Tools for Javascript</h4>
                            각종 자바스크립트 도구 모음입니다.<br>
                            개발자에게 다양한 개발 도구를 지원합니다.
                        </td>
                    </tr>
                </table>
            </div>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" style="padding: 24px 24px 24px 24px; text-align: center;">
                    <h4 class="mdl-color-text--primary">코드 난독화가 무엇인가요?</h4>
                    <b class="mdl-color-text--accent">코드 난독화</b>는 프로그래밍 언어로 작성된 코드에 대해 읽기 어렵게 만드는 작업입니다.<br>
                    <b class="mdl-color-text--accent">코드 난독화</b>는 프로그램 코드의 일부 또는 전체를 변경하는 방법 중 하나로, 코드의 가독성을 낮춰 역공학에 대한 대비책을 제공합니다.<br>
                    난독화를 적용하는 범위에 따라 소스 코드 난독화와 바이너리 난독화로 나눌 수 있습니다.<br>
                    또한, 난독화의 목적에 따라 각각 기술의 무단복제와 불법으로 침입하려는 프로그램을 방지하는 것으로 나뉘기도 합니다.<br>
                    출처 - <a href="https://ko.wikipedia.org/wiki/%EB%82%9C%EB%8F%85%ED%99%94">위키백과</a><br><br>

                    <h4 class="mdl-color-text--primary">왜 코드 난독화가 필요한가요?</h4>
                    코드의 난독화는 크게 소스 코드의 도용방지와 코드를 무단으로 수정하는 행위를 막기위해 필요합니다.<br>
                    아래는 원본 코드와 난독화된 코드의 비교입니다.<br><br>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <textarea class="mdl-textfield__input" type="text" rows="10" id="orignal" readonly></textarea>
                        <label class="mdl-textfield__label" for="orignal">원본 코드</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <textarea class="mdl-textfield__input" type="text" rows="10" id="obfuscated" readonly></textarea>
                        <label class="mdl-textfield__label" for="obfuscated">난독화된 코드</label>
                    </div><br>

                    난독화된 코드가 훨씬 수정하기 어려운 코드임을 확인하실 수 있습니다.<br>
                    물론, 두 코드의 출력 결과는 같습니다.<br><br>

                    <h4 class="mdl-color-text--primary">설문조사 및 추가 기능 건의</h4>
                    자바스크립트 도구 만족도 설문조사 및 추가 기능 건의<br><br>
                    <a href="https://docs.google.com/forms/d/1kafVVJRJNPcDU6_ym-mEZb1XBk3Jb8ZmR0uwfEupJUA/viewform" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color-text--white">바로가기</a>
                    <br><br>

                    <h4 class="mdl-color-text--primary">주의</h4>
                    난독화/암호화 도구의 경우 반드시 원본을 백업하십시오.<br>
                    제작자는 어떤 상황에서도 해당 스크립트를 복호화해주지 않습니다.
                </div>
            </div>
            <?php include '../footer.tmpl'; ?>
        </main>
    </div>
    <?php include '../scripts.tmpl'; ?>
    <script type="text/javascript">
        document.getElementById('orignal').value = 'function useItem(x, y, z, itemid) {\n    if (itemid === 280) {\n        clientMessage("Hello, World");\n    }\n}';
        document.getElementById('obfuscated').value = 'var arr="뀨뀨!!뀨뀨!?뀨뀨뀨!뀨!뀨?뀨뀨!뀨뀨뀨!?뀨뀨!!!뀨뀨?뀨뀨뀨!뀨!!?뀨뀨!뀨!!뀨?뀨뀨!뀨뀨뀨뀨?뀨뀨!뀨뀨뀨!?뀨!!!!!?뀨뀨뀨!뀨!뀨?뀨뀨뀨!!뀨뀨?뀨뀨!!뀨!뀨?뀨!!뀨!!뀨?뀨뀨뀨!뀨!!?뀨뀨!!뀨!뀨?뀨뀨!뀨뀨!뀨?뀨!뀨!!!?뀨뀨뀨뀨!!!?뀨!뀨뀨!!?뀨!!!!!?뀨뀨뀨뀨!!뀨?뀨!뀨뀨!!?뀨!!!!!?뀨뀨뀨뀨!뀨!?뀨!뀨뀨!!?뀨!!!!!?뀨뀨!뀨!!뀨?뀨뀨뀨!뀨!!?뀨뀨!!뀨!뀨?뀨뀨!뀨뀨!뀨?뀨뀨!뀨!!뀨?뀨뀨!!뀨!!?뀨!뀨!!뀨?뀨!!!!!?뀨뀨뀨뀨!뀨뀨?뀨!뀨!?뀨!!!!!?뀨!!!!!?뀨!!!!!?뀨!!!!!?뀨뀨!뀨!!뀨?뀨뀨!!뀨뀨!?뀨!!!!!?뀨!뀨!!!?뀨뀨!뀨!!뀨?뀨뀨뀨!뀨!!?뀨뀨!!뀨!뀨?뀨뀨!뀨뀨!뀨?뀨뀨!뀨!!뀨?뀨뀨!!뀨!!?뀨!!!!!?뀨뀨뀨뀨!뀨?뀨뀨뀨뀨!뀨?뀨뀨뀨뀨!뀨?뀨!!!!!?뀨뀨!!뀨!?뀨뀨뀨!!!?뀨뀨!!!!?뀨!뀨!!뀨?뀨!!!!!?뀨뀨뀨뀨!뀨뀨?뀨!뀨!?뀨!!!!!?뀨!!!!!?뀨!!!!!?뀨!!!!!?뀨!!!!!?뀨!!!!!?뀨!!!!!?뀨!!!!!?뀨뀨!!!뀨뀨?뀨뀨!뀨뀨!!?뀨뀨!뀨!!뀨?뀨뀨!!뀨!뀨?뀨뀨!뀨뀨뀨!?뀨뀨뀨!뀨!!?뀨!!뀨뀨!뀨?뀨뀨!!뀨!뀨?뀨뀨뀨!!뀨뀨?뀨뀨뀨!!뀨뀨?뀨뀨!!!!뀨?뀨뀨!!뀨뀨뀨?뀨뀨!!뀨!뀨?뀨!뀨!!!?뀨!!!뀨!?뀨!!뀨!!!?뀨뀨!!뀨!뀨?뀨뀨!뀨뀨!!?뀨뀨!뀨뀨!!?뀨뀨!뀨뀨뀨뀨?뀨!뀨뀨!!?뀨!!!!!?뀨!뀨!뀨뀨뀨?뀨뀨!뀨뀨뀨뀨?뀨뀨뀨!!뀨!?뀨뀨!뀨뀨!!?뀨뀨!!뀨!!?뀨!!!뀨!?뀨!뀨!!뀨?뀨뀨뀨!뀨뀨?뀨!뀨!?뀨!!!!!?뀨!!!!!?뀨!!!!!?뀨!!!!!?뀨뀨뀨뀨뀨!뀨?뀨!뀨!?뀨뀨뀨뀨뀨!뀨".replace(/!/g,"0").replace(/뀨/g,"1").split("?");for(var i=0,len=arr.length;i<len;i++){arr[i]=String.fromCharCode(parseInt(arr[i],2).toString(10));}eval(arr.join(""));';
    </script>
</body>

</html>