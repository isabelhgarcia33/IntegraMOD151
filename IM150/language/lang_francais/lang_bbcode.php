<?php
/***************************************************************************
 *                         lang_bbcode.php [French]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *   Translated           : Ilia Tarik A/wahab from www.integraMOD.com
 *
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/* CONTRIBUTORS
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical problems.
*/
 
// 
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\"
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colors referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//
  
$faq[] = array("--", "Introduction");
$faq[] = array("Qu'est-ce que le BBCode ?", "Le BBCode est une impl�mentation sp�ciale du HTML. L'activation de l'utilisation du BBCode est d�termin�e par l'administrateur. En outre, vous pouvez d�sactiver le BBCode dans un message lors de sa composition. Le BBCode en lui-m�me est similaire au style du HTML, les balises sont contenues dans des crochets [ et ] � la place de &lt; et &gt;, et offrent un meilleur contr�le sur la mani�re dont quelque chose doit �tre affich�e. Selon le mod�le de document que vous utilisez, vous pourrez facilement rajouter du BBCode � vos messages � travers une interface de boutons cliquables au-dessus de la zone de texte lors de la composition de votre message. Toutefois, le guide qui suit pourra vous �tre utile.");

$faq[] = array("--", "Mise en forme du Texte");
$faq[] = array("Cr�er du texte en gras, italique et soulign�", "Le BBCode comprend des balises qui vous permettent de changer rapidement le style de votre texte. Cela se r�alise des mani�res suivantes : <ul><li>Pour rendre une partie de texte en gras, placez le dans <b>[b][/b]</b>, exemple: <br /><br /><b>[b]</b>Salut<b>[/b]</b><br /><br />donnera <b>Salut</b></li><li>Pour soulign� un texte, utilisez <b>[u][/u]</b>, par exemple:<br /><br /><b>[u]</b>Bonjour<b>[/u]</b><br /><br />donnera <u>Bonjour</u></li><li>Pour mettre un texte en italique, utilisez <b>[i][/i]</b>, exemple:<br /><br />C'est <b>[i]</b>Super!<b>[/i]</b><br /><br />donnera C'est <i>Super!</i></li></ul>");
$faq[] = array("Changer la taille ou la couleur du texte", "Pour changer la couleur ou la taille de votre texte, les balises suivantes peuvent �tre utilis�es. Ayez en t�te que le rendement du texte d�pendra de votre navigateur internet et de votre syst�me d'exploitation: <ul><li>Le changement de la couleur du texte se r�alise en le pla�ant dans <b>[color=][/color]</b>. Vous pouvez sp�cifier soit un nom de couleur reconnu (ex: red, blue, yellow, etc.), ou soit un code couleur hexadecimal, ex: #FFFFFF, #000000. Par exemple, pour cr�er du texte en rouge, vous pouvez utiliser:<br /><br /><b>[color=red]</b>Salut !<b>[/color]</b><br /><br />ou<br /><br /><b>[color=#FF0000]</b>Salut !<b>[/color]</b><br /><br />donneront tous deux <span style=\"color:red\">Salut !</span></li><li>Le changement de la taille de votre texte se r�alise de la m�me mani�re que pour la couleur en utilisant <b>[size=][/size]</b>. Cette balise est d�pendant du mod�le de document que vous utilisez, mais le format recommand� est une valeur num�rique repr�sentant la taille du texte en pixels, de 1 (tellement petit que vous le verrez pas) jusqu'� 29 (tr�s grand). Par exemple:<br /><br /><b>[size=9]</b>PETIT<b>[/size]</b><br /><br />donnera <span style=\"font-size:9px\">PETIT</span><br /><br />alors que:<br /><br /><b>[size=24]</b>ENORME !<b>[/size]</b><br /><br />donnera <span style=\"font-size:24px\">ENORME !</span></li></ul>");
$faq[] = array("Comment ins�rer des ancres et des liens vers un autre message","Ce forum permet l'utilisation d'ancres et de liens vers d'autres messages du forum.<ul><li>Pour ajouter une ancre dans votre message, utilisez simplement la balise <b>[anchor]</b><i>nom de l'ancre</i><b>[/anchor]</b>.</li><li>Pour cr�er un lien vers cette ancre, utilisez <b>[gotopost=<i>num�ro du message</i>,<i>nom de l'ancre</i>]</b>texte<b>[/gotopost]</b>.</li><li>Vous pouvez �galement utiliser gotopost pour aller au d�but de n'importe quel message: <b>[gotopost=<i>num�ro du message</i>]</b>texte<b>[/gotopost]</b>.</li></ul>");
$faq[] = array("Puis-je combiner les balises de mise en forme ?", "Oui, bien s�r que vous pouvez, par exemple pour attirer l'attention de quelqu'un, vous devriez �crire::<br /><br /><b>[size=18][color=red][b]</b>REGARDEZ MOI !<b>[/b][/color][/size]</b><br /><br />devrait donner <span style=\"color:red;font-size:18px\"><b>REGARDEZ MOI !</b></span><br /><br />N�anmoins, nous ne vous recommandons pas d'�crire beaucoup de texte comme ci-dessus ! Rapplez-vous que c'est � vous de vous assurer de fermer les balises correctement. Par exemple, ce qui suit est incorrect:<br /><br /><b>[b][u]</b>Ceci est incorrect<b>[/b][/u]</b>");

$faq[] = array("--", "Citation et texte � pas fixe");
$faq[] = array("Citation dans les r�ponses", "Il y a deux m�thodes pour citer un texte, avec ou sans r�f�rence.<ul><li>Lorsque vous utilisez la fonction Citer pour r�pondre � un message sur le forum, vous avez s�rement remarqu� que le texte en citation est ajout� dans la zone de texte entre <b>[quote=\"\"]</b> et <b>[/quote]</b>. Cette m�thode vous permet de citer avec une r�f�rence � une personne ou tout autre chose que vous aurez choisi de mettre ! Par exemple, pour citer un texte �crit par M. Dupont, vous devrez entrer: <br /> <br /><b>[quote=\"M. Dupont\"]</b>Le texte �crit par M. Dupont devra �tre plac� ici<b>[/quote]</b> <br /> <br />Cela ajoutera automatiquement, M. Dupont a �crit: avant votre texte. Rappelez-vous que vous <b>devez</b> inclure les guillemets \"\" autour de la r�f�rence que vous citez, ils ne sont pas optionnels.</li><li>La seconde m�thode vous permet de citer quelque chose sans faire r�f�rence � l'auteur. Pour l'utiliser, placez le texte entre les balises <b>[quote]</b> et <b>[/quote]</b>. Lorsque vous lirez votre message, il montrera simplement Citation: avant votre texte. </li></ul>");
$faq[] = array("Code ou police � pas fixe", "Si vous voulez afficher des lignes de code ou toute chose qui n�cessite une police � pas-fixe, ex: Police Courrier, vous devez placez le texte ou code dans les balises <b>[code][/code]</b>, exemple: <br /><br /><b>[code]</b>echo \"Ceci est du code\";<b>[/code]</b><br /><br />Toute mise en forme utilis�e dans  les balises <b>[code][/code]</b> sera appliqu�e.");

$faq[] = array("--", "Cr�ation de Listes");
$faq[] = array("Cr�er une liste non ordonn�e", "Le BBCode supporte deux types de listes, les listes non ordonn�es, et les listes ordonn�es. Elles sont essentiellement identiques � leurs �quivalents en HTML. Une liste non ordonn�e produit une liste dont les entr�es sont les uns en dessous des autres et indent�es avec une puce. Pour cr�er une liste non ordonn�e, utilisez <b>[list][/list]</b> et d�finissez chaque entr�e � l'int�rieur de la liste en utilisant <b>[*]</b>. Par exemple, pour �tablir une liste de vos couleurs favorites, vous pouvez utiliser: <br /> <br /><b>[list]</b> <br /><b>[*]</b>Rouge <br /><b>[*]</b>Bleu <br /><b>[*]</b>Jaune <br /><b>[/list]</b> <br /> <br />Cela donnera la liste suivante:<ul><li>Rouge</li><li>Bleu</li><li>Jaune</li></ul>");
$faq[] = array("Cr�er une liste ordonn�e", "Le second type de liste vous donne le contr�le sur ce qui va �tre affich� avant chaque entr�e. Pour cr�er une liste ordonn�e, vous devez utiliser <b>[list=1][/list]</b> pour cr�er une liste num�rot�e ou alternativement <b>[list=a][/list]</b> pour une liste alphab�tique. Comme pour les listes non ordonn�es, les entr�es sont sp�cifi�es en utilisant <b>[*]</b>. Par exemple:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Faire les magasins<br /><b>[*]</b>Acheter un nouvel ordinateur<br /><b>[*]</b>Injurier son ordinateur lorsqu'il plante<br /><b>[/list]</b><br /><br />donnera ce qui suit:<ol type=\"1\"><li>Faire les magasins</li><li>Acheter un nouvel ordinateur</li><li>Injurier son ordinateur lorsqu'il plante</li></ol>Alors que pour une liste alphab�tique, vous devez utiliser:<br /><br /><b>[list=a]</b><br /><b>[*]</b>La premi�re r�ponse possible<br /><b>[*]</b>La seconde r�ponse possible<br /><b>[*]</b>La troisi�me r�ponse possible<br /><b>[/list]</b><br /><br />donnera:<ol type=\"a\"><li>La premi�re r�ponse possible</li><li>La seconde r�ponse possible</li><li>La troisi�me r�ponse possible</li></ol>");

$faq[] = array("--", "Cr�ation de Liens");
$faq[] = array("Cr�er un lien vers un autre site", "Le BBCode de phpBB supporte plusieurs m�thodes pour cr�er des liens, plus connus sous le sigle URLs.<ul><li>La premi�re m�thode utilise les balises <b>[url=][/url]</b>, tout ce que vous taperez apr�s le signe = sera consid�r� comme le nom du lien. Par exemple pour cr�er un lien vers phpBB.com vous devez utiliser:<br /><br /><b>[url=http://www.phpbb.com/]</b>Visitez phpBB !<b>[/url]</b><br /><br />Ceci g�n�rera le lien suivant, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Visitez phpBB !</a> Vous remarquerez que le lien ouvre une nouvelle fen�tre, l'utilisateur peut donc continuer � parcourir les forums s'il le souhaite.</li><li>Si vous voulez que le lien affiche directement l'URL, vous devez simplement utiliser: <br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Ceci donnera le lien suivant, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>De plus, phpBB poss�de une fonctionnalit� appel� <i>Magic Links</i>, celle-ci convertira automatiquement une URL en un lien cliquable sans que vous ayez � ins�rer une balise BBCode ou http://. Par exemple, en tapant www.phpbb.com dans votre message, celui-ci sera automatiquement convertit en <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> lorsque vous le lirez.</li><li>La m�me chose s'applique aux adresses email, vous pouvez soit sp�cifier une adresse email explicitement, par exemple:<br /><br /><b>[email]</b>personne@domaine.com<b>[/email]</b><br /><br />qui donnera <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a>, ou soit en tapant personne@domaine.com dans votre message et sera automatiquement convertit lorsque vous le lirez.</li></ul>Comme pour toutes les balises BBCode entourer tout autre balise comme <b>[img][/img]</b> (reportez-vous � la partie suivante), <b>[b][/b]</b>, etc. Comme pour les balises de mise en forme, c'est � vous de vous assurer que l'ordre des balises d'ouverture et de fermeture est correct, par exemple:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /><u>n'est pas</u> correct et peut amener � la suppression de votre message, faites donc attention.");

$faq[] = array("--", "Cr�ation des images dans les messages");
$faq[] = array("Ajouter une image � un message", "Le BBCode de phpBB inclut une balise pour incorporer des images � vos messages. Deux importants points � retenir lors de l'utilisation de cette balise sont que premi�rement, beaucoup d'utilisateurs n'appr�cient gu�res un trop plein d'images dans un message et que secondement, l'image que vous voulez afficher doit d�j� �tre disponible sur internet (elle ne peut pas seulement exister sur votre ordinateur par exemple, � moins que votre ordinateur soit lui-m�me un serveur internet !). Il n'y a actuellement aucun moyen de stocker localement des images avec phpBB (ce probl�me sera trait� dans la prochaine version de phpBB). Pour afficher une image, vous devez entourer l'URL qui pointe vers l'image avec les balises <b>[img][/img]</b>. Par exemple: <br /> <br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b> <br /> <br />Comme not� ci-dessus dans la section Cr�ation de Liens, vous pouvez placer une image dans les balises <b>[url][/url]</b> si vous le souhaitez, exemple:<br /> <br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b> <br /> <br />devrait donner: <br /> <br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/".$theme['template_name']."/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a> <br />");
//  gauche a droite  d�but
$faq[] = array("Alignements des images et textes", "Ce forum � le mod d\�alignement gauche-droite des images install�. Par l\'utilisation de ces balises, vous pouvez am�liorer le format vos messages en alignant le texte au c�t� gauche ou droit.  En plus, avec l\'utilisation de ces balises, le texte enroulera maintenant d'une mani�re ordonn�e autour des images par opposition � la ligne comme avec une balise [IMG] normale.  Par exemple:<br /><br /><b>Avec la balise img:</b><br />Vraiment vraiment<b>[img]</b>phplogo.gif<b>[/img]</b> <b>[img]</b>phplogo.gif<b>[/img]</b> Vraiment vraiment vraiment vraiment vraiment mais vraiment une longue phrase. <table width=\"420\" cellpadding=\"5\"><tr><td class=\"quote\"><br />Vraiment vraiment <img src=\"images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /> <img src=\"images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /> Vraiment vraiment vraiment vraiment vraiment mais vraiment une longue phrase.<br /><br /></td></tr></table><br /> <b>Avec balise gauche droite:</b><br />Vraiment vraiment <b>[img=left]</b>phplogo.gif<b>[/img]</b> <b>[img=right]</b>phplogo.gif<b>[/img]</b> Vraiment vraiment vraiment vraiment vraiment mais vraiment une longue phrase. <table width=\"420\" cellpadding=\"5\"><tr><td class=\"quote\"><br /><img src=\"images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" align=\"left\" /> <img src=\"images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" align=\"right\" /> Vraiment vraiment vraiment vraiment vraiment mais vraiment une longue phrase.<br /><br /><br /></td></tr></table>") ;
// gauche a droite -Fin
$faq[] = array("--", "<a name=\"tables\"></a>Cr�er des tableaux");
$faq[] = array("A quoi servent les balises [table] et [/table]?", "Vous pouvez utiliser [table] et [/table] pour commencer et terminer un tableau<br />Utilisez <b>[table]</b> au tout d�but du tableau, <br />et <b>[/table]</b> � la fin.");
$faq[] = array("A quoi sert la balise [mrow]?", "Vous pouvez utiliser [mrow] pour une nouvelle ligne dont la premi�re colonne est un en-t�te (texte centr� et en gras).<br />Note: [/mrow] n'est pas requis<br /><br /><b><u>Par exemple:</u></b><br /><br />[table]<b>[mrow]</b>Main Row[/table]<br /><br />va �tre affich� comme<br /><br /><table align=\"top\" cellpadding=\"2\" cellspacing=\"0\" style=\"font-size: 12px\" border=\"1\" bgcolor=\"#FFFFFF\"><tr><td style=\"font-weight: bold; text-align: center;\">Main Row</td></tr></table>");
$faq[] = array("A quoi sert la balise [mcol]?", "Vous pouvez utiliser [mcol] pour une nouvelle colonne d'en-t�te (texte centr� et en gras).<br />Note: [/mcol] n'est pas requis<br /><br /><b><u>Par exemple:</u></b><br /><br />[table][mrow]Main Row Column 1<b>[mcol]</b>Main Row Column 2[col]Main Row Regular Column[/table]<br /><br />va �tre affich� comme<br /><br /><table align=\"top\" cellpadding=\"2\" cellspacing=\"0\" style=\"font-size: 12px\" border=\"1\" bgcolor=\"#FFFFFF\"><tr><td style=\"font-weight: bold; text-align: center;\">Main Row Column 1</td><td style=\"font-weight: bold; text-align: center;\">Main Row Column 2</td><td>Main Row Regular Column</td></tr></table>");
$faq[] = array("A quoi sert la balise [row]?", "Utiliser [row] pour chaque nouvelle ligne (texte normal, non centr�)<br />Note: [/row] n'est pas requis<br /><br /><b><u>Par exemple:</u></b><br /><br />[table][mrow]Main Row<b>[row]</b>Regular Row[/table]<br /><br />va �tre affich� comme<br /><br /><table align=\"top\" cellpadding=\"2\" cellspacing=\"0\" style=\"font-size: 12px\" border=\"1\" bgcolor=\"#FFFFFF\"><tr><td style=\"font-weight: bold; text-align: center;\">Main Row</td></tr><tr><td>Regular Row</td></tr></table>");
$faq[] = array("A quoi sert la balise [col]?", "Utilisez [col] pour chaque nouvelle colonne (texte normal, non centr�)<br />Note: [/col] n'est pas requis<br /><br /><b><u>Par exemple:</u></b><br /><br />[table][mrow]Main Row Column 1[mcol]Main Row Column 2[row]Regular Row Column 1<b>[col]</b>Regular Row Column 2[/table]<br /><br />va �tre affich� comme<br /><br /><table align=\"top\" cellpadding=\"2\" cellspacing=\"0\" style=\"font-size: 12px\" border=\"1\" bgcolor=\"#FFFFFF\"><tr><td style=\"font-weight: bold; text-align: center;\">Main Row Column 1</td><td style=\"font-weight: bold; text-align: center;\">Main Row Column 2</td></tr><tr><td>Regular Row Column 1</td><td>Regular Row Column 2</td></tr></table>");
$faq[] = array("Est-il n�cessaire de fermer les balises [mrow], [mcol], [row] ou [col]?", "Non, le Table BBCode s'occupe de fermer toutes les balises, � l'exception de [/table] qui est requis.");
$faq[] = array("Quels sont les autres attributs?", "Vous pouvez utiliser <a href=\"#color\">\"color=\"</a> and <a href=\"#fontsize\">\"fontsize=\"</a> avec toutes les balises. Vous les ajouter apr�s un espace, de la m�me mani�re que pour un attribut html. Leur ordre n'a aucune importance.<br /><br /><a name=\"color\"><br /></a><span style=\"font-size: 16px\"><b><u>Color</u></b></span><br /><br />L'attribut \"color=\" vous permet de changer la couleur de fond.<br />Vous pouvez soit sp�cifier le nom de la couleur en anglais (p. ex. red, blue, yellow, etc.), ou sa valeur hexad�cimale correspondance, p. ex. #FFFFFF, #000000.<br /><br /><b><u>Exemple:</u></b><br />[table color=blue][mrow color=green]Main Row Column 1[mcol color=red]Main Row Column 2[row color=#00FF00]Regular Row 1 Column 1[col color=#FF0000]Regular Row 1 Column 2[row]Regular Row 2 Column 1[col]Regular Row 2 Column 2[/table]<br />&nbsp;&nbsp;&nbsp;va �tre affich� comme<br /><table align=\"top\" cellpadding=\"2\" cellspacing=\"0\" style=\"font-size: 12px\" border=\"1\" bgcolor=\"#0000FF\"><tr bgcolor=\"#00FF00\"><td style=\"font-weight: bold; text-align: center;\">Main Row Column 1</td><td bgcolor=\"#FF0000\" style=\"font-weight: bold; text-align: center;\">Main Row Column 2</td></tr><tr bgcolor=\"#FF0000\"><td>Regular Row 1 Column 1</td><td bgcolor=\"#00FF00\">Regular Row 1 Column 2</td></tr><tr><td>Regular Row 2 Column 1</td><td>Regular Row 2 Column 2</table><br /><hr><br /><a name=\"fontsize\"></a><br /><span style=\"font-size: 16px\"><b><u>Fontsize</u></b></span><br /><br />L'attribut \"fontsize=\" vous permet de changer la taille de la police de caract�res.<br />La taille standard est r�gl�e � FONTSIZE3 dans le template, mais ceci peut �tre chang� en utilisant cet attribut dans les diff�rentes balises.<br /><br /><b><u>Exemple:</u></b><br />[table fontsize=18][mrow fontsize=10]Main Row Column 1[mcol fontsize=14]Main Row Column 2[row fontsize=5]Regular Row 1 Column 1[col fontsize=28]Regular Row 1 Column 2[row]Regular Row 2 Column 1[col]Regular Row 2 Column 2[/table]<br />&nbsp;&nbsp;&nbsp;va �tre affich� comme<br /><table align=\"top\" cellpadding=\"2\" cellspacing=\"0\" style=\"font-size: 18px\" border=\"1\" bgcolor=\"#FFFFFF\"><tr style=\"font-size: 10px\"><td style=\"font-weight: bold; text-align: center;\">Main Row Column 1</td><td  style=\"font-weight: bold; text-align: center; font-size: 14px\">Main Row Column 2</td></tr><tr style=\"font-size: 5px\"><td>Regular Row 1 Column 1</td><td style=\"font-size: 28px\">Regular Row 1 Column 2</td></tr><tr><td>Regular Row 2 Column 1</td><td>Regular Row 2 Column 2</table>");


$faq[] = array("--", "Divers");
$faq[] = array("Puis-je ajouter mes propres balises ?", "Non, je crains que cela soit impossible directement dans phpBB 2.0.X Nous offrirons la possibilit� de personnaliser les balises BBCode dans la prochaine version majeure.");

$faq[] = array('Qu\'est-ce que la balise code PHP?', 'Le PHP BBCode est semblable au code BBCode, sauf qu\'il devrait seulement �tre employ� pour le code de PHP. Pourquoi? Il accentue certaines sections du code PHP, facilitant ainsi la lecture.');

//
// This ends the BBCode guide entries
//

?>
