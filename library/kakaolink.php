<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Kakao Link</title>
</head>

<body>
    <a id="kakao-link-btn" href="javascript:;">
        <img src="https://github.com/Astro36/AstroLibrary/blob/master/res/kakaolink_btn.png?raw=true" />
    </a>
    <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
    <script type="text/javascript">
        Kakao.init('b6e0efee83173a1dcfdd8ab552e2dbbe');
        Kakao.Link.createTalkLinkButton({
            container: '#kakao-link-btn'
            <?php
            $text = $_GET['text'];
            $image_url = $_GET['image_url'];
            $image_width = $_GET['image_width'];
            $image_height = $_GET['image_height'];
            $button_text = $_GET['button_text'];
            $button_url = $_GET['button_url'];

            if ($text && $text !== "undefined") {
                echo ',label: "' . $text . '"';
            }

            if ($image_url && $image_url !== "undefined") {
                echo ',image: {src: "' . $image_url . '", width: "' . $image_width . '", height: "' . $image_height . '"}';
            }

            if ($button_text && $button_url &&$button_text !== "undefined" && $button_url !== "undefined") {
                echo ',webButton: {text: "' . $button_text . '", url: "' . $button_url . '"}';
            }
            ?>
        });
    </script>

</body>

</html>