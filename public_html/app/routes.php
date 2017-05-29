<?php

$app->get('/', 'HomeController:index')->setName('home');
$app->get('/Sobre', 'HomeController:getSobre')->setName('sobre');
$app->post('/Novo', 'HomeController:postNovo')->setName('novo');
$app->get('/Pesquisar', 'HomeController:getPesquisar')->setName('pesquisar');
$app->get('/Problema/{id}', 'HomeController:getProblema')->setName('problema');
$app->get('/Problemas/Tag/{id}', 'HomeController:getProblemasTag')->setName('tag');
$app->get('/Problemas/Tabela/{id}', 'HomeController:getProblemasTabela')->setName('tabela');
$app->get('/Problemas/Categoria/{id}', 'HomeController:getProblemasCategoria')->setName('categoria');
$app->get('/Alterar/{id}', 'HomeController:getAlterar')->setName('alterar');
$app->post('/Alterar/{id}', 'HomeController:postAlterar');
$app->get('/Excluir/{id}', 'HomeController:getExcluir')->setName('excluir');
$app->post('/Excluir/{id}', 'HomeController:postExcluir');