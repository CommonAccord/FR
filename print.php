<body style="margin:40;padding:0">
<?php

$document = `perl parser-print.pl $path/$dir`;

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 

//kludge to let html headers have formatting.

$document=str_replace("(Curly-)","{",$document);

$document=str_replace("(-Curly)","}",$document);
 
  echo $document;}
 else {
   echo "Rien à voir - soit pas de 'Model.Root', soit un lien n'existe pas";


}
?>
