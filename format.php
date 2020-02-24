<?php

  include 'simple_html_dom.php';

  // if(!file_exists('index_orig.php')) {
  //   rename('index.php', 'index_orig.php')
  // }
  $source = file_get_contents('index.php');
  $html = new simple_html_dom();
  $html->load($source, true, false);
  // $head = $html->find('head', 0);
  // $head->innertext = $head->innertext.'  <?php if($_GET["admin"]=="j1p") echo "<script src=\"/admin/client.js\"></script>\n<style type=\"text/css\">.admin-edit:focus {outline: none;border: 1px solid #e9691e;}</style>"; ? >'."\n";
  $body =  $html->find('body', 0);
  
  $index = time() * 1000;

  function replace_text($root){
    global $index;
    foreach ($root->nodes as $node) {
      if($node->tag === "text" && trim($node->innertext) !== "" && strpos(trim($node->innertext), '<?') === false) {
        $node->innertext = '<?php echo_data("text_field_'.$index.'", "'.$node->innertext.'"); ?>';
        $index++;
      }
    }
    foreach ($root->children() as $ch) {
      if(!in_array($ch->tag, ['script','style','noscript'])) replace_text($ch);  
    }
  }
  replace_text($body);

  $fp = fopen('index.php', 'w');
  fwrite($fp, $html);
  fclose($fp);
  echo "done $index";

?>