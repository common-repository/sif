=== Sif ===
Contributors: adpu
Donate link: https://www.paypal.me/jverdaguer
Tags: woocommerce, ecommerce, product, images, photos, product photos
Requires at least: 4.0
Tested up to: 5.0
Stable tag: 1.04
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Sif is a simple wordpress plugin that adds hover or flipper image in woocommerce product list, category list and related products list. 

== Description ==

Sif is a simple wordpress plugin that adds hover or flipper image in woocommerce product list, category list and related products list. 
The image that is displayed on hover, is the first one in the order of product gallery.

== Installation ==

1. Upload `sif` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. Screenshot of product image.
2. Screenshot of product image on hover.
3. Screenshot of product gallery in product editor. 

== Frequently Asked Questions ==

= How do I control which image is displayed on hover? =

It is the first one in the order of product gallery.

= My hover image content, it is not centered, what can I do? =

This happens because hover image and featured image, they have different aspect ratio. To fix it,  crop hover image (First one in the order of product gallery) with the same size of featured image.

= On hover it shows image with grey background with a ban icon, what it is happens ? =

It is generic image, it happens because You don't have gallery images.



== Changelog ==

= 1.0 =
* First stable version

= 1.01 =
* Fixed errors  "Notice: WC_Product::get_gallery_attachment_ids deprecated"
* Fixed errors when a product not had gallery images attached, now it shows a hover generic image.

= 1.02 =
* Auto height on hover image 

= 1.03 =
* Fixed error on hover image height value 

= 1.04 =
* Fixed error on javascript public file

== Credits ==

Vector illustration credit: Vecteezy (https://www.vecteezy.com)