<!DOCTYPE html>
<?php
$version = "1.5.3.1";
$ioncubeLoaderVersionRequired = '10.0.0';

if (isset($_GET['phpinfo'])) {
    phpinfo();
    exit;
}
?>
<html class="html" lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>System check script v<?php echo $version; ?></title>
    <style>body, div, td {
            font-size: 14px;
            font-family: verdana, helvetica, arial;
            color: #555
        }

        #container {
            width: 100%
        }

        #content {
            width: 800px;
            margin: 20px auto;
            left: 50%;
            right: 50%;
            background: #fff;
            border: 1px solid #ccc;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            -moz-box-shadow: 0 0 4px #ccc;
            -webkit-box-shadow: 0 0 4px #ccc;
            box-shadow: 0 0 4px #ccc;
            min-height: 450px;
            padding: 20px
        }

        #content table {
            border-collapse: collapse;
            margin: 0;
            text-align: left;
            width: 100%
        }

        #content table thead th {
            background-color: #f6f6f6;
            padding: 8px;
            border: 1px solid #ccc;
            font-size: 11px;
            font-weight: 700
        }

        #content table td {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 8px
        }

        #content table td.center {
            text-align: center
        }

        .flag {
            width: 60px;
            height: auto
        }

        .language {
            display: block;
            padding-top: 30px;
            text-align: center
        }

        .node {
            display: none
        }</style>
</head>
<body>
<script>document.addEventListener("DOMContentLoaded", function () {
        var a = navigator.language || navigator.userLanguage;
        if (a == "ru-RU") {
            openNote("node-ru")
        } else {
            openNote("node-en")
        }
    });

    function openNote(a) {
        Array.prototype.forEach.call(document.querySelectorAll(".node"), function (b) {
            b.style.display = "none"
        });
        document.getElementById(a).style.display = "block"
    };</script>
<div class="language">
    <a href="javascript:{};" class="btn-lng" onclick="openNote('node-en');"><img title="English" alt="English" class="flag" src="data:image/png;base64,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"/></a>
    <a href="javascript:{};" class="btn-lng" onclick="openNote('node-ru');"><img title="Russian" alt="Russian" class="flag" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAAB0CAIAAABPMurHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAa9JREFUeNrs3L1Nw0AYgOHvYkcgsFPQuc8gDMUElFTUbIDEAgyAxBIUoUNCFHGAJCYxEckEcEiR8jySfyoXn17pzs2lpmlms1lAPlVVpc1jOp2aBRmNRqOyruvN2/YOf9e27SangUHwH4SFsBAWwgJhISyEBcJCWAgLhIWwEBYIC2EhLBAWwkJYICyEhbBAWAgLYYGwEBbCAmEhLIQFwkJYCAt+o9xcF9ePw6MTsyCLbvGxC+vm6iHSkYmQR7+o009YMT6L4thAyGM1jyd7LGzeERbCAmEhLIQFwkJYCAuEhbAQFggLYSEsEBbCQlggLISFsEBYCAthgbAQFsICYSEshAXCQlgIC4TF/vg5gzTqCGeQkstwF9Y4JoNwajJ5rGPxsg3rNu5OrYlk8h7r821YXRSdsMiki7RbCpcxKKMwEbJY+ivk/wgLYSEshAXCQlgIC4SFsBAWCAthISwQFsJCWCAshIWwQFgIC2GBsBAWwgJhISyEBcJCWAgLhMU+KbuuKwZFnxR28Pr+c/WV5Utt25bz+fz+7XXV9wZ7sFJEkdLl5LmqqiwfbJrmW4ABACkKOe91HyykAAAAAElFTkSuQmCC"/></a>
</div>

<?php
if (version_compare(getVersion(), '5.3') >= 0 and version_compare(getVersion(), '7.5') < 0) {
    $phpVersionText = '<span style="color: #008000">' . getVersion() . '</span>';
    $phpVersionStatus = '<b><span style="color: #008000">OK</span></b>';
} else {
    $phpVersionText = '<span style="color: red">' . getVersion() . '</span>';
    $phpVersionStatus = '<b><span style="color: red">Off</span></b>';
}

if (!extension_loaded('openssl') || !function_exists('openssl_decrypt')) {
    $openssl = 0;
    $opensslStatus = '<b><span style="color: red">OFF</span></b>';
    $opensslInstalled = '<span style="color: red">disabled</span>';
} else {
    $openssl = 1;
    $opensslStatus = '<b><span style="color: #008000">OK</span></b>';
    $opensslInstalled = '<span style="color: #008000">enabled</span>';
}

// mbstring
if (!extension_loaded('mbstring') || !function_exists('mb_check_encoding')) {
    $mbstring = 0;
    $mbstringStatus = '<b><span style="color: red">OFF</span></b>';
    $mbstringInstalled = '<span style="color: red">disabled</span>';
} else {
    $mbstring = 1;
    $mbstringStatus = '<b><span style="color: #008000">OK</span></b>';
    $mbstringInstalled = '<span style="color: #008000">enabled</span>';
}

$ioncubeLoaderVersion = getIoncubeLoaderVersion();

if ($ioncubeLoaderVersion) {
    if (version_compare(getVersion(), '5.3') >= 0 and version_compare(getVersion(), '7.5') < 0) {
        if (version_compare($ioncubeLoaderVersion, $ioncubeLoaderVersionRequired) >= 0) {
            $ioncubeLoaderVersionText = '<span style="color: #008000">Installed, ver. ' . $ioncubeLoaderVersion . '</span>';
            $ioncubeLoaderVersionStatus = '<b><span style="color: #008000">OK</span></b>';
        } else {
            $ioncubeLoaderVersionText = '<span style="color: red">Installed, ver. ' . $ioncubeLoaderVersion . '</span>';
            $ioncubeLoaderVersionStatus = '<b><span style="color: red">Off</span></b>';
        }
    } else {
        $ioncubeLoaderVersionText = '<span style="color: red">Not supported by this version of PHP</span>';
        $ioncubeLoaderVersionStatus = '<b><span style="color: red">Off</span></b>';
    }
} else {
    $ioncubeLoaderVersionText = '<span style="color: red">Not Installed</span>';
    $ioncubeLoaderVersionStatus = '<b><span style="color: red">Off</span></b>';
}

$serverSettings = getServerSettings();

if (returnBytes($serverSettings['memory_limit']) >= 128 * 1024 * 1024) {
    $settings['memory_limit'] = '<span style="color: #008000">' . $serverSettings['memory_limit'] . '</span>';
    $status['memory_limit'] = '<b><span style="color: #008000">OK</span></b>';
} else {
    $settings['memory_limit'] = '<span style="color: grey">' . $serverSettings['memory_limit'] . '</span>';
    $status['memory_limit'] = '<b><span style="color: grey">Off</span></b>';
}
if (returnBytes($serverSettings['post_max_size']) >= 16 * 1024 * 1024) {
    $settings['post_max_size'] = '<span style="color: #008000">' . $serverSettings['post_max_size'] . '</span>';
    $status['post_max_size'] = '<b><span style="color: #008000">OK</span></b>';
} else {
    $settings['post_max_size'] = '<span style="color: grey">' . $serverSettings['post_max_size'] . '</span>';
    $status['post_max_size'] = '<b><span style="color: grey">Off</span></b>';
}
if (returnBytes($serverSettings['upload_max_filesize']) >= 16 * 1024 * 1024) {
    $settings['upload_max_filesize'] = '<span style="color: #008000">' . $serverSettings['upload_max_filesize'] . '</span>';
    $status['upload_max_filesize'] = '<b><span style="color: #008000">OK</span></b>';
} else {
    $settings['upload_max_filesize'] = '<span style="color: grey">' . $serverSettings['upload_max_filesize'] . '</span>';
    $status['upload_max_filesize'] = '<b><span style="color: grey">Off</span></b>';
}
if (returnBytes($serverSettings['post_max_size']) >= 16 * 1024 * 1024) {
    $settings['post_max_size'] = '<span style="color: #008000">' . $serverSettings['post_max_size'] . '</span>';
    $status['post_max_size'] = '<b><span style="color: #008000">OK</span></b>';
} else {
    $settings['post_max_size'] = '<span style="color: grey">' . $serverSettings['post_max_size'] . '</span>';
    $status['post_max_size'] = '<b><span style="color: grey">Off</span></b>';
}
// max_execution_time
if ($serverSettings['max_execution_time'] == 0 || $serverSettings['max_execution_time'] >= 300) {
    $settings['max_execution_time'] = '<span style="color: #008000">' . $serverSettings['max_execution_time'] . '</span>';
    $status['max_execution_time'] = '<b><span style="color: #008000">OK</span></b>';
} else {
    $settings['max_execution_time'] = '<span style="color: grey">' . $serverSettings['max_execution_time'] . '</span>';
    $status['max_execution_time'] = '<b><span style="color: grey">Off</span></b>';
}
?>
<div id="container">
    <div id="content">
        <div id="node-en" class="node">
            <div style="text-align:center">
                <h2>System check script v<?php echo $version; ?></h2>
                <p><?php echo intro('en'); ?></p>
                <p>&nbsp;</p>
                <p align="center">
                    OpenCart Version: <b><?php echo getOpenCartVersion(); ?></b><br>
                    Config Server Name: <b><?php echo getConfigSeverName(); ?></b><br>
                    Host Server Name: <b><?php echo $_SERVER['SERVER_NAME']; ?></b>
                </p>
            </div>
            <p>
            <h3>Required settings</h3></p>
            <table>
                <thead>
                <tr>
                    <th width="35%" align="left">Your server settings</th>
                    <th width="25%" align="left">Current settings</th>
                    <th width="25%" align="left">Required settings</th>
                    <th width="15%" align="center">Status</th>
                </tr>
                <thead>
                <tr>
                    <td>PHP Version</td>
                    <td><?php echo $phpVersionText; ?></td>
                    <td>5.3, 5.4, 5.5, 5.6, 7.0, 7.1, 7.2, 7.3, 7.4</td>
                    <td class="center"><?php echo $phpVersionStatus; ?></td>
                </tr>
                <tr>
                    <td>ionCube PHP Loader</td>
                    <td><?php echo $ioncubeLoaderVersionText; ?></td>
                    <td><?php echo $ioncubeLoaderVersionRequired; ?>+
                    </td>
                    <td class="center"><?php echo $ioncubeLoaderVersionStatus; ?></td>
                </tr>
                <tr>
                    <td>OpenSSL support</td>
                    <td><?php echo $opensslInstalled; ?></td>
                    <td>enabled</td>
                    <td class="center"><?php echo $opensslStatus; ?></td>
                </tr>
                <tr>
                    <td>mbstring support</td>
                    <td><?php echo $mbstringInstalled; ?></td>
                    <td>enabled</td>
                    <td class="center"><?php echo $mbstringStatus; ?></td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <p>
            <h3>Optional settings</h3></p>
            <table>
                <thead>
                <tr>
                    <th width="35%" align="left">Your server settings</th>
                    <th width="25%" align="left">Current settings</th>
                    <th width="25%" align="left">Required settings</th>
                    <th width="15%" align="center">Status</th>
                </tr>
                <thead>
                <tr>
                    <td>max_execution_time</td>
                    <td><?php echo $settings['max_execution_time']; ?></td>
                    <td>300+</td>
                    <td class="center"><?php echo $status['max_execution_time']; ?></td>
                </tr>
                <tr>
                    <td>memory_limit</td>
                    <td><?php echo $settings['memory_limit']; ?></td>
                    <td>128M+</td>
                    <td class="center"><?php echo $status['memory_limit']; ?></td>
                </tr>
                <tr>
                    <td>post_max_size</td>
                    <td><?php echo $settings['post_max_size']; ?></td>
                    <td>16M+</td>
                    <td class="center"><?php echo $status['post_max_size']; ?></td>
                </tr>
                <tr>
                    <td>upload_max_filesize</td>
                    <td><?php echo $settings['upload_max_filesize']; ?></td>
                    <td>16M+</td>
                    <td class="center"><?php echo $status['upload_max_filesize']; ?></td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <div style="text-align:center; margin-top:20px;"><?php echo getHostInfo(); ?></div>
            <div style="text-align:center; margin-top:20px;">
                <a href="http://ocmod.costaslabs.com" target="_blank">ocmod.costaslabs.com</a>
            </div>
        </div>
        <div id="node-ru" class="node">
            <div style="text-align:center">
                <h2>Скрипт для проверки системы v<?php echo $version; ?></h2>
                <p><?php echo intro('ru'); ?></p>
                <p>&nbsp;</p>
                <p align="center">
                    OpenCart Version: <b><?php echo getOpenCartVersion(); ?></b><br>
                    Config Server Name: <b><?php echo getConfigSeverName(); ?></b><br>
                    Host Server Name: <b><?php echo $_SERVER['SERVER_NAME']; ?></b>
                <p>
            </div>
            <p>
            <h3>Обязательные настройки</h3></p>
            <table>
                <thead>
                <tr>
                    <th width="35%" align="left">Настройки Вашего сервера</th>
                    <th width="25%" align="left">Текущие настройки</th>
                    <th width="25%" align="left">Необходимые настройки</th>
                    <th width="15%" align="center">Состояние</th>
                </tr>
                <thead>
                <tr>
                    <td>PHP Version</td>
                    <td><?php echo $phpVersionText; ?></td>
                    <td>5.3, 5.4, 5.5, 5.6, 7.0, 7.1, 7.2, 7.3, 7.4</td>
                    <td class="center"><?php echo $phpVersionStatus; ?></td>
                </tr>
                <tr>
                    <td>ionCube PHP Loader</td>
                    <td><?php echo $ioncubeLoaderVersionText; ?></td>
                    <td><?php echo $ioncubeLoaderVersionRequired; ?>+
                    </td>
                    <td class="center"><?php echo $ioncubeLoaderVersionStatus; ?></td>
                </tr>
                <tr>
                    <td>OpenSSL support</td>
                    <td><?php echo $opensslInstalled; ?></td>
                    <td>enabled</td>
                    <td class="center"><?php echo $opensslStatus; ?></td>
                </tr>
                <tr>
                    <td>mbstring support</td>
                    <td><?php echo $mbstringInstalled; ?></td>
                    <td>enabled</td>
                    <td class="center"><?php echo $mbstringStatus; ?></td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <p>
            <h3>Дополнительные настройки</h3></p>
            <table>
                <thead>
                <tr>
                    <th width="35%" align="left">Настройки Вашего сервера</th>
                    <th width="25%" align="left">Текущие настройки</th>
                    <th width="25%" align="left">Рекомендуемые настройки</th>
                    <th width="15%" align="center">Состояние</th>
                </tr>
                <thead>
                <tr>
                    <td>max_execution_time</td>
                    <td><?php echo $settings['max_execution_time']; ?></td>
                    <td>300+</td>
                    <td class="center"><?php echo $status['max_execution_time']; ?></td>
                </tr>
                <tr>
                    <td>memory_limit</td>
                    <td><?php echo $settings['memory_limit']; ?></td>
                    <td>128M+</td>
                    <td class="center"><?php echo $status['memory_limit']; ?></td>
                </tr>
                <tr>
                    <td>post_max_size</td>
                    <td><?php echo $settings['post_max_size']; ?></td>
                    <td>16M+</td>
                    <td class="center"><?php echo $status['post_max_size']; ?></td>
                </tr>
                <tr>
                    <td>upload_max_filesize</td>
                    <td><?php echo $settings['upload_max_filesize']; ?></td>
                    <td>16M+</td>
                    <td class="center"><?php echo $status['upload_max_filesize']; ?></td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <div style="text-align:center; margin-top:20px;"><?php echo getHostInfo(); ?></div>
            <div style="text-align:center; margin-top:20px;">
                <a href="http://ocmod.costaslabs.com" target="_blank">ocmod.costaslabs.com</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php

function intro($lang = 'en')
{
    if ($lang == 'en') {
        return '<p>This script will check the current settings of your server. The test results are displayed on the screen in <b><span style="color: #008000">green</span></b> or <b><span style="color: red">red</span></b> color.</p>
		<p>ATTENTION!!! All results must be <b><span style="color: #008000">green</span></b>.</p>
		<p>If some required values are displayed in <b><span style="color: red">red</span></b>, perform the necessary actions to eliminate it yourself or contact your hosting provider technical support, and then run this script "System check script" again.</p>
		<p><b>After checking, do not forget to delete this file!</b></p>';
    } else {
        return '</p>Этот скрипт проверит, текушие настройки Вашего сервера. Результаты проверки отображаются на экране <b><span style="color: #008000">зеленым</span></b> или <b><span style="color: red">красным</span></b> цветом.</p>
		<p>Необязательные параметры отображаются <b><span style="color: grey">серым</span></b> цветом.</p>
		<p><b>ВНИМАНИЕ!!! Все результаты проверки должны быть <span style="color: #008000">зелёным цветом.</span></b></p>
		<p>Если некоторые необходимые значения отображаются <b><span style="color: red">красным цветом</span></b>, пожалуйста, <br>выполните необходимые действия для устранения сами или обратитесь в техподдержку Вашего хостинг-провайдера, а затем запустите скрипт снова.</p>
		<p><b>После завершения проверки рекомендуется удалить файл проверки system_test.php!</b></p>';
    }
}

function getIoncubeLoaderVersion()
{
    $version = array();
    if (extension_loaded("ionCube Loader")) {
        if (function_exists('ioncube_loader_iversion')) {
            // Mmmrr
            $ioncubeLoaderVersion = ioncube_loader_iversion();
            if (version_compare($ioncubeLoaderVersion, '100000') >= 0) {
                $version[] = (int)substr($ioncubeLoaderVersion, 0, 2);
                $version[] = (int)substr($ioncubeLoaderVersion, 2, 2);
                $version[] = (int)substr($ioncubeLoaderVersion, 4, 2);
            } else {
                $version[] = (int)substr($ioncubeLoaderVersion, 0, 1);
                $version[] = (int)substr($ioncubeLoaderVersion, 1, 2);
                $version[] = (int)substr($ioncubeLoaderVersion, 3, 2);
            }
            return implode('.', $version);
        }
    }
    return 0;
}

function getServerSettings()
{
    $result = array('safe_mode' => ini_get("safe_mode"), 'max_execution_time' => ini_get("max_execution_time"), 'memory_limit' => ini_get("memory_limit"), 'file_uploads' => ini_get('file_uploads'), 'post_max_size' => ini_get("post_max_size"), 'upload_max_filesize' => ini_get("upload_max_filesize"));
    return $result;
}

function getVersion()
{
    $version = phpversion();
    $version = explode('.', $version);
    return $version[0] . '.' . $version[1];
}

function getOpenCartVersion()
{
    $ocVersion = 'Unknown';
    if (file_exists('index.php')) {
        $f = file_get_contents('index.php');
        preg_match("/define\('VERSION', '([0-9]*\.[0-9]*\.[0-9]*\.[0-9]*)/i", $f, $matches);
        if (isset($matches[1])) {
            $ocVersion = $matches[1];
        }
    }
    return $ocVersion;
}

function getConfigSeverName()
{
    $ocServerName = 'Unknown';
    if (file_exists('config.php')) {
        $f = file_get_contents('config.php');
        preg_match("/define\('HTTP_SERVER', '(https?:\/\/([^\/]+)\/*)/i", $f, $matches);
        if (isset($matches[1])) {
            $parse = parse_url($matches[1]);
            $ocServerName = $parse['host'];
        }
    }
    return $ocServerName;
}

function getHostInfo()
{
    if (isset($_SERVER['SERVER_SOFTWARE'])) {
        $status = $_SERVER['SERVER_SOFTWARE'];
    } else if (($sf = getenv('SERVER_SOFTWARE'))) {
        $status = $sf;
    } else {
        $status = 'n/a';
    }
    $body = $status . "Server IP:" . $_SERVER['SERVER_ADDR'] . "<br>" . "PHP info:</td><td><a href=\"" . $_SERVER['PHP_SELF'] . "?phpinfo=1\" target=\"_blank\">Click here</a><br>";
    return $body;
}

function returnBytes($val)
{
    $val = trim($val);
    $last = strtolower($val[strlen($val) - 1]);
    switch ($last) {
        case 'g' :
            $val = (int)$val * 1024;
        case 'm' :
            $val = (int)$val * 1024;
        case 'k' :
            $val = (int)$val * 1024;
    }

    return $val;
}

?>