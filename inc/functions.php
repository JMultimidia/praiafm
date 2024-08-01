<?php
use Carbon\Carbon;
function limpaCelular($valor)
{
	$chars = array("(", ")", " ", "-");
	$valor = str_replace($chars, "", $valor);
	return $valor;
}

function getFeed($url)
	{
		$xml = null;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CRLF, true);

		$result = curl_exec($ch);
		if ($result) {
			$xml = new \DOMDocument();
			$xml->loadXML($result);
		}
		return $xml;
	}

function rssImage($image)
{
  return "<img src='$image' class='jmultimidia-img'>";
}

function showFeeds($rss)
{
  $col = "col-lg-4 col-md-6";
  $urls = $rss;
  // limite de itens
  $limit = 6;
  // contador
  $count = 0;

  foreach ($urls as $url) {

    $xml = getFeed($url);
    if ($xml) {
      $xpath = new DOMXPath($xml);
      $channel = $xpath->query('//channel')->item(0);

      $title = $xpath->query('title', $channel)->item(0)->nodeValue;
      $xpath->registerNamespace('media', $rss[0]);
      $items = $xpath->query('item', $channel);

      //echo '<h1>', ($title ? : $url), '</h1>';
      $count = 1;
      foreach ($items as $item) {
        $mediaContent = $xpath->query('media:content/@url', $item);
        $imagemDestaque = $xpath->query('imagem-destaque', $item);

        if ($mediaContent->length > 0) {
          $imageUrl = $mediaContent->item(0)->nodeValue;
        } elseif ($imagemDestaque->length > 0) {
          $imageUrl = $imagemDestaque->item(0)->nodeValue;
        }

        if (!empty($imageUrl)) {
          $headers = @get_headers($imageUrl);
          if ($headers && strpos($headers[0], '200')) {
            $image = rssImage($imageUrl); // A URL da imagem retornou um erro 404.
          } else {
            $image = '';
          }
        }
        echo '<div class="'.$col.' col-sm-12 mb-3">
        <div class="post-block-list post-module-1">
          <ul class="list-post">
            <li>
              <div class="d-flex">
                <div class="post-content media-body post-thumb">
                <a href=', $xpath->query('link', $item)->item(0)->nodeValue, ' target="_blank">
                '.$image.'
                <h4 class="post-title md text-limit-5-row">';
                echo htmlentities($xpath->query('title', $item)->item(0)->nodeValue, ENT_COMPAT, 'UTF-8');
                echo '</h4></a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>';
      $dataNode = $xpath->query('pubDate', $item)->item(0);
        if (!empty($dataNode)) {
          $data = new DateTime($dataNode->nodeValue);
          //$data->sub(new DateInterval('PT3H'));
          //echo '<p class="datetime">'.$data->format('d/m/Y H:i:s'), '</p>';
        }
        if ($count == $limit)
        break;
        $count++;
      }
    }
  }
}