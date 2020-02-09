<?php
/**
 /**
|--------------------------------------------------------------------------|
|   https://github.com/3evils/                                            |
|--------------------------------------------------------------------------|
|   Licence Info: WTFPL                                                    |
|--------------------------------------------------------------------------|
|   Copyright (C) 2019 Evil-Trinity                             |
|--------------------------------------------------------------------------|
|   A bittorrent tracker source based on an unreleased U-232.   |
|--------------------------------------------------------------------------|
|   Project Leaders: AntiMidas               |
|--------------------------------------------------------------------------|
_   _   _   _   ___Based on____     _   _   _   _
/ \ / \ / \ / \ / \   / \ / \ / \ / \ / \ / \   / \ / \ / \ / \
( U | - | 2 | 3 | 2 )-( S | o | u | r | c | e )-( C | o | d | e )
\_/ \_/ \_/ \_/ \_/   \_/ \_/ \_/ \_/ \_/ \_/   \_/ \_/ \_/ \_/
 */
$lang = array(
    //Error
    'error_error' => "Erreur",
    'error_bad' => "Mauvaise ID!",
    'error_title' => "Vous devez entrer un titre!",
    'error_cat' => "Vous devez sélectionner une catégorie pour y placer la requête!",
    'error_descr' => "Vous devez entrer une déscription!",
    'error_image' => "L'image doit être au format png, jpg ou gif. Assurez-vous que vous incluez http:// dans l'URL.",
    'error_invalid' => "ID Invalide",
    'error_denied' => "Accès refusé.",
    'error_invalid_torrent' => "Torrent ID invalide !",
    'error_no_user' => "l'ID ne correspond pas à un utilisateur, réessayez",
    'error_no_torrent' => "l'ID ne correspond à aucun torrent, réessayez",
    'error_not_yours' => "Ce n'est pas votre requête, suppression impossible!",
    'error_not_yours1' => "Ce n'est pas votre requête, modification impossible!",
    'error_empty' => "Ne laissez pas de champs vides.",
    'error_dee' => "tweedle-dee tweedle-dum",
    'error_funky' => "Cette ID est funky!",
    'error_no_torrent2' => "Aucun torrent avec cette ID ",
    'error_own_id' => "L'ID est la vôtre. Vous ne pouvez pas compléter vos propres requêtes.",
    //view_request
    'req_section' => "Section des requêtes",
    'req_make_req' => "Faire une requête",
    'req_view_all' => "Voir les requêtes",
    'req_view_my' => "Voir mes requêtes",
    'req_show_all' => "(Tout afficher)",
    'req_hide_filled' => "Masquer les complétées",
    'req_only_filled' => "Afficher les complétées",
    'req_type' => "Type",
    'req_name' => "Nom",
    'req_added' => "Ajouté",
    'req_req_by' => "Demandée par",
    'req_votes' => "Votes",
    'req_filled' => "Remplie?",
    'req_filled_by' => "Remplie par",
    'req_del' => "Supprimé",
    'req_not_filled' => "<small>Non remplie</small>",
    'req_select_all' => "tout sélectionner",
    'req_unselect_all' => "désélectionner tout",
    'req_select_del' => "Supprimer la sélection",
    'req_nothing' => "Rien ici!",
    'req_search_results' => "Recherche de requêtes: ",
    'req_search' => "Rechercher",
    //add_req
    'add_must_be' => "Vous devez être ",
    'add_ratio_above' => " ou au-dessus <b>ET</b> avoir un ratio au-dessus <b>",
    'add_make_req' => "</b> faire une requête.",
    'add_faq' => " SVP lisez la <a href='faq.php'><b>FAQ</b></a> pour plus d'informations sur les différentes classes d'utilisateurs et ce qu'ils peuvent faire.",
    'add_rules' => "Demande de règles",
    'add_rules1' => "Pour faire une demande, vous devez avoir un ratio d'au moins",
    'add_rules2' => " ET avoir uploadé au moins ",
    'add_rules3' => " Une demande vous coûtera aussi ",
    'add_rules4' => "Dans votre cas particulier ",
    'add_rules5' => "vous <b>pouvez</ b> faire des requêtes. <p> Pour voir toutes les requêtes, cliquez ",
    'add_rules6' => "ici",
    'add_rules7' => "vous n'avez pas suffisamment de ",
    'add_rules8' => "vous ne pouvez pas faire des demandes.",
    'add_rules9' => "Pour voir toutes les demandes, cliquez sur ",
    'add_rules10' => "vous avez <b> pas </ b> encore envoyé ",
    'add_rules11' => "... vous ne pouvez pas faire des demandes.",
    'add_rules15' => "votre ratio de ",
    'add_rules12' => " et votre total uploadé de",
    'add_rules13' => "ne permettent pas",
    'add_rules14' => " de répondre aux exigences minimales pour faire une requête.",
    'add_search_before' => "Merci de faire une recherche de torrents avant d'ajouter une requête!",
    'add_in' => " à ",
    'add_all_types' => "(tous les types)",
    'add_incl_dead' => " y compris les torrents inactifs",
    'add_good_ratio' => "Les requêtes sont réservées aux utilisateurs avec un bon ratio et qui ont uploadé ",
    'add_share' => " gigs seulement... Partagez et vous recevrez!",
    'add_title' => "Titre",
    'add_select_cat' => "(Choisissez une catégorie)",
    'add_image' => "Image",
    'add_direct_link' => "(Lien direct vers l'image, aucun tag NÉCESSAIRE! Ce sera montré dans la description)",
    'add_upload_image' => "Uploader Image",
    'add_description' => "Description",
    'add_ok' => "Okay",
    'add_cat' => "Catégorie",
    'add_request' => "Demander",
    //req_details
    'details_details' => "Détails de la requête: ",
    'details_edit' => "Editer la requête",
    'details_delete' => "Supprimer la requête",
    'details_reset' => "Réinitialiser la requête",
    'details_all_req' => "Toutes les requêtes",
    'details_vote' => "Voter",
    'details_vote_req' => "Voter pour cette requête",
    'details_report' => "Signaler la requête ",
    'details_break' => "pour avoir enfreint les règles",
    'details_fill_this' => "Complétez cette requête",
    'details_fill' => "Compléter la requête",
    'details_enter_id' => "Entrez l' <b>ID</b>  du torrent. (copier / coller l' <strong>ID</strong> de la barre d'adresse de l'autre fenêtre le numéro d'ID correct)",
    'details_yours' => "Cette requête est la vôtre, vous ne pouvez donc pas la compléter.",
    'details_filled' => "Cette requête a été complétée:",
    'details_add_comment' => "Ajouter un commentaire",
    'details_no_comment' => "Aucun commentaire pour l'instant",
    //del_req
    'del_req' => "Vous êtes sur le point de supprimer cette requête. Cliquez",
    'del_req1' => ", si vous êtes sûr.",
    //edit_req
    'edit_staff' => "Staff seulement",
    'edit_filled_by' => "Remplie par ID",
    'edit_torrent_id' => "Torrent ID",
    //reset_req
    'reset_success' => "Succès!",
    'reset_successfully' => " réinitialisé avec succès.",
    'reset_sorry' => "Désolé, impossible de réinitialiser une requête dont vous n'êtes pas l'auteur, le staff ou la personne qui l'a complétée.",
    //req_vote
    'vote_vote' => "Vous avez déjà voté",
    'vote_allowed' => "seul un vote par requête est autorisée",
    'vote_details' => "détails de la requête",
    'vote_all' => "toutes les requêtes",
    'vote_success' => "A voté pour la requête ",
    'vote_no_id' => "Aucune ID correspondante",
    //view_votes
    'view_voters' => "Votes pour ",
    'view_vote_this' => "Votez pour cette ",
    'view_req' => "requête",
    'view_nothing' => "Rien trouvé",
    'view_name' => "Pseudo",
    'view_upl' => "Uploadé",
    'view_dl' => "Téléchargé",
    'view_ratio' => "Ratio",
    //filled
    'filled_your' => "Votre requête, ",
    'filled_by' => " a été complétée par ",
    'filled_dl' => ". Vous pouvez télécharger votre requête à partir de ",
    'filled_thx' => ".  SVP ne pas oublier de laisser un merci à qui de droit. ",
    'filled_wrong' => "Si pour une raison quelconque, ce n'est pas votre requête, SVP réinitialisez votre requête, afin que quelqu'un d'autre puisse la compléter, en suivant ",
    'filled_this' => "ce",
    'filled_link' => " lien. Ne [b]PAS[/b] suivre ce lien sauf si vous êtes sûr que cela ne correspond pas à votre requête.",
    'filled_success' => " complétée avec succès ",
    'filled_user' => "Le membre ",
    'filled_pm' => " a reçu un PM automatique.  ",
    'filled_mistake' => "Si vous avez fait une erreur en remplissant l'URL ou avez réalisé que votre torrent ne satisfaisait pas cette demande.",
    'filled_reset' => "SVP réinitialisez la demande en cliquant ",
    'filled_here' => "ICI",
    'filled_unless' => "Ne [b]PAS[/b] suivre ce lien sauf si vous êtes sûr qu'il y a un problème.",
    'filled_upl' => " vient d'être uploadé",
    'filled_voted' => "La requête pour laquelle vous avez voté ",
    'filled_this' => "S'il vous plaît n'oubliez pas de laisser un merci à qui de droit.",
    //TERMS addbby yoooov
    'req_add_del' => "Supprimer",
    'req_add_err2' => "Désolé, réservé aux power users et uploadeurs!",
    'req_add_err3' => "USER ERROR",
    'req_add_err4' => "Mauvaise id / Mauvais vote",
    'req_add_err5' => "Vous avez déjà voté pour cette requête.",
    'req_add_err6' => "Désolé, aucune requête actuellement!",
    'req_add_err8' => "Permission refusée.",
    'req_add_err11' => "Aucune requête avec cette ID.",
    'req_add_err12' => "Le corps du commentaire ne peut être vide!",
    'req_add_req' => "Ajouter une requête",
    'req_add_new' => "Nouvelle Requête",
    'req_add_comm' => "Comm",
    'req_add_adr' => "Requête Ajoutée!",
    'req_add_delr' => "Requête Supprimée!",
    'req_add_warn1' => "Vérification de principe...",
    'req_add_warn2' => 'Etes-vous sûr de vouloir supprimer la requête "',
    'req_add_warn3' => '"? Si vous cliquez',
    'req_add_warn4' => "ICI",
    'req_det_votadd' => "Vote ajouté",
    'req_det_comdel' => "Commentaire supprimé",
    'req_det_voty' => "Votez OUI!",
    'req_det_votn' => "Votez NON!",
    'req_det_votu' => " Votre vote : ",
    'req_det_votadd' => "Vote ajouté",
    'req_det_phr1' => " ~ vous serez notifié lorsque cette requête sera remplie.",
    'req_det_phr2' => " ~ oh, vous faîtes le le rabat-joie ;-)",
    'req_add_att1' => "Avant de faire une Requête, ",
    'req_add_att2' => "Cherchez",
    'req_add_att3' => " pour être sûr qu'elle n'a pas déjà été faite, offerte, ou uploadée!",
    'req_add_att4' => "Soyez sûr d'avoir compléter tous les champs!",
    'req_det_link' => "Lien",
    'req_det_clkvw' => "Oui, cliquez pour voir le Torrent!",
    'req_det_repo' => "Signaler",
    'req_det_repthis' => "Signaler!",
    'req_det_brk' => "Pour avoir enfreint les ",
    'req_det_yes' => "Oui :",
    'req_det_yes1' => "Oui",
    'req_det_no' => "Non :",
    'req_det_no1' => "Non",
    'req_det_cofor' => "Commentaires pour",
    'req_det_adco' => 'Ajouter un commentaire à "',
    'req_det_edco' => 'Editer le commentaire de "',
    'req_det_comnt' => "Commentaire:",
    'req_det_prvw' => "Prévisualiser",
    'req_det_sbmt' => "Soumettre",
    'req_det_edit' => "Editer",
    'req_det_save' => "Sauvegarder",
    'req_det_most' => "Les récents commentaires, dans l'ordre inverse.",
    'req_fil_chk' => " Cocher cette case pour reposter cette requête. [ supprime Remplie par ]  ",
    'req_mouse_go' => "Allez à la page du Torrent!!",
    'req_slct_req' => "Selectionnez la catégorie de la Requête",   
    'req_com_del1' => 'Etes-vous sûr de vouloir supprimer le commentaire? Si oui cliquez '
);
?>