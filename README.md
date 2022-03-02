<h1 align="center">![Logo](http://www.soldi.dev.br/assets/logo_sm.png "Logo")</h1>

# Transforme um serviço RSS em API JSON

*Esse exemplo utiliza um serviço de **RSS da Folha de São Paulo**, originalmente em XML, e o transforma em um endpoint JSON*

[![](https://img.shields.io/badge/MADE%20WITH-PHP-blueviolet)](https://img.shields.io/badge/MADE%20WITH-PHP-blueviolet)  [![](https://img.shields.io/badge/-RSS-orange)](https://img.shields.io/badge/-RSS-orange)  [![](https://img.shields.io/badge/-JSON-green)](http://https://img.shields.io/badge/-JSON-green)

## Configuração :fa-cogs: 
#### ./config
Na pasta `config` há o arquivo `url.php`, onde é definida a url a ser invocada no código (o enderço do feed RSS), e o arquivo `format_functions.php`, criado para tratar o conteúdo recebido, especialmente para esse caso.

Provavelmente, em outros links RSS, você precisará criar novas formas de tratas a informação recebida.

### index.php
Com uma simples manipulação de DOM, o arquivo principal extrai as informações do feed e devolve um JSON que pode ser utilizado em qualquer outro aplicativo.

## Endpoint [![](https://img.shields.io/badge/website-on-success)](http://https://img.shields.io/badge/website-on-success)
O endpoint ficará disponível [neste link](http://www.soldi.dev.br/api/public/news "neste site") por tempo indeterminado, podendo eventualmente ser removido sem prévio aviso.

## Developer [![](https://img.shields.io/badge/contact-me-success)](https://img.shields.io/badge/contact-me-success)
[Anna Hamann](mailto:anna@soldi.dev.br "Anna Hamann")