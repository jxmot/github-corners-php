# GitHub Corners - PHP Version

The work done in this repository was inspired by the work previously done in **[github-corners](https://github.com/tholman/github-corners)** by [Tim Holman](https://tholman.com/).

## Overview

This is a *remix* of **[github-corners](https://github.com/tholman/github-corners)**. I didn't think it would fit well as modifications made to a fork. So this repository was created.

I wanted to use PHP because:

* PHP is *fun*
* I wanted to create a reusable module that could be configured as needed.
* Uses less lines of code than JavaScript

## Details

The following settings are configurable:

* corner side - "left" or "right"
* background color - use color names like "black" or "yellow", hash tag colors like "#00FF00", but you **cannot** use `rgb()`.
* foreground color - same as background color settings
* CSS file - just in case individual CSS files are needed
* target repository - where the link goes
* link title - mouse-over text, **cannot** contain any commas

A configuration text file would contain:

```
./githubcorner.css,right,black,white,https://github.com/jxmot/github-corners-php,View source on GitHub
```

## Demonstration

A working demonstration can be found [here](http://webexperiment.info/portfolio/ghc/).

## Usage

Neccessary files:
* githubcorner.php (this file)
* githubcorner.css (styling)
* githubcorner.txt (configuration)

**NOTE**: All "paths" to files are relative to where this file is required by its host-file.

**Example 1:**
```
// specifiy a config file
$_SESSION['ghccfg'] = './githubcorner.txt'; 
require_once './githubcorner.php'; 
```

**Example 2:**
```
// specifiy a different config file
$_SESSION['ghccfg'] = './someother.txt'; 
require_once './githubcorner.php'; 
```

**Example 3:**
```
// use the default config file
require_once './githubcorner.php'; 
```

**Example 4:**
```
// use the default config file, but over-ride
// the colors
$_SESSION['ghcfill'] = 'black'; 
$_SESSION['ghccolor'] = '#00ff00'; 
require_once './githubcorner.php'; 
```

**Example 5:**
```
// specifiy a config file, and over-ride
// the colors
$_SESSION['ghccfg'] = './githubcorner.txt'; 
$_SESSION['ghcfill'] = 'black'; 
$_SESSION['ghccolor'] = '#00ff00'; 
require_once './githubcorner.php'; 
```

### Make it "Sticky"

If you want the icon to "stick" to the top and not scroll with the content try this:

```
<!-- 
    NOTE: To move to the left side, change the text file
    or over-ride the setting. But make sure to also change
    the outer <div> style from "right:0" to "left:0".
-->
<div style="position:fixed;right:0;top:0;">
    <?php
    $_SESSION['ghcfill'] = 'grey'; 
    $_SESSION['ghccolor'] = 'black'; 
    require './githubcorner.php'; 
    ?>
</div>
```
