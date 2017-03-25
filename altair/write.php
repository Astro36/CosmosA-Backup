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
    <?php
        require_once 'library/HTMLPurifier.auto.php';

        $config = HTMLPurifier_Config::createDefault();
        $config->set('Attr.EnableID', false);
        $config->set('Attr.DefaultImageAlt', '');
        $config->set('AutoFormat.Linkify', true);
        $config->set('HTML.MaxImgLength', null);
        $config->set('CSS.MaxImgLength', null);
        $config->set('Core.Encoding', 'UTF-8');
        $config->set('HTML.FlashAllowFullScreen', true);
        $config->set('HTML.SafeEmbed', true);
        $config->set('HTML.SafeIframe', true);
        $config->set('HTML.SafeObject', true);
        $config->set('Output.FlashCompat', true);
        $config->set('URI.SafeIframeRegexp', '#^(?:https?:)?//(?:'.implode('|', array('www\\.youtube(?:-nocookie)?\\.com/', 'maps\\.google\\.com/', 'player\\.vimeo\\.com/video/', 'www\\.microsoft\\.com/showcase/video\\.aspx', '(?:serviceapi\\.nmv|player\\.music)\\.naver\\.com/', '(?:api\\.v|flvs|tvpot|videofarm)\\.daum\\.net/', 'v\\.nate\\.com/', 'play\\.mgoon\\.com/', 'channel\\.pandora\\.tv/', 'www\\.tagstory\\.com/', 'play\\.pullbbang\\.com/', 'tv\\.seoul\\.go\\.kr/', 'ucc\\.tlatlago\\.com/', 'vodmall\\.imbc\\.com/', 'www\\.musicshake\\.com/', 'www\\.afreeca\\.com/player/Player\\.swf', 'static\\.plaync\\.co\\.kr/', 'video\\.interest\\.me/', 'player\\.mnet\\.com/', 'sbsplayer\\.sbs\\.co\\.kr/', 'img\\.lifestyler\\.co\\.kr/', 'c\\.brightcove\\.com/', 'www\\.slideshare\\.net/')).')#');
        $purifier = new HTMLPurifier($config);

        $title = $_POST['title'];
        $date = date('Y.m.d H:i:s');
        $author = $_POST['author'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $contents = $_POST['contents'];
        $comments = array();

        if (!empty($title) && !empty($author) && !empty($contents)) {
            $title = $purifier->purify(trim($title));
            $author = $purifier->purify(trim($author));
            $contents = $purifier->purify(str_replace("\n", '<br>', trim($contents)));
            if ($title !== '' && $author !== '' && $contents !== '') {
                $articleid = md5($contents);
                $articles = json_decode(file_get_contents('articles.json'), true);
                array_push($articles, $articleid);
                fwrite(fopen('articles.json', 'w'), json_encode($articles));
                fwrite(fopen('articles/' . $articleid . '.json', 'w'), json_encode(array(
                    'title' => $title,
                    'date' => $date,
                    'author' => $author,
                    'ip' => $ip,
                    'contents' => $contents,
                    'comments' => $comments
                )));
            } else {
                echo '<script>alert("Error: 유효하지 않은 내용입니다.")</script>';
            }
            echo '<script>location.href="board.php"</script>';
        }
    ?>
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
                <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" id="content" style="padding: 0 24px 24px 24px">
                    <h4>Write</h4>
                    <form action="write.php" method="post">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="title" name="title">
                            <label class="mdl-textfield__label" for="title">Title</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="name" name="author">
                            <label class="mdl-textfield__label" for="name">Name</label>
                        </div><br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                            <textarea class="mdl-textfield__input" type="text" rows= "10" id="contents" name="contents"></textarea>
                            <label class="mdl-textfield__label" for="contents">Contents</label>
                        </div>
                        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" type="submit" style="position: fixed; display: block; right: 0; bottom: 0; margin-right: 20px; margin-bottom: 20px; z-index: 900;">
                            <i class="material-icons">edit</i>
                        </button>
                    </form>
                </div>
            </div>
            <?php include '../footer.tmpl'; ?>
        </main>
    </div>
    <?php include '../scripts.tmpl'; ?>
</body>

</html>