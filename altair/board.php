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
                <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" id="content" style="padding: 0 24px 8px 24px">
                    <h4>게시판&nbsp;<button class="mdl-button mdl-js-button mdl-button--icon" onclick="location.href='write.php'">
                        <i class="material-icons">edit</i>
                    </button></h4>
                </div>
                <table class="mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop mdl-data-table mdl-js-data-table">
                    <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric">Title</th>
                            <th class="mdl-data-table__cell--non-numeric">Date</th>
                            <th class="mdl-data-table__cell--non-numeric">Author</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $articles = array_reverse(json_decode(file_get_contents('articles.json'), true));
                            foreach ($articles as $key => $value) {
                                $article = json_decode(file_get_contents('articles/' . $value . '.json'), true);
                                echo '<tr>';
                                echo '<td class="mdl-data-table__cell--non-numeric"><a href="article.php?article=' . $value . '">' . $article['title'] . '</a></td>';
                                echo '<td class="mdl-data-table__cell--non-numeric">' . $article['date'] . '</td>';
                                echo '<td class="mdl-data-table__cell--non-numeric">' . $article['author'] . '</td>';
                                echo '</tr>';
                            }
                        
                        ?>
                    </tbody>
                </table>
            </div>
            <?php include '../footer.tmpl'; ?>
        </main>
    </div>
    <?php include '../scripts.tmpl'; ?>
</body>

</html>