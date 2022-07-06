<?php

# This kata may be easly solved with many methods. For me the silmplest is by using preg_replace function.
#preg_replace uses a regular expression to find all dots in a string and replace them witch a new character.
#\. is used to find all dots.


function replace_dots(string $str): string {
  return preg_replace('/\./i', '-', $str);
}


?>