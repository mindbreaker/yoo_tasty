# YOO Tasty - WordPress Theme (PHP 8 Fork)

A WordPress theme originally created by [YOOtheme](http://www.yootheme.com) in September 2012, built on the Warp 7 theme framework. This fork has been updated for **PHP 8.x compatibility**.

## Disclaimer

In January 2021, YOOtheme officially [sunsetted all Warp 7 themes](https://yootheme.com/blog/2021/01/11/sunsetting-warp-7-themes). The Warp 7 framework was released in 2013 and built on UIkit 2. After the release of UIkit 3 and YOOtheme Pro, Warp 7 was left behind. YOOtheme stopped maintaining all Warp 7 themes. They will not be updated for newer CMS versions and will only receive critical security patches. The themes were also removed from the demo server but remain available for download.

Crucially, **Warp 7 themes do not support PHP 8.x** out of the box.

**This fork is not affiliated with YOOtheme.** It is a private fork for an existing WordPress project that runs on this theme and needed to be updated to PHP 8. No new features will be added. This fork only contains the minimum changes required to restore PHP 8 compatibility.

The corresponding Widgetkit plugin has also been ported to PHP 8. See [yoo_widgetkit](https://github.com/mindbreaker/yoo_widgetkit).

## About

Tasty is a clean, versatile WordPress theme featuring multiple color styles and a flexible widget/module system. It includes built-in support for CSS/JS compression, social sharing buttons, and responsive widget positions.

## PHP 8 Compatibility

Since the original theme was abandoned before PHP 8 support was added, this fork addresses the breaking changes introduced in PHP 8.0 and 8.1:

- Fixed `WP_Widget` constructor calls (replaced deprecated PHP 4-style constructors)
- Updated `WarpMenuWalker` method signatures to match the `Walker_Nav_Menu` base class
- Resolved various PHP 8.1 deprecation warnings

## Color Styles

The theme ships with 7 built-in color styles:

- Bordeaux
- Coral
- Dove
- Green
- Orange
- Pink
- Turquoise

## Widget Positions

| Position    | Description         |
|-------------|---------------------|
| logo        | Site logo area      |
| menu        | Main navigation     |
| banner      | Banner area         |
| search      | Search bar          |
| breadcrumbs | Breadcrumb nav      |
| top-a       | Top section A       |
| top-b       | Top section B       |
| innertop    | Inner top section   |
| innerbottom | Inner bottom section|
| sidebar-a   | Sidebar A           |
| sidebar-b   | Sidebar B           |
| bottom-a    | Bottom section A    |
| bottom-b    | Bottom section B    |
| footer      | Footer area         |

## Installation

1. Download or clone this repository
2. Copy the theme folder to `wp-content/themes/`
3. Activate the theme in **Appearance > Themes**

## Requirements

- WordPress 5.0+
- PHP 7.4 / 8.0 / 8.1+

## License

YOOtheme Proprietary Use License - see [yootheme.com/license](http://www.yootheme.com/license)
