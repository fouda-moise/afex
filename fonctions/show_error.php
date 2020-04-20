<?php
/**
* Affiche les erreurs rencontrées
* @param $key 
* @return String
*/
function show_error($key)
{
    global $errors; //Récupère la variable $errors dans la portée globale
    return !empty($errors[$key]) ? '<span class="error">'. $errors[$key] .'</span>' : ''; 
}