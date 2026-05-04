<?php
// Single source for product data — used by index, shop, product pages
$PRODUCTS = [
  ['id'=>1,'name'=>'Mira Cashmere Sweater','price'=>320,'old'=>null,'cat'=>'women','img'=>'p1.jpg','tag'=>'New','colors'=>['#c8a370','#1a1816','#f0e6d2']],
  ['id'=>2,'name'=>'Tailored Wool Trouser','price'=>240,'old'=>null,'cat'=>'women','img'=>'p2.jpg','tag'=>null,'colors'=>['#1a1816','#5a544c']],
  ['id'=>3,'name'=>'Soie Silk Blouse','price'=>180,'old'=>220,'cat'=>'women','img'=>'p3.jpg','tag'=>'Sale','colors'=>['#fbf8f3','#c8a370']],
  ['id'=>4,'name'=>'Ondée Crossbody Bag','price'=>440,'old'=>null,'cat'=>'accessories','img'=>'p4.jpg','tag'=>null,'colors'=>['#7a3f1f','#1a1816']],
  ['id'=>5,'name'=>'Plissé Midi Skirt','price'=>260,'old'=>null,'cat'=>'women','img'=>'p5.jpg','tag'=>'New','colors'=>['#f0e6d2','#1a1816']],
  ['id'=>6,'name'=>'Atelier Leather Boot','price'=>490,'old'=>590,'cat'=>'accessories','img'=>'p6.jpg','tag'=>'Sale','colors'=>['#1a1816','#7a3f1f']],
];

function product_card($p){
  $img = "assets/img/".$p['img'];
  $price = $p['old']
    ? '<del>€'.$p['old'].'</del> <ins>€'.$p['price'].'</ins>'
    : '€'.$p['price'];
  $tag = $p['tag'] ? '<span class="product-tag '.($p['tag']==='Sale'?'sale':'').'">'.$p['tag'].'</span>' : '';
  $sw = '';
  foreach($p['colors'] as $c) $sw .= '<span class="sw" style="background:'.$c.'"></span>';
  echo '<a class="product reveal" href="product.php?id='.$p['id'].'">
    <div class="product-img">
      '.$tag.'
      <button class="product-fav" aria-label="Favourite">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 21s-7-4.5-9-9a5 5 0 0 1 9-3 5 5 0 0 1 9 3c-2 4.5-9 9-9 9z"/></svg>
      </button>
      <img src="'.$img.'" alt="'.htmlspecialchars($p['name']).'" loading="lazy">
      <div class="product-quick">+ Quick Add</div>
    </div>
    <h4>'.htmlspecialchars($p['name']).'</h4>
    <div class="product-meta"><span class="product-price">'.$price.'</span></div>
    <div class="swatches">'.$sw.'</div>
  </a>';
}
