<?php
function home_base_url(){

// first get http protocol if http or https

    $base_url = (isset($_SERVER['HTTPS']) &&

        $_SERVER['HTTPS']!='off') ? 'https://' : 'http://';

// get default website root directory

    $tmpURL = dirname(__FILE__);

// when use dirname(__FILE__) will return value like this "C:\xampp\htdocs\my_website",

//convert value to http url use string replace,

// replace any backslashes to slash in this case use chr value "92"

    $tmpURL = str_replace(chr(92),'/',$tmpURL);

// now replace any same string in $tmpURL value to null or ''

// and will return value like /localhost/my_website/ or just /my_website/

    $tmpURL = str_replace($_SERVER['DOCUMENT_ROOT'],'',$tmpURL);

// delete any slash character in first and last of value

    $tmpURL = ltrim($tmpURL,'/');

    $tmpURL = rtrim($tmpURL, '/');


// check again if we find any slash string in value then we can assume its local machine

    if (strpos($tmpURL,'/')){

// explode that value and take only first value

        $tmpURL = explode('/',$tmpURL);

        $tmpURL = $tmpURL[0];

    }

// now last steps

// assign protocol in first value

    if ($tmpURL !== $_SERVER['HTTP_HOST'])

// if protocol its http then like this

        $base_url .= $_SERVER['HTTP_HOST'].'/'.$tmpURL.'/';

    else

// else if protocol is https

        $base_url .= $tmpURL.'/';

// give return value

    return $base_url;

}
?>
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
                $base_url = home_base_url();
                echo <<<HTML
                <li>
                <a href="#" class="dropdown-toggle">Hi ! {$res['user']}</a>
                <ul class="dropdown-menu dark" data-role="dropdown" >
                    <li><a href="{$base_url}dj/{$res['id']}">My Profile</a></li>
                    <li><a href="{$base_url}djedit/{$res['id']}">Edit Profile</a></li>
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