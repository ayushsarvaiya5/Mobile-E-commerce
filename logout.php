<?php
session_start();

if (session_destroy())
{
    header("Location: Mobile_Shop.html");
}
