<? session_start(); ?>
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
        include_once 'library/User.php';
        include_once 'library/UserData.php';
        include_once 'library/UserUtils.php';

        $isAdmin = false;

        if (isset($_SESSION['user_code'])) {
            $code = $_SESSION['user_code'];
            if (UserUtils::isUsedByOthers('user_code', $code)) {
                if (User::isAdmin($code)) {
                    $isAdmin = true;
                } else {
                    echo '<script type="text/javascript">alert("관리자만 사용할 수 있습니다.");location.href="index.php";</script>';
                }
            } else {
                $reason = '접속 실패: 유효하지 않은 세션입니다.';
                session_destroy();
            }
        } else {
            echo '<script type="text/javascript">alert("로그인이 필요한 작업입니다.");location.href="login.php";</script>';
        }
    ?>
    <div class="mdl-color--grey-100 mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Deneb Manager</span>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Deneb Manager</span>
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
                    <?php
                        include_once 'library/UserEditor.php';
                        include_once 'library/UserList.php';
                        include_once 'library/UserViewer.php';

                        switch ($_GET['type']) {
                            case 'edit':
                                if ($isAdmin && isset($_GET['id'])) {
                                    $code = $_SESSION['user_code'];
                                    $viewer = new UserEditor($_GET['id']);
                                    $viewer->render('Back', 'manager.php');
                                }
                                break;
                            case 'view':
                                if ($isAdmin && isset($_GET['id'])) {
                                    $viewer = new UserViewer($_GET['id']);
                                    $viewer->render('Editor', 'manager.php?type=edit&id={id}');
                                }
                                break;
                            default:
                                if ($isAdmin) {
                                    $list = new UserList();
                                    $list->render('Viewer', 'manager.php?type=view&id={id}');
                                }
                                break;
                        }
                    ?>
                </div>
            </div>
            <?php include '../footer.tmpl'; ?>
        </main>
    </div>
    <?php include '../scripts.tmpl'; ?>
</body>

</html>