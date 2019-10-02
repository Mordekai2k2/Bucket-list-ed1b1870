<?php

echo 'Hoe veel activiteiten wil je toevoegen?' . PHP_EOL;
$aantal = readline();
if (is_numeric($aantal)) {
    echo "Je gaat $aantal activiteiten toevoegen!" . PHP_EOL;
    $action = array();
    for ($o = 1; $o <= $aantal; $o++) {

        array_push($action, readline("Wat wil je aan je bucketlist toevoegen?" . PHP_EOL));
    }
    echo "Op je bucketlist staan: " . PHP_EOL;
    foreach ($action as $actie1)
        echo "$actie1" . PHP_EOL;
} else {
    echo "Feck you reetkever", exit();
}

/*
                        ,/XM#MMMX;,
                      -%##########M%,
                     -@######%  $###@=
      .,--,         -H#######$   $###M:
   ,;$M###MMX;     .;##########$;HM###X=
,/@###########H=      ;################+
-+#############M/,      %##############+
%M###############=      /##############:
H################      .M#############;.
@###############M      ,@###########M:.
X################,      -$=X#######@:
/@##################%-     +######$-
.;##################X     .X#####+,
 .;H################/     -X####+.
   ,;X##############,       .MM/
      ,:+$H@M#######M#$-    .$$=
           .,-=;+$@###X:    ;/=.
                  .,/X$;   .::,
                      .,    ..                ~Randy



      db    db    db   d8b   db    db    db
      88    88    88   I8I   88    88    88
      88    88    88   I8I   88    88    88
      88    88    Y8   I8I   88    88    88
      88b  d88    `8b d8'8b d8'    88b  d88
      ~Y8888P'     `8b8' `8d8'     ~Y8888P'
*/