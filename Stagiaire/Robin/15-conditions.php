<?php
$note = mt_rand(0, 10);

if ($note >= 0 && $note <= 3) {
    echo "{$note} : Nul, étudie la prochaine fois";
} elseif ($note >= 4 && $note <= 5) {
    echo "{$note} : Peut mieux faire";
  } elseif ($note >= 6 && $note <= 7) {
    echo "{$note} : Bien";
  }
elseif ($note >= 8 && $note <= 10) {
    echo "{$note} : Très bien";
}