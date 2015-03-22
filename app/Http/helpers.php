<?php

function delete_form($routeParams, $label = 'Delete')
{

    $form = Form::open(['method' => 'DELETE', 'route' => $routeParams]);

    $form .= Form::submit($label, ['class' => 'btn btn-danger']);

    return $form .= Form::close();

}

function delete_comments_form($routeParams, $post_id, $label = 'delete comment')
{

    $form = Form::open(['method' => 'DELETE', 'route' => $routeParams]);

    $form .= Form::hidden('post_id', $post_id);

    $form .= Form::submit($label, ['class' => 'btn btn-danger btn-xs']);

    return $form .= Form::close();

}