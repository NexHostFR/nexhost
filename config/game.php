<?php

return array(
    "minecraft" => [
        "FreeCloud" => [
            "type"=> "free",
            "memory" => "4096",
            "swap" => "0",
            "disk" => "32768",
            "cpu" => "100",
            "databases" => "1",
            "backups" => "50",
            "egg" => "1",
            "price" => "000",
            "name" => "CreeperCloud",
            "startup" => "java -Xms128M -XX:MaxRAMPercentage=95.0 -jar {{SERVER_JARFILE}}",
            "docker_image" => "ghcr.io/pterodactyl/yolks:java_21"
        ],
        "CreeperCloud" => [
            "memory" => "4096",
            "swap" => "0",
            "disk" => "32768",
            "cpu" => "100",
            "databases" => "1",
            "backups" => "50",
            "egg" => "1",
            "price" => "299",
            "name" => "CreeperCloud",
            "startup" => "java -Xms128M -XX:MaxRAMPercentage=95.0 -jar {{SERVER_JARFILE}}",
            "docker_image" => "ghcr.io/pterodactyl/yolks:java_21"
        ],
        "ZombieCloud" => [
            "memory" => "6144",
            "swap" => "0",
            "disk" => "65536",
            "cpu" => "200",
            "databases" => "3",
            "backups" => "50",
            "egg" => "1",
            "price" => "499",
            "name" => "ZombieCloud",
            "startup" => "java -Xms128M -XX:MaxRAMPercentage=95.0 -jar {{SERVER_JARFILE}}",
            "docker_image" => "ghcr.io/pterodactyl/yolks:java_21"
        ],

            "BlazeCloud" => [
            "memory" => "12288",
            "swap" => "0",
            "disk" => "92160",
            "cpu" => "300",
            "databases" => "5",
            "backups" => "60",
            "egg" => "1",
            "price" => "999",
            "name" => "BlazeCloud",
            "startup" => "java -Xms128M -XX:MaxRAMPercentage=95.0 -jar {{SERVER_JARFILE}}",
            "docker_image" => "ghcr.io/pterodactyl/yolks:java_21"
        ],

           "SpiderCloud" => [
            "memory" => "24576",
            "swap" => "0",
            "disk" => "131072",
            "cpu" => "400",
            "databases" => "5",
            "backups" => "60",
            "egg" => "1",
            "price" => "1999",
            "name" => "SpiderCloud",
            "startup" => "java -Xms128M -XX:MaxRAMPercentage=95.0 -jar {{SERVER_JARFILE}}",
            "docker_image" => "ghcr.io/pterodactyl/yolks:java_21"
        ],

        "EnderCloud" => [
            "memory" => "32768",
            "swap" => "0",
            "disk" => "194560",
            "cpu" => "800",
            "databases" => "20",
            "backups" => "100",
            "egg" => "1",
            "price" => "2490",
            "name" => "EnderCloud",
            "startup" => "java -Xms128M -XX:MaxRAMPercentage=95.0 -jar {{SERVER_JARFILE}}",
            "docker_image" => "ghcr.io/pterodactyl/yolks:java_21"
        ]
    ],
    "fivem" => [
        "FiveFree" => [
            "type" => "essaie",
            "memory" => "2048",
            "swap" => "0",
            "disk" => "20480",
            "cpu" => "100",
            "databases" => "1",
            "backups" => "20",
            "egg" => "15",
            "price" => "000",
            "name" => "FiveFree",
            "startup" => '$(pwd)/alpine/opt/cfx-server/ld-musl-x86_64.so.1 --library-path "$(pwd)/alpine/usr/lib/v8/:$(pwd)/alpine/lib/:$(pwd)/alpine/usr/lib/" -- $(pwd)/alpine/opt/cfx-server/FXServer +set citizen_dir $(pwd)/alpine/opt/cfx-server/citizen/ +set sv_licenseKey ${FIVEM_LICENSE} +set steam_webApiKey ${STEAM_WEBAPIKEY} +set sv_maxplayers ${MAX_PLAYERS} +set serverProfile default +set txAdminPort ${TXADMIN_PORT} $( [ "$TXADMIN_ENABLE" == "1" ] || printf %s "+exec server.cfg" )',
            "docker_image" => "ghcr.io/ptero-eggs/yolks:debian"
        ],
        "FiveDev" => [
            "memory" => "2048",
            "swap" => "0",
            "disk" => "20480",
            "cpu" => "100",
            "databases" => "1",
            "backups" => "20",
            "egg" => "15",
            "price" => "090",
            "name" => "fiveDev",
            "startup" => '$(pwd)/alpine/opt/cfx-server/ld-musl-x86_64.so.1 --library-path "$(pwd)/alpine/usr/lib/v8/:$(pwd)/alpine/lib/:$(pwd)/alpine/usr/lib/" -- $(pwd)/alpine/opt/cfx-server/FXServer +set citizen_dir $(pwd)/alpine/opt/cfx-server/citizen/ +set sv_licenseKey ${FIVEM_LICENSE} +set steam_webApiKey ${STEAM_WEBAPIKEY} +set sv_maxplayers ${MAX_PLAYERS} +set serverProfile default +set txAdminPort ${TXADMIN_PORT} $( [ "$TXADMIN_ENABLE" == "1" ] || printf %s "+exec server.cfg" )',
            "docker_image" => "ghcr.io/ptero-eggs/yolks:debian"
        ],

        "FiveSmart" => [
            "memory" => "5120",
            "swap" => "0",
            "disk" => "66560",
            "cpu" => "100",
            "databases" => "4",
            "backups" => "60",
            "egg" => "15",
            "price" => "199",
            "name" => "fiveSmart",
            "startup" => '$(pwd)/alpine/opt/cfx-server/ld-musl-x86_64.so.1 --library-path "$(pwd)/alpine/usr/lib/v8/:$(pwd)/alpine/lib/:$(pwd)/alpine/usr/lib/" -- $(pwd)/alpine/opt/cfx-server/FXServer +set citizen_dir $(pwd)/alpine/opt/cfx-server/citizen/ +set sv_licenseKey ${FIVEM_LICENSE} +set steam_webApiKey ${STEAM_WEBAPIKEY} +set sv_maxplayers ${MAX_PLAYERS} +set serverProfile default +set txAdminPort ${TXADMIN_PORT} $( [ "$TXADMIN_ENABLE" == "1" ] || printf %s "+exec server.cfg" )',
            "docker_image" => "ghcr.io/ptero-eggs/yolks:debian"
        ],

        "FivePlus" => [
            "memory" => "12288",
            "swap" => "0",
            "disk" => "92160",
            "cpu" => "100",
            "databases" => "5",
            "backups" => "90",
            "egg" => "15",
            "price" => "399",
            "name" => "FivePlus",
            "startup" => '$(pwd)/alpine/opt/cfx-server/ld-musl-x86_64.so.1 --library-path "$(pwd)/alpine/usr/lib/v8/:$(pwd)/alpine/lib/:$(pwd)/alpine/usr/lib/" -- $(pwd)/alpine/opt/cfx-server/FXServer +set citizen_dir $(pwd)/alpine/opt/cfx-server/citizen/ +set sv_licenseKey ${FIVEM_LICENSE} +set steam_webApiKey ${STEAM_WEBAPIKEY} +set sv_maxplayers ${MAX_PLAYERS} +set serverProfile default +set txAdminPort ${TXADMIN_PORT} $( [ "$TXADMIN_ENABLE" == "1" ] || printf %s "+exec server.cfg" )',
            "docker_image" => "ghcr.io/ptero-eggs/yolks:debian"
        ],

        "FivePro" => [
            "memory" => "24576",
            "swap" => "0",
            "disk" => "133120",
            "cpu" => "100",
            "databases" => "200",
            "backups" => "50",
            "egg" => "15",
            "price" => "1999",
            "name" => "FivePro",
            "startup" => '$(pwd)/alpine/opt/cfx-server/ld-musl-x86_64.so.1 --library-path "$(pwd)/alpine/usr/lib/v8/:$(pwd)/alpine/lib/:$(pwd)/alpine/usr/lib/" -- $(pwd)/alpine/opt/cfx-server/FXServer +set citizen_dir $(pwd)/alpine/opt/cfx-server/citizen/ +set sv_licenseKey ${FIVEM_LICENSE} +set steam_webApiKey ${STEAM_WEBAPIKEY} +set sv_maxplayers ${MAX_PLAYERS} +set serverProfile default +set txAdminPort ${TXADMIN_PORT} $( [ "$TXADMIN_ENABLE" == "1" ] || printf %s "+exec server.cfg" )',
            "docker_image" => "ghcr.io/ptero-eggs/yolks:debian"
        ],
    ]
);
