<?php return unserialize('a:4:{i:0;O:27:"Doctrine\\ORM\\Mapping\\Column":9:{s:4:"name";s:6:"nombre";s:4:"type";s:6:"string";s:6:"length";i:50;s:9:"precision";i:0;s:5:"scale";i:0;s:6:"unique";b:0;s:8:"nullable";b:0;s:7:"options";a:0:{}s:16:"columnDefinition";N;}i:1;O:47:"Symfony\\Component\\Validator\\Constraints\\NotNull":3:{s:7:"message";s:23:"Debe escribir su nombre";s:7:"payload";N;s:6:"groups";a:1:{i:0;s:7:"Default";}}i:2;O:46:"Symfony\\Component\\Validator\\Constraints\\Length":9:{s:10:"maxMessage";s:71:"Tu primer nombre no puede tener más de {{ limit }} caracteres de largo";s:10:"minMessage";s:72:"Tu primer nombre por lo menos debe tener {{ limit }} caracteres de largo";s:12:"exactMessage";s:108:"This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.";s:14:"charsetMessage";s:61:"This value does not match the expected {{ charset }} charset.";s:3:"max";s:2:"20";s:3:"min";s:1:"3";s:7:"charset";s:5:"UTF-8";s:7:"payload";N;s:6:"groups";a:1:{i:0;s:7:"Default";}}i:3;O:45:"Symfony\\Component\\Validator\\Constraints\\Regex":6:{s:7:"message";s:24:"This value is not valid.";s:7:"pattern";s:34:"/[A-Z]{1}[a-zñáéíóú]{2,20}$/";s:11:"htmlPattern";N;s:5:"match";b:1;s:7:"payload";N;s:6:"groups";a:1:{i:0;s:7:"Default";}}}');