<?php
require_once 'function.php';
if (isset($_POST['language'])) {
    $selectedLanguage = $_POST['language'];
    setCookieValue('langue',$selectedLanguage);
    echo "Langue changée avec succès : " . $selectedLanguage;
}
// CHargement translate.json
$translations = json_decode(file_get_contents('ASSET/JS/translate.json'), true);
$language = isset($_COOKIE['langue']) ? $_COOKIE['langue'] : 'fr'; 
function translate($key)
{
    global $translations, $language;
    if (isset($translations[$key][$language])) {
        return $translations[$key][$language];
    } else {
        // Si la traduction pour la langue actuelle n'est pas disponible, retourner la clé
        return $key;
    }
}



