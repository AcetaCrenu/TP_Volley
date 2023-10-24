<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include_once '../racine.php';
include_once RACINE . '/service/EtudiantService.php';
extract($_GET);
$es = new EtudiantService();
$es->delete($es->findById($id));
header("location:../index.php");

