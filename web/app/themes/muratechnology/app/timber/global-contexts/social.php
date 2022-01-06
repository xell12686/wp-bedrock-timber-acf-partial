<?php

return function ($context) {
    $context['social_accounts'] = get_field('social_accounts', 'option');

    return $context;
};
