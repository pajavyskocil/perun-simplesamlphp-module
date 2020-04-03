<?php

/*
 *Example of structure:
   $config = [
       'attributeInternalName (For example: facilityPerunAttr_CheckGroupMembership)' => [
           'rpc' => 'perun attribute name in RPC',
           'ldap' => 'perun attribute name in LDAP',
           'type' => 'attribute type. One of [string/integer/bool/map]'
       ],
    ];
 */

$config = [

    /*
     * FACILITY ATTRIBUTES
     */
    'perunFacilityAttr_checkGroupMembership' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:checkGroupMembership',
        'ldap' => 'checkGroupMembership',
        'type' => 'bool'
    ],
    'perunFacilityAttr_voShortNames' => [
        'rpc' => 'urn:perun:facility:attribute-def:virt:voShortNames',
        'ldap' => 'voShortNames',
        'type' => 'map'
    ],
    'perunFacilityAttr_dynamicRegistration' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:dynamicRegistration',
        'ldap' => 'dynamicRegistration',
        'type' => 'bool'
    ],
    'perunFacilityAttr_registrationURL' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:registrationURL',
        'ldap' => 'registrationURL',
        'type' => 'string'
    ],
    'perunFacilityAttr_wayfFilter' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:wayfFilter',
        'ldap' => 'wayfFilter',
        'type' => 'string'
    ],
    'perunFacilityAttr_wayfEFilter' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:wayfEFilter',
        'ldap' => 'wayfEFilter',
        'type' => 'string'
    ],
    'perunFacilityAttr_requiredAups' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:reqAups',
        'ldap' => 'requiredAups',
        'type' => 'map'
    ],
    'perunFacilityAttr_capabilities' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:capabilities',
        'ldap' => 'capabilities',
        'type' => 'map'
    ],
    'perunFacilityAttr_allowRegistration' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:allowRegistration',
        'ldap' => 'allowRegistration',
        'type' => 'bool'
    ],

    /*
     * USER IDENTIFIERS
     */
    'perunUserAttr_login-namespace:einfraid-persistent-shadow' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:login-namespace:einfraid-persistent-shadow',
        'ldap' => 'login;x-ns-einfra-persistent-shadow',
        'type' => 'bool'
    ],
    'perunUserAttr_login-namespace:einfra' => [
        'rpc' => 'urn:perun:user:attribute-def:def:login-namespace:einfra',
        'ldap' => 'login;x-ns-einfra',
        'type' => 'bool'
    ],
    'perunUserAttr_login-namespace:elixir-persistent-shadow' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:login-namespace:elixir-persistent-shadow',
        'ldap' => 'login;x-ns-elixir-persistent-shadow',
        'type' => 'bool'
    ],
    'perunUserAttr_login-namespace:elixir' => [
        'rpc' => 'urn:perun:user:attribute-def:def:login-namespace:elixir',
        'ldap' => 'login;x-ns-elixir',
        'type' => 'bool'
    ],
    'perunUserAttr_login-namespace:bbmri-persistent-shadow' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:login-namespace:bbmri-persistent-shadow',
        'ldap' => 'login;x-ns-bbmri-persistent-shadow',
        'type' => 'bool'
    ],
    'perunUserAttr_login-namespace:bbmri' => [
        'rpc' => 'urn:perun:user:attribute-def:def:login-namespace:bbmri',
        'ldap' => 'login;x-ns-bbmri',
        'type' => 'bool'
    ],

    /*
     * USER ATTRIBUTES
     */
    'perunUserAttr_id' => [
        'rpc' => 'urn:perun:user:attribute-def:core:id',
        'ldap' => 'perunUserId',
        'type' => 'integer'
    ],
    'perunUserAttr_firstName' => [
        'rpc' => 'urn:perun:user:attribute-def:core:firstName',
        'ldap' => 'firstName',
        'type' => 'string'
    ],
    'perunUserAttr_middleName' => [
        'rpc' => 'urn:perun:user:attribute-def:core:middleName',
        'ldap' => 'middleName',
        'type' => 'string'
    ],
    'perunUserAttr_lastName' => [
        'rpc' => 'urn:perun:user:attribute-def:core:lastName',
        'ldap' => 'lastName',
        'type' => 'string'
    ],
    'perunUserAttr_cn' => [
        'rpc' => 'urn:perun:ues:attribute-def:def:cn',
        'ldap' => 'cn',
        'type' => 'string'
    ],
    'perunUserAttr_displayName' => [
        'rpc' => 'urn:perun:ues:attribute-def:def:displayName',
        'ldap' => 'displayName',
        'type' => 'string'
    ],
    'perunUserAttr_givenName' => [
        'rpc' => 'urn:perun:ues:attribute-def:def:givenName',
        'ldap' => 'givenName',
        'type' => 'string'
    ],
    'perunUserAttr_sn' => [
        'rpc' => 'urn:perun:ues:attribute-def:def:sn',
        'ldap' => 'sn',
        'type' => 'String'
    ],
    'perunUserAttr_mail' => [
        'rpc' => 'urn:perun:ues:attribute-def:def:mail',
        'ldap' => 'mail',
        'type' => 'string'
    ],
    'perunUserAttr_timezone' => [
        'rpc' => 'urn:perun:user:attribute-def:def:timezone',
        'ldap' => 'timezone',
        'type' => 'string'
    ],
    'perunUserAttr_preferredLanguage' => [
        'rpc' => 'urn:perun:user:attribute-def:def:preferredLanguage',
        'ldap' => 'preferredLanguage',
        'type' => 'string'
    ],
    'perunUserAttr_preferredMail' => [
        'rpc' => 'urn:perun:user:attribute-def:def:preferredMail',
        'ldap' => 'preferredMail',
        'type' => 'string'
    ],
    'perunUserAttr_phone' => [
        'rpc' => 'urn:perun:user:attribute-def:def:phone',
        'ldap' => 'phone',
        'type' => 'string'
    ],
    'perunUserAttr_address' => [
        'rpc' => 'urn:perun:user:attribute-def:def:address',
        'ldap' => 'address',
        'type' => 'string'
    ],
    'perunUserAttr_aups' => [
        'rpc' => 'urn:perun:user:attribute-def:def:aups',
        'ldap' => 'aups',
        'type' => 'map'
    ],
    'perunUserAttr_groupNames' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:groupNames',
        'ldap' => 'groupNames',
        'type' => 'map'
    ],
    'perunUserAttr_eduPersonEntitlement' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:eduPersonEntitlement',
        'ldap' => 'eduPersonEntitlement',
        'type' => 'map'
    ],
    'perunUserAttr_bonaFideStatus' => [
        'rpc' => 'urn:perun:user:attribute-def:def:bonaFideStatus',
        'ldap' => 'bonaFideStatus',
        'type' => 'map'
    ],
    'perunUserAttr_eduPersonScopedAffiliations' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:eduPersonScopedAffiliations',
        'ldap' => 'eduPersonScopedAffiliations',
        'type' => 'map'
    ],
    'perunUserAttr_affiliation' => [
        'rpc' => 'urn:perun:ues:attribute-def:def:affiliation',
        'ldap' => '',
        'type' => 'string'
    ],
    'perunUserAttr_isCesnetEligibleLastSeen' => [
        'rpc' => 'urn:perun:user:attribute-def:def:isCesnetEligibleLastSeen',
        'ldap' => 'isCesnetEligibleLastSeen',
        'type' => 'string'
    ],
    'perunUserAttr_eduPersonPrincipalNames' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:eduPersonPrincipalNames',
        'ldap' => 'eduPersonPrincipalNames',
        'type' => 'map'
    ],
    'perunUserAttr_o' => [
        'rpc' => 'urn:perun:ues:attribute-def:def:o',
        'ldap' => 'o',
        'type' => 'string'
    ],
    'perunUserAttr_loa' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:loa',
        'ldap' => 'loa',
        'type' => 'integer'
    ],

    /*ELIXIR SPECIFIC ATTRS*/
    'perunUserAttr_mobile' => [
        'rpc' => 'urn:perun:user:attribute-def:def:phone',
        'ldap' => 'phone',
        'type' => 'string'
    ],
    'perunUserAttr_schacHomeOrganization' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:schacHomeOrganizations',
        'ldap' => 'schacHomeOrganizations',
        'type' => 'map'
    ],
    'perunUserAttr_country' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:institutionsCountries',
        'ldap' => 'institutionsCountries',
        'type' => 'map'
    ],

    /*
     * GROUP ATTRIBUTES
     */

    'perunGroupAttr_groupAffiliations' => [
        'rpc' => 'urn:perun:group:attribute-def:def:groupAffiliations',
        'ldap' => 'groupAffiliations',
        'type' => 'map'
    ],

    /*
     * VO ATTRIBUTES
     */

    'perunVoAttr_aup' => [
        'rpc' => 'urn:perun:vo:attribute-def:def:aup',
        'ldap' => 'aup',
        'type' => 'string'
    ],

    /*
     * RESOURCE ATTRIBUTES
     */

    'perunResourceAttr_resourceCapabilities' => [
        'rpc' => 'urn:perun:resource:attribute-def:def:capabilities',
        'ldap' => 'capabilities',
        'type' => 'map'
    ]
];
