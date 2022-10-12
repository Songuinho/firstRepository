<?php


function userfulName(){
    return auth()->user()->prenom." ".auth()->user()->nom;
}