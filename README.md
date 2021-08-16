# Simple-CrawlerDetector

Plugin simples, básico e rápido, em PHP, para detectar se o "browser agent" que está acessando sua página é um web crawler ou bot.


## Uso muito simples:

Baixe o repositório no diretório de sua preferencia e insira o código

```

<?php
  require 'crawlerDetect.php';
  if (isCrawler()) {
    // isCrawler retornou TRUE, consequentemente detectou que é um bot/crawler que esta acessando
  } else {
    // isCrawler retornou FALSE, consequentemente detectou que é um humano
  };
?>
  
  ```
 
