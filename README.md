<h1 align="center">MarkShust_LayoutHandleLogger</h1> 

<div align="center">
  <p>Displays layout handles when in developer mode.</p>
  <img src="https://img.shields.io/badge/magento-2.4.4+-brightgreen.svg?logo=magento&longCache=true&style=flat-square" alt="Supported Magento Versions" />
  <a href="https://packagist.org/packages/markshust/magento2-module-layouthandlelogger" target="_blank"><img src="https://img.shields.io/packagist/v/markshust/magento2-module-layouthandlelogger.svg?style=flat-square" alt="Latest Stable Version" /></a>
  <a href="https://packagist.org/packages/markshust/magento2-module-layouthandlelogger" target="_blank"><img src="https://poser.pugx.org/markshust/magento2-module-layouthandlelogger/downloads" alt="Composer Downloads" /></a>
  <a href="https://GitHub.com/Naereen/StrapDown.js/graphs/commit-activity" target="_blank"><img src="https://img.shields.io/badge/maintained%3F-yes-brightgreen.svg?style=flat-square" alt="Maintained - Yes" /></a>
  <a href="https://opensource.org/licenses/MIT" target="_blank"><img src="https://img.shields.io/badge/license-MIT-blue.svg" /></a>
</div>

## Table of contents

- [Summary](#summary)
- [Installation](#installation)
- [Usage](#usage)
- [Credits](#credits)
- [License](#license)

## Summary

There are times during development when you'll need to be able to easily access all layout handles of a specific page. Unfortunately, Magento does not provide this capability out of the box.

This module adds the list of all layout handles on the page before the end body block, which makes it very easy to identify which layout handles are loaded for a specific page.

## Installation

```
composer require markshust/magento2-module-layouthandlelogger
bin/magento module:enable MarkShust_LayoutHandleLogger
bin/magento setup:upgrade
```

## Usage

This module has no configuration. Just install, and as long as you are in developer mode, you'll see all of the layout handles loaded for a specific page.

![Screenshot](https://raw.githubusercontent.com/markshust/magento2-module-layouthandlelogger/main/docs/demo.png)

## Credits

### M.academy

This module is sponsored by <a href="https://m.academy" target="_blank">M.academy</a>, the simplest way to learn Magento.

<a href="https://m.academy" target="_blank"><img src="https://raw.githubusercontent.com/markshust/magento2-module-layouthandlelogger/main/docs/macademy-logo.png" alt="M.academy"></a>

### Mark Shust

My name is Mark Shust and I'm the creator of this repo. I'm a <a href="http://www.zend.com/en/yellow-pages/ZEND014633" target="_blank">Zend Certified Engineer</a> and <a href="https://www.youracclaim.com/users/mark-shust" target="_blank">Adobe Certified Magento Developer</a>, and have been involved since the early days of Magento (0.8!). I'm no longer available for consulting, but am creating course content full-time at <a href="https://m.academy" target="_blank">M.academy</a>.

- <a href="https://www.linkedin.com/in/MarkShust/" target="_blank">🔗 Connect with me on LinkedIn</a>
- <a href="https://youtube.com/markshust" target="_blank">🎥 Watch my YouTube videos</a>
- <a href="https://twitter.com/MarkShust" target="_blank">🐦 Follow me on Twitter</a>
- <a href="https://markshust.com" target="_blank">📖 Read my blog</a>
- <a href="mailto:mark@shust.com">💌 Contact me</a>

## License

[MIT](https://opensource.org/licenses/MIT)
