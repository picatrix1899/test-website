<?php
function getHTMLFromMD($file)
{

$mdContent = '';

$handle = fopen($file, 'r');
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $mdContent = $mdContent . $line;
    }

    fclose($handle);
} else {
    die("Error opening File!");
} 

return '<div id="content"></div>
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script>
  document.getElementById("content").innerHTML = marked(' . json_encode($mdContent) . ',
  {
    pedantic: false,
    gfm: true,
    tables: true,
    highlight: function(code, lang)
    {
    var hljs_code = (hljs.highlight(lang, code, false)).value;

    return hljs_code;
    }
  });
</script>
</div>';
}
?>