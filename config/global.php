<?php

return [
    'categorie' => [
        'hebergement' => [
            'url' => "hebergement",
            "group_list" => [
                'web' => [
                    "title" => "Hébergement Web",
                    "url" => "web",
                    "titre_head" => "L'hébergement Web qui grandit avec vous",
                    "description_head" => "Tout ce qui est nécessaire à la création de site web professionnel, sécurisé, et une performance absolue avec un support de qualité.",
                    "30j" => true,
                    "product_list" => array(
                        "decouvert" => [
                            "title" => "Découvert",
                            "price_format" => "1.99",
                            "price_cents" => "199",
                            "price_currency" => "€",
                            "period" => "mois",
                            "price_type" => "mois",
                            "description" => "Pour les petits projets",
                            "features" => [
                                "1" => "1 site web",
                                "2" => "10 Go d'espace disque",
                                "3" => "Trafic illimité",
                                "4" => "Certificat SSL gratuit",
                                "5" => "Protection Anti-DDoS",
                                "6" => "Sauvegardes manuel",
                                "7" => "Support 24/7"
                            ],
                            "url" => "/web-hosting/decouvert",
                            "highlight" => false
                        ],
                        "premium" => [
                            "title" => "Premium",
                            "price_format" => "3.99",
                            "price_cents" => "399",
                            "price_currency" => "€",
                            "period" => "mois",
                            "price_type" => "mois",
                            "description" => "Tout vos projets",
                            "features" => [
                                "1" => "5 site web",
                                "2" => "50 Go d'espace disque",
                                "3" => "Trafic illimité",
                                "4" => "Certificat SSL gratuit",
                                "5" => "Protection Anti-DDoS",
                                "6" => "Sauvegardes quotidiennes",
                                "7" => "Support 24/7"
                            ],
                            "url" => "/web-hosting/premium",
                            "url_message" => "Commandez votre hébergement Web",
                            "highlight" => true
                        ],
                    )
                ]
            ]
        ],
        "gaming" => [
            "url" => "gaming",
            "group_list" => [
                "minecraft" => [
                    "title" => "Serveur Minecraft",
                    "url" => "minecraft",
                    "titre_head" => "Serveur Minecraft",
                    "description_head" => "Serveur Minecraft de qualité, avec un support de qualité.",
                    "30j" => true,
                    "product_list" => array(
                        "start" => [
                            "title" => "Start",
                            "price_format" => "1.99",
                            "price_cents" => "199",
                            "price_currency" => "€",
                            "period" => "mois",
                            "price_type" => "mois",
                            "description" => "Pour les petits projets",
                            "features" => [
                                "1" => "CPU 2x 2.4 GHz",
                                "2" => "RAM 4GB DDR4",
                                "3" => "Stockage SSD 60GB",
                                "4" => "Base de données MySQL 1",
                                "5" => "Trafic illimité",
                                "6" => "Protection Anti-DDoS",
                                "7" => "Sauvegardes quotidiennes",
                                "8" => "Support 24/7"
                            ],
                            "url" => "/gaming-hosting/minecraft/start",
                            "url_message" => "Commandez votre serveur FiveM",
                            "highlight" => true
                        ],
                    )
                ],
                "fivem" => [
                    "title" => "Serveur FiveM",
                    "url" => "fivem",
                    "titre_head" => "Serveur FiveM",
                    "description_head" => "Serveur FiveM de qualité, avec un support de qualité.",
                    "30j" => true,
                    "product_list" => array(
                        "fivedev" => [
                            "title" => "FiveDev",
                            "price_format" => "0.90",
                            "price_cents" => "090",
                            "price_currency" => "€",
                            "period" => "mois",
                            "price_type" => "mois",
                            "description" => "Pour le dev",
                            "features" => [
                                "1" => "CPU 1x 2.4 GHz",
                                "2" => "RAM 2GB DDR4",
                                "3" => "Stockage SSD 20GB",
                                "4" => "Base de données MySQL 1",
                                "5" => "Trafic illimité",
                                "6" => "Protection Anti-DDoS",
                                "7" => "Activation instantanée",
                                "8" => "Sauvegardes quotidiennes",
                                "9" => "Support 24/7",
                                "10" => "Activation Clé Argentum"
                            ],
                            "url" => "/gaming-hosting/fivem/start",
                            "url_message" => "Commandez votre serveur FiveM",
                            "highlight" => true
                        ],
                        "fiveSmart" => [
                            "title" => "FiveSmart",
                            "price_format" => "2.80",
                            "price_cents" => "199",
                            "price_currency" => "€",
                            "period" => "mois",
                            "price_type" => "mois",
                            "description" => "Pour les petits projets",
                            "features" => [
                                "1" => "CPU 1x 2.4 GHz",
                                "2" => "RAM 5GB DDR4",
                                "3" => "Stockage SSD 65GB",
                                "4" => "Base de données MySQL 4",
                                "5" => "Trafic illimité",
                                "6" => "Protection Anti-DDoS",
                                "7" => "Activation instantanée",
                                "8" => "Sauvegardes quotidiennes",
                                "9" => "Support 24/7",
                                "10" => "Activation Clé Argentum"
                            ],
                            "url" => "/gaming-hosting/fivem/start",
                            "url_message" => "Commandez votre serveur FiveM",
                            "highlight" => true
                        ],
                        "FivePlus" => [
                            "title" => "FivePlus",
                            "price_format" => "4.80",
                            "price_cents" => "199",
                            "price_currency" => "€",
                            "period" => "mois",
                            "price_type" => "mois",
                            "description" => "Pour les petits projets",
                            "features" => [
                                "1" => "CPU 1x 2.4 GHz",
                                "2" => "RAM 12GB DDR4",
                                "3" => "Stockage SSD 90GB",
                                "4" => "Base de données MySQL 5",
                                "5" => "Trafic illimité",
                                "6" => "Protection Anti-DDoS",
                                "7" => "Activation instantanée",
                                "8" => "Sauvegardes quotidiennes",
                                "9" => "Support 24/7",
                                "10" => "Activation Clé Argentum"
                            ],
                            "url" => "/gaming-hosting/fivem/start",
                            "url_message" => "Commandez votre serveur FiveM",
                            "highlight" => true
                        ],
                        "FivePro" => [
                            "title" => "FivePro",
                            "price_format" => "19.80",
                            "price_cents" => "199",
                            "price_currency" => "€",
                            "period" => "mois",
                            "price_type" => "mois",
                            "description" => "Pour les petits projets",
                            "features" => [
                                "1" => "CPU 1x 2.4 GHz",
                                "2" => "RAM 24GB DDR4",
                                "3" => "Stockage SSD 130GB",
                                "4" => "Base de données MySQL 10",
                                "5" => "Trafic illimité",
                                "6" => "Protection Anti-DDoS",
                                "7" => "Activation instantanée",
                                "8" => "Sauvegardes quotidiennes",
                                "9" => "Support 24/7",
                                "10" => "Activation Clé Argentum"
                            ],
                            "url" => "/gaming-hosting/fivem/start",
                            "url_message" => "Commandez votre serveur FiveM",
                            "highlight" => false
                        ],
                    )
                ]
            ]
        ]
    ],
];