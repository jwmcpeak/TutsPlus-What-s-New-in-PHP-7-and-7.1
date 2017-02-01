<?php

function isNullOrWhitespace(?string $value) /*: ?bool */ {
    if (is_null($value)) {
        return true;
    }

    if (strlen(trim($value)) == 0) {
        return true;
    }

    return false;
}

var_dump(isNullOrWhitespace(null));