<?php
/**
 * Default configuration for the arctic template
 * 
 * @license:    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author:     Michael Klier <chi@chimeric.de>
 */

$conf['sidebar']                    = 'left';                       // enable/disable sidebar
$conf['pagename']                   = 'sidebar';                    // the pagename for sidebars inside namespaces
$conf['user_sidebar_namespace']     = 'user';                       // namespace to look for namespace of logged in users
$conf['group_sidebar_namespace']    = 'group';                      // namespace to look for groups-namespaces
$conf['trace']                      = 'top';                        // were to show trace (top|sidebar|both)
$conf['wiki_actionlinks']           = 'links';                      // use buttons instead of links
$conf['left_sidebar_content']       = 'index,main,user,group,namespace';  // defines the content of the left sidebar
$conf['left_sidebar_order']         = 'index,main,namespace,user,group';  // defines the order of the left sidebar content
$conf['right_sidebar_content']      = 'index,main,user,group,namespace';  // defines the content of the right sidebar
$conf['right_sidebar_order']        = 'index,main,namespace,user,group';  // defines the order of the right sidebar content
$conf['search']                     = 'left';                       // defines the position  of the search form when 2 sidebars are used

//Setup vim: ts=2 sw=2:
?>
