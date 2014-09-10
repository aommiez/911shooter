<div class="navigation-bar dark fixed-top shadow">
    <div class="navigation-bar-content container">
        <a href="../index.php" class="element"><span class="icon-home"></span> 911Shooter <sup>.com</sup></a>
        <span class="element-divider"></span>
        <a class="element1 pull-menu" href="#"></a>
        <ul class="element-menu">
            <li>
                <a  href="#"><span class="icon-newspaper"></span> News</a>
            </li>
            <li>
                <a  href="#"><span class="icon-headphones"></span> DJ Profile</a>
            </li>
            <li>
                <a href="#" ><span class="icon-pictures"></span> Gallery</a>
            </li>
            <li>
                <a  href="#"><span class="icon-film"></span> Clip</a>
            </li>
            <?php
            if (!empty($_SESSION['dj_id'])) {
                $res = CoreModel::getDjProfileById($_SESSION['dj_id'])->fetchAll();
                $res = $res[0];
                echo <<<HTML
                <li>
                <a href="#" class="dropdown-toggle">Hi ! {$res['user']}</a>
                <ul class="dropdown-menu dark" data-role="dropdown" >
                    <li><a href="dj/{$res['id']}">My Profile</a></li>
                    <li><a href="#">Edit Profile</a></li>
                    <li><a href="#">Edit DJ Talk</a></li>
                    <li><a href="controller/dj/logout.php">Logout</a></li>
                </ul>
            </li>
HTML;
            }
            ?>
        </ul>
        <div class="no-tablet-portrait no-phone">
            <?php
             if (empty($_SESSION['dj_id'])) {
                 echo <<<HTML
                <a title="icon-user" href="#" id="createFlatWindow" class="element place-right"><span class="icon-user"></span></a>
                <span class="element-divider place-right"></span>
HTML;
             }
            ?>
            <a title=" icon-twitter" href="#" class="element place-right"><span class=" icon-twitter"></span></a>
            <span class="element-divider place-right"></span>
            <a title="icon-instagram" href="#" class="element place-right"><span class="icon-instagram"></span></a>
            <span class="element-divider place-right"></span>
            <a title="facebook" href="#" class="element place-right"><span class="icon-facebook"></span></a>

            <!--<span class="element-divider place-right"></span>
            <div class="element place-right" title="views Stars"><span class="icon-eye"></span> <span class="github-watchers">3689</span></div>-->
            <!--<span class="element-divider place-right"></span>-->
            <!--<div class="element place-right" title="GitHub Forks"><span class="icon-share-2"></span> <span class="github-forks">0</span></div>-->
        </div>
    </div>
</div>
<script type="application/javascript">
    $( document ).ready(function() {
        $("#createFlatWindow").on('click', function(){
            $.Dialog({
                overlay: true,
                shadow: true,
                flat: true,
                icon: null,
                title: 'DJ Login ',
                content: '',
                padding: 10,
                onShow: function(_dialog){
                    var content = '<form method="post" action="controller/dj/login.php">' +
                        '<label>Login</label>' +
                        '<div class="input-control text"><input type="text" name="dj">'+
                        '<button class="btn-clear"></button></div> ' +
                        '<label>Password</label>' +
                        '<div class="input-control password">'+
                        '<input type="password" name="password">'+
                        '<button class="btn-reveal"></button></div> ' +
                        '<div class="input-control checkbox">'+
                        '<div class="form-actions">' +
                        '<button class="button primary">Login to...</button> '+
                        '<button class="button" type="button" onclick="$.Dialog.close()">Cancel</button> '+
                        '</div>'+
                        '</form>';
                    $.Dialog.title("DJ login");
                    $.Dialog.content(content);
                    $.Metro.initInputs();
                }
            });
        });
    });

</script>