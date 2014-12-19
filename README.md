![](Starterr-logo.png)

> a simple neat theme structured as a boilerplate for [PressRoom](http://press-room.io)    

**Starterr** is built with the support of [Node](http://nodejs.org/), [Bower](http://bower.io/) and [Grunt](http://gruntjs.com/). 

##Quick start

**Starterr** is meant to be used as a strating point to develop your own theme:

1. Download
2. Unzip
3. Rename the unzipped folder and start customizing the `config.xml` file 
4. To edit the **Starterr** source files just open a terminal window at the its root folder, and type:

```bash
npm i && bower i
```
Then just start watching:

```bash
grunt watch
```

##Basic theme file structure:

```bash
├── Gruntfile.js
├── README.md
├── Starterr-logo.png
├── assets
│   ├── css
│   │   ├── styles.a38a4712.css
│   │   └── toc.7a77eb84.css
│   ├── fonts
│   ├── img
│   │   └── fallback.gif
│   ├── js
│   │   ├── scripts.min.665cf2e5.js
│   │   ├── source
│   │   │   ├── _main__init.js
│   │   │   └── _toc__init.js
│   │   └── toc.min.5b460967.js
│   └── sass
│       ├── base
│       │   ├── _breakpoints.scss
│       │   ├── _colors.scss
│       │   ├── _embed.scss
│       │   ├── _fonts.scss
│       │   ├── _globals.scss
│       │   ├── _images.scss
│       │   └── _typography.scss
│       ├── components
│       │   ├── _callout.scss
│       │   ├── _cover-image.scss
│       │   ├── _entry-meta.scss
│       │   └── _swiper.scss
│       ├── layout
│       │   └── _grid.scss
│       ├── pages
│       │   ├── _all.scss
│       │   └── _toc.scss
│       ├── styles.scss
│       ├── toc.scss
│       └── utility
├── bower.json
├── config.xml
├── inc
│   └── functions.php
├── layouts
│   ├── basic-article.php
│   ├── components
│   │   └── coverimage.php
│   ├── index.php
│   ├── partials
│   │   ├── content.php
│   │   └── head.php
│   └── toc.php
├── package.json
└── version.json
```

##Credits


###Sass

- [Bourbon](https://github.com/thoughtbot/bourbon) *by* [thoughtbot](http://robots.thoughtbot.com/)    
A simple and lightweight mixin library for Sass
- [Scut](http://davidtheclark.github.io/scut/) *by* [David Clark](http://davidtheclark.com/)    
Sass utilities for the frontend laborer
- [Jeet](https://github.com/mojotech/jeet) *by* [MojoTech](http://www.mojotech.com/) 
The most advanced, yet intuitive, grid system available for Sass or Stylus 
- [Mq](https://github.com/guardian/sass-mq) *by the guys at* [The Guardian](http://www.theguardian.com/uk)     
A Sass mixin that helps manipulating media queries in an elegant way 
- [Knife](http://pushplaybang.github.io/knife/) by [Paul van Zyl](http://nonacreative.com/)   
Nail vertical rhythm, modular scale, and REMs like a boss with this simple set of SASS/SCSS variables, functions and mixins. 


###Javascript
All the libs here are standalone pure javascript libraries, for maximum performance on mobile and full support for desktop browsers.

- [textFit](https://github.com/STRML/textFit) *by* Samuel Reed    
A jQuery-free component that quickly fits single and multi-line text to the width (and optionally height) of its container. 
- [FluidVids](https://github.com/toddmotto/fluidvids) *by* [Todd Motto](http://toddmotto.com/)   
A lightweight, easy-to-use jQuery plugin for fluid width video embeds. 
- [iDangerous Swiper ](http://www.idangero.us/sliders/swiper/) *by* [iDangero.us](http://www.idangero.us/)  
Mobile touch slider & framework with hardware accelerated transitions
- [FastClick](https://github.com/ftlabs/fastclick) *by the guys at* [FTLabs](http://labs.ft.com/)   
Polyfill to remove click delays on browsers with touch UIs 

