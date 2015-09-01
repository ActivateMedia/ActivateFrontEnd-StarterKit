<?php


$faqs = array();

$f = new stdClass();
$f->children = array();
$f->type = 'parent';
$f->title = 'Standard Subscription FAQ’S';
$f->content = '';
$faqs[] = $f;

$f = new stdClass();
$f->childOf = 0;
$f->type = 'child';
$f->title = 'How much will each issue of Dinosaurs & Friends cost me?';
$f->content = '<p><ul><li>Issue 1 costs only £1.99/€2.50. The regular price of issue 2 onwards is just £5.99/€6.99. All prices include VAT. This delivery is not included in the numbered deliveries below and does not include extra free gifts.</li>

<li>If you subscribe from issue 1, we will send you the first magazine straight away, together with Dino the Triceratops and Ben the baby T-rex. Issue 1 comes for the special introductory price of £1.99/€2.50.</li>

<li>You will receive 2 books and their accompanying prehistoric animals and/or accessories with your first (pack price £5.99/€6.99) and second deliveries (pack price £11.98/€13.98). Thereafter you will receive 4 books and their accompanying prehistoric animals and/or accessories in 1 delivery every month (pack price £23.96/€27.96)</li>

<li>For digital subscriptions an extra £0.99/€1.00 per issue is added.</li>
</ul>
<p>If you have not yet subscribed, please visit
www.mydinosaurfriends.com.</p>';
$faqs[$f->childOf]->children[] = $f;

$f = new stdClass();
$f->childOf = 0;
$f->type = 'child';
$f->title = 'Nullam id dolor id nibh ultricies vehicula ut id elit?';
$f->content = '<p>Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Curabitur blandit tempus porttitor.</p>';
$faqs[$f->childOf]->children[] = $f;


$f = new stdClass();
$f->children = array();
$f->type = 'parent';
$f->title = 'Premium Subscription FAQ’S';
$f->content = '';
$faqs[] = $f;


$f = new stdClass();
$f->childOf = 1;
$f->type = 'child';
$f->title = 'Nullam id dolor id nibh ultricies vehicula ut id elit?';
$f->content = '<p>Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Curabitur blandit tempus porttitor.</p>';
$faqs[$f->childOf]->children[] = $f;

$f = new stdClass();
$f->childOf = 1;
$f->type = 'child';
$f->title = 'Maecenas sed diam eget risus varius blandit sit amet non magna.?';
$f->content = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean lacinia bibendum nulla sed consectetur.</p>';
$faqs[$f->childOf]->children[] = $f;

$f = new stdClass();
$f->childOf = 1;
$f->type = 'child';
$f->title = 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit?';
$f->content = '<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod.</p>

<p>Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui.</p>';
$faqs[$f->childOf]->children[] = $f;


$f = new stdClass();
$f->children = array();
$f->type = 'parent';
$f->title = 'Digital Edition FAQ’S';
$f->content = '';
$faqs[] = $f;


$f = new stdClass();
$f->children = array();
$f->type = 'parent';
$f->title = 'Premium Subscription &amp; Digital Edition FAQ’S';
$f->content = '';
$faqs[] = $f;


$f = new stdClass();
$f->children = array();
$f->type = 'parent';
$f->title = 'General FAQ’S';
$f->content = '';
$faqs[] = $f;

//echo "<pre>".print_r($faqs, 1)."</pre>";




function p($p) {
  echo "<pre>".print_r($p, 1)."</pre>";
}