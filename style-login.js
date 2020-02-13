/**
 * Fancifying the default WordPress login box.
 *
 * @package soupbowl-twentytwenty
 */

document.getElementById( 'user_login' ).placeholder = 'Username';
document.getElementById( 'user_pass' ).placeholder  = 'Password';

document.getElementById( 'nav' ).getElementsByTagName( 'a' )[0].innerText = 'Reset password';
