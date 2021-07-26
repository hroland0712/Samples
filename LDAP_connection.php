<?php

    ## Auth

/*

ds => connection | a szerverhez való csatlakozás | boolean

dn => elérési útvonal 

*/

$AD_User = ''; //   Active Directory felhasználó, eléréssel   -   CN=*, DC=*
$AD_Password = ''; //   jelszó hozzá

$dn = ''; //    CN=LDAP Bind,CN=Users,DC=*,DC=*


    ## CONNNECT TO AD


$ds = ldap_connect("") //  ldaps://*IP cím:port*    -   port = 636
    or die("LDAP szerver hiba.");


    ## LDAP options


ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ds, LDAP_OPT_REFERRALS, 0);
ldap_start_tls($ds);
