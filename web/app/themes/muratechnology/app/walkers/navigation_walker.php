<?php

class NavigationWalker extends Walker_Nav_Menu
{
    public $navOptions = [
        'navItemClass' => 'navigation__nav-item',
        'navItemActiveClass' => 'navigation__nav-item--active',
        'navSubItemClass' => 'navigation-sub-navigation__nav-item',
        'navItemHasChildrenClass' => 'navigation__nav-item--has-sub-navigation',
        'navItemCallToActionClass' => 'navigation__nav-item--call-to-action',
        'navLinkClass' => 'navigation__nav-link',
        'navSubLinkClass' => 'navigation-sub-navigation__nav-link',
        'navSubClass' => 'navigation-sub-navigation',
    ];

    public function __construct($options = [])
    {
        $this->navOptions = array_merge(
            $this->navOptions,
            $options
        );
    }

    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        if (!empty($this->navOptions['navItemClass'])) {
            $class = [$this->navOptions['navItemClass']];
        } else {
            $class = [];
        }

        if ($depth > 0) {
            $class = [$this->navOptions['navSubItemClass']];
        }

        if (in_array('menu-item-has-children', $item->classes) &&
            $depth === 0
        ) {
            $class[] = $this->navOptions['navItemHasChildrenClass'];
        }

        if (in_array('current-menu-item', $item->classes) &&
            $depth === 0
        ) {
            $class[] = $this->navOptions['navItemActiveClass'];
        }

        $class = array_filter($class);

        if (!empty($class)) {
            $output .= sprintf('<li class="%s">', implode(' ', $class));
        } else {
            $output .= '<li>';
        }

        $class = $this->navOptions['navLinkClass'];

        if ($depth > 0) {
            $class = $this->navOptions['navSubLinkClass'];
        }

        $title = apply_filters(
            'navigation_walker_' . $args->menu->slug . '_link_text',
            $item->title,
            $item,
            $depth,
            $args
        );

        if (get_field('has_solution_filter', $item)) {
            $url = $item->url;

            if (get_field('business_type', $item)) {
                $url .= '?business_type=' . get_term(get_field('business_type', $item))->slug;
            } else {
                $url .= '?role=' . get_term(get_field('role', $item))->slug;
            }

            $url .= '#the-solutions';

            $item->url = $url;
        }

        if (!empty($class)) {
            $output .= sprintf(
                '<a href="%s" class="%s">%s</a>',
                $item->url,
                $class,
                $title
            );
        } else {
            $output .= sprintf(
                '<a href="%s">%s</a>',
                $item->url,
                $title
            );
        }
    }

    public function start_lvl(&$output, $depth = 0, $args = [])
    {
        if (!empty($this->navOptions['navSubClass'])) {
            $output .= '<ul class="' . $this->navOptions['navSubClass'] . '">';
        } else {
            $output .= '<ul>';
        }
    }
}
