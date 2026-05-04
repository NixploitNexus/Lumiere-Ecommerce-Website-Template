LUMIÈRE — Modern Fashion E-commerce Website
=============================================

A fully custom HTML5 + PHP fashion landing site, designed from scratch.

PAGES
-----
index.php     — Landing / hero / categories / new arrivals / lookbook / values / newsletter
shop.php      — Product listing with filters & sort (supports ?cat=women|accessories|new|lookbook)
product.php   — Product detail with gallery, sizes, colours, qty (?id=1..6)
about.php     — Atelier story + sustainability
contact.php   — Contact form (POST) + atelier info
cart.php      — Shopping bag with quantities and totals

STRUCTURE
---------
/index.php
/shop.php
/product.php
/about.php
/contact.php
/cart.php
/includes/header.php   — shared <head>, announcement bar, nav, mobile drawer
/includes/footer.php   — shared footer + script include
/includes/products.php — single source of product data + render helper
/css/style.css         — full custom design system (no frameworks)
/js/main.js            — drawer, scroll reveal, size/colour selectors
/assets/img/*.jpg      — original AI-generated photography

HOSTING
-------
Drop the entire `lumiere/` folder onto any PHP-enabled host (PHP 7.4+).
No database, no dependencies, no build step. Just upload and visit index.php.

For Apache, you may add a small .htaccess if you want to hide the .php
extensions, but it isn't required.

DESIGN
------
Custom typography pairing: Cormorant Garamond (display) + Inter (UI).
Warm editorial palette: cream #fbf8f3, ink #1a1816, terracotta #b8754a, gold #c9a36a.
Fully responsive, scroll-reveal animations, animated marquee, hover quick-add.

Enjoy. — Lumière
