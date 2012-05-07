<?php

 $xml = '<?xml version="1.0" encoding="UTF-8"?>';
 $xml .= '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">'; 
 $xml .= '<channel>'; 
 $xml .= '<title>OSP-works</title>';
 $xml .= '<link>/works/</link>';
 $xml .= '<description>What we\'ve made</description>';
 $xml .= '<copyright>Free Arts License</copyright>';
 $xml .= '<language>en</language>';
 
 $today= date("D, d M Y H:i:s +0100");

 //date du jour d'execution du fichier PHP
 $xml .= '<pubDate>'.$today.'</pubDate>';

 require ('connect.php'); 
 
  $resultat_requete=mysql_query("SELECT * FROM ndxz_objects ORDER BY id DESC limit 0, 10");
 

  while($lig=mysql_fetch_assoc($resultat_requete)){ 
  	
    $id=$lig["id"];
    $titre=$lig["title"];
    $adresse='/works/index.php?';
    $adresse.=$lig["url"];
    $contenu=str_replace("<p>","",$lig["content"]);
    $contenu=str_replace("</p>","",$contenu);
    
    $resultat_media=mysql_query("SELECT * FROM ndxz_media WHERE media_ref_id=$id ORDER BY media_order ASC limit 0, 5");
    
    while($media=mysql_fetch_assoc($resultat_media)){
    $fichier = $media['media_file'];}
    $date=$lig["pdate"];
    
    list($Y, $m, $dateHeure) = explode("-",$date);
    list($d, $heure) = explode(" ",$dateHeure);
    list($H, $i, $s) = explode(":",$heure);
    
    $timestamp = mktime($H,$i,$s,$m,$d,$Y);
    
    $datephp=date("D, d M Y H:i:s +0100", $timestamp);
    $xml .= '<item>';
    $xml .= '<title>'.$titre.'</title>';
    $xml .= '<link>'.$adresse.'</link>';
    $xml .= '<guid>'.$adresse.'</guid>';
    $xml .= '<pubDate>'.$datephp.'</pubDate>';
    $xml .= '<description>'.htmlspecialchars($contenu).'</description>';
    $xml .= '</item>'; 
  }//fin du while
  
  $xml .= '</channel>';
  $xml .= '</rss>';
  
  $fp = fopen("rss.xml", 'w+');
  fputs($fp, $xml);
  fclose($fp);
  
  echo '<a href="rss.xml">Update OSP-works RSS!</a>';
  ?>
