<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>DEMO &middot; GitHub Corners - PHP Version</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="GitHub Corners - PHP Version: A configurable github-corners icon written with PHP.">
<meta name="author" content="https://github.com/jxmot">
<style>
.outer {
    margin-top: 25px;
    height: 200px;
    display: -webkit-flex;
    display: flex;
}

.box {
    padding: 10px;
    height: 100%;
    border: 2px solid black;
    position: relative;
    width: 200px;
    margin: 0 auto;
}
</style>
</head>
<body>
    <div style="position:fixed;right:0;top:0;">
<?php
$_SESSION['ghcfill'] = 'grey'; 
$_SESSION['ghccolor'] = 'black'; 
require './githubcorner.php'; 
?>
    </div>

    <div style="position:fixed;left:0;top:0;">
<?php
$_SESSION['ghcside'] = 'left'; 
$_SESSION['ghcfill'] = 'black'; 
$_SESSION['ghccolor'] = 'grey'; 
require './githubcorner.php'; 
?>
    </div>


    <h2 style="text-align:center;">
        DEMO - GitHub Corners - PHP Version
    </h2>
    <div style="width:75%;margin: 0 auto;">
        <p>
            This demonstrates a modified version of the <i>original</i> <strong>github-corners</strong>
            project. 
            <br>
            The following settings are configured with a text file:
            <ul>
                <li>corner side</li>
                <li>backgound color</li>
                <li>foreground color</li>
                <li>CSS file</li>
                <li>target repo</li>
                <li>link title</li>
            </ul>
            <br>
            Text file example:
            <pre style=""><code><strong>
    ./githubcorner.css,right,black,white,https://github.com/jxmot/github-corners-php,View source on GitHub
            </strong></code></pre>
            <br>
            Here is an example of you would use the text file above and display the icon in a chosen corner:
        </p>
    </div>
    <div style="width:50%;margin: 0 auto;overflow: auto;border: 1px solid black;">
        <pre style=""><code><strong>
    &lt;div class="outer"&gt;
        &lt;div class="box"&gt;
            &lt;?php
                // githubcorner.txt is the default configuration file
                require './githubcorner.php'; 
            ?&gt;
        &lt;/div&gt;
    &lt;/div&gt;
        </strong></code></pre>
    </div>
    <br>
    <!--
        Render it in the corner of a <div>, change some 
        of the settings for each...
    -->
    <h4 style="text-align:center;">using githubcorner.txt</h4>
    <div class="outer">
        <div class="box">
<?php
require './githubcorner.php'; 
?>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h3 style="text-align:center;">
        GitHub Corners PHP - Additional Examples
    </h3>
    <br>
    <p>
        <div style="width:50%;margin: 0 auto;overflow: auto;border: 1px solid black;">
            <pre style=""><code><strong>
    &lt;div class="outer"&gt;
        &lt;div class="box"&gt;
            &lt;?php
                // specify a different config file
                $_SESSION['ghccfg'] = './ghc-right-grey-orange.txt'; 
                require './githubcorner.php'; 
            ?&gt;
        &lt;/div&gt;
    &lt;/div&gt;
            </strong></code></pre>
        </div>
    </p>
    <br>
    <h4 style="text-align:center;">ghc-right-grey-orange.txt</h4>
    <div class="outer">
        <div class="box">
<?php
$_SESSION['ghccfg'] = './ghc-right-grey-orange.txt'; 
require './githubcorner.php'; 
?>
        </div>
    </div>
    <br>
    <br>
    <br>
    <h4 style="text-align:center;">ghc-left-green-yellow.txt</h4>
    <div class="outer">
        <div class="box">
<?php
$_SESSION['ghccfg'] = './ghc-left-green-yellow.txt'; 
require './githubcorner.php'; 
?>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div style="width:75%;margin: 0 auto;">
        <p style="text-align:center;">
            It is also possible to over-ride any one or 
            all settings in the text file.
        </p>
    </div>
    <div style="width:50%;margin: 0 auto;overflow: auto;border: 1px solid black;">
        <pre style=""><code><strong>
    &lt;div class="outer"&gt;
        &lt;div class="box"&gt;
            &lt;?php
                // configuration file
                $_SESSION['ghccfg'] = './githubcorner.txt'; 
                $_SESSION['ghccolor'] = 'green';
                $_SESSION['ghcside'] = 'left';
                require './githubcorner.php'; 
            ?&gt;
        &lt;/div&gt;
    &lt;/div&gt;
        </strong></code></pre>
    </div>
    <br>
    <h4 style="text-align:center;">githubcorner.txt</h4>
    <div class="outer">
        <div class="box">
<?php
$_SESSION['ghccfg'] = './githubcorner.txt'; 
$_SESSION['ghccolor'] = 'green';
$_SESSION['ghcside'] = 'left';
require './githubcorner.php'; 
?>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div style="width:50%;margin: 0 auto;">
        <p style="text-align:justify;">
            To make it "stick" to the top of the page like it is 
            here, wrap it in a &lt;div&gt;. 
            <br><br><strong>Like this:</strong>
        </p>
    </div>
    <div style="width:50%;margin: 0 auto;overflow: auto;border: 1px solid black;">
        <pre style=""><code><strong>
    &lt;!-- 
        NOTE: To move to the left side, change the text file
        or over-ride the setting. But <u>make sure to also change</u>
        the outer &lt;div&gt; style from "right:0" to "left:0".
    --&gt;
    &lt;div style="position:fixed;right:0;top:0;"&gt;
        &lt;?php
        $_SESSION['ghcfill'] = 'grey'; 
        $_SESSION['ghccolor'] = 'black'; 
        require './githubcorner.php'; 
        ?&gt;
    &lt;/div&gt;
        </strong></code></pre>
    </div>
</body>
</html>