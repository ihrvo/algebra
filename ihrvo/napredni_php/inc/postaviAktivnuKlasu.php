<?php
function postaviAktivnuKlasu($link)
{
    return basename($_SERVER['REQUEST_URI']) === $link ? 'class="nav-link text-white link-primary active" aria-current="page"' : 'class="nav-link text-white link-primary"';
}
?>