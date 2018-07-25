<?php

function isError($errors, $name)
{
    if ($errors->has($name)) {
        return '<span class="error-msg">' . $errors->first($name) . '</span><br>';
    }
}

function hasError($errors, $name)
{
    if ($name)
        if ($errors->has($name)) {
            return 'has-error';
        }
}