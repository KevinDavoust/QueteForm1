<?php


echo 'Merci ' . $_POST['firstname'] . ' ' . $_POST['name'] . ' de nous avoir contacté à propos de ' . $_POST['subject'] . '.

Un de nos conseillers vous contactera soit à l’adresse ' . $_POST['email'] . ' ou par téléphone au ' . $_POST['telephone'] . ' dans les plus brefs délais pour traiter votre demande : ' .

$_POST['message'];