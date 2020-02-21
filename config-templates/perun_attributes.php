<?php

$config = [

    /*
     * FACILITY ATTRIBUTES
     */

    'facilityCheckGroupMembershipAttr' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:checkGroupMembership',
        'ldap' => 'checkGroupMembership',
        'type' => 'bool'
    ],
    'facilityVoShortNamesAttr' => [
        'rpc' => 'urn:perun:facility:attribute-def:virt:voShortNames',
        'ldap' => 'voShortNames',
        'type' => 'map'
    ],
    'facilityDynamicRegistrationAttr' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:dynamicRegistration',
        'ldap' => 'dynamicRegistration',
        'type' => 'bool'
    ],
    'facilityOidcClientIdAttr' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:OIDCClientID',
        'ldap' => 'OIDCClientID',
        'type' => 'string'
    ],
    'facilityRegisterUrlAttr' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:registerUrl',
        'ldap' => 'registrationURL',
        'type' => 'string'
    ],
    'facilityAllowRegistrationToGroupsAttr' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:allowRegistration',
        'ldap' => 'allowRegistration',
        'type' => 'bool'
    ],
    'facilityAllowRegistrationAttr' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:allowRegistration',
        'ldap' => 'allowRegistration',
        'type' => 'bool'
    ],
    'facilityRegistrationUrlAttr' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:registrationURL',
        'ldap' => 'registrationURL',
        'type' => 'string'
    ],
    'facilityWayfFilterAttr' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:wayfFilter',
        'ldap' => 'wayfFilter',
        'type' => 'string'
    ],
    'facilityWayfEFilterAttr' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:wayfEFilter',
        'ldap' => 'wayfEFilter',
        'type' => 'string'
    ],
    'facilityReqAupsAttr' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:reqAups',
        'ldap' => 'requiredAups',
        'type' => 'map'
    ],
    'facilityCapabilitiesAttr' => [
        'rpc' => 'urn:perun:facility:attribute-def:def:capabilities',
        'ldap' => 'capabilities',
        'type' => 'map'
    ],

    /*
     * USER ATTRIBUTES
     */

    'userEinfraIdPersistentAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:login-namespace:einfraid-persistent',
        'ldap' => 'einfraid-persistent',
        'type' => 'bool'
    ],
    'userEinfraAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:def:login-namespace:einfra',
        'ldap' => 'einfra',
        'type' => 'bool'
    ],
    'userElixirPersistentAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:login-namespace:elixir-persistent',
        'ldap' => 'elixir-persistent',
        'type' => 'bool'
    ],
    'userElixirAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:def:login-namespace:elixir',
        'ldap' => 'elixir',
        'type' => 'bool'
    ],
    'userBbmriPersistentAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:login-namespace:bbmri-persistent',
        'ldap' => 'bbmri-persistent',
        'type' => 'bool'
    ],
    'userBbmriAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:def:login-namespace:bbmri',
        'ldap' => 'bbmri',
        'type' => 'bool'
    ],
    'userIdAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:core:id',
        'ldap' => 'perunUserId',
        'type' => 'integer'
    ],
    'userFirstNameAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:core:firstName',
        'ldap' => 'firstName',
        'type' => 'string'
    ],
    'userMiddleNameAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:core:middleName',
        'ldap' => 'middleName',
        'type' => 'string'
    ],
    'userLastNameAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:core:lastName',
        'ldap' => 'lastName',
        'type' => 'string'
    ],
    'userCnAttr' => [
        'rpc' => 'urn:perun:ues:attribute-def:def:cn',
        'ldap' => 'cn',
        'type' => 'string'
    ],
    'userDisplayNameAttr' => [
        'rpc' => 'urn:perun:ues:attribute-def:def:displayName',
        'ldap' => 'displayName',
        'type' => 'string'
    ],
    'userMailAttr' => [
        'rpc' => 'urn:perun:ues:attribute-def:def:mail',
        'ldap' => 'mail',
        'type' => 'string'
    ],
    'userTimezoneAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:def:timezone',
        'ldap' => 'timezone',
        'type' => 'string'
    ],
    'userPreferredLanguageAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:def:preferredLanguage',
        'ldap' => 'preferredLanguage',
        'type' => 'string'
    ],
    'userPreferredMailAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:def:preferredMail',
        'ldap' => 'preferredMail',
        'type' => 'string'
    ],
    'userPhoneAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:def:phone',
        'ldap' => 'phone',
        'type' => 'string'
    ],
    'userAddressAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:def:address',
        'ldap' => 'address',
        'type' => 'string'
    ],
    'userAupsAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:def:aups',
        'ldap' => 'aups',
        'type' => 'map'
    ],
    'userGroupNamesAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:groupNames',
        'ldap' => 'groupNames',
        'type' => 'map'
    ],
    'userEduPersonEntitlementAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:eduPersonEntitlement',
        'ldap' => 'eduPersonEntitlement',
        'type' => 'map'
    ],
    'userEntitlementAttr' => [
        'rpc' => 'urn:perun:ues:attribute-def:def:entitlement',
        'ldap' => 'eduPersonEntitlement',
        'type' => 'string'
    ],
    'userBonaFideStatusAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:def:bonaFideStatus',
        'ldap' => 'bonaFideStatus',
        'type' => 'map'
    ],
    'userPersonScopedAffiliationsAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:eduPersonScopedAffiliations',
        'ldap' => 'eduPersonScopedAffiliations',
        'type' => 'map'
    ],
    'userPersonAffiliationAttr' => [
        'rpc' => 'urn:perun:ues:attribute-def:def:affiliation',
        'ldap' => '',
        'type' => 'string'
    ],
    'userIsCesnetEligibleLastSeenAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:def:isCesnetEligibleLastSeen',
        'ldap' => 'isCesnetEligibleLastSeen',
        'type' => 'string'
    ],
    'userEduPersonPrincipleNamesAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:eduPersonPrincipalNames',
        'ldap' => 'eduPersonPrincipalNames',
        'type' => 'map'
    ],
    'eduPersonPrincipalNameAttr' => [
        'rpc' => 'TODO',
        'ldap' => 'login;x-ns-bbmri',
        'type' => 'string'
    ],
    'eduPersonUniqueIdAttr' => [
        'rpc' => 'TODO',
        'ldap' => 'login;x-ns-bbmri-persistent-shadow',
        'type' => 'string'
    ],
    'userOrganizationAttr' => [
        'rpc' => 'urn:perun:ues:attribute-def:def:o',
        'ldap' => 'o',
        'type' => 'string'
    ],
    'userGivenNameAttr' => [
        'rpc' => 'urn:perun:ues:attribute-def:def:givenName',
        'ldap' => 'givenName',
        'type' => 'string'
    ],
    'userSnAttr' => [
        'rpc' => 'urn:perun:ues:attribute-def:def:sn',
        'ldap' => 'sn',
        'type' => 'String'
    ],
    'userLoaAttr' => [
        'rpc' => 'urn:perun:user:attribute-def:virt:loa',
        'ldap' => 'loa',
        'type' => 'integer'
    ],

    /*
     * GROUP ATTRIBUTES
     */

    'groupGroupAffiliationsAttr' => [
        'rpc' => 'urn:perun:group:attribute-def:def:groupAffiliations',
        'ldap' => 'groupAffiliations',
        'type' => 'map'
    ],

    /*
     * VO ATTRIBUTES
     */

    'voAupAttr' => [
        'rpc' => 'urn:perun:vo:attribute-def:def:aup',
        'ldap' => 'aup',
        'type' => 'string'
    ],

    /*
     * RESOURCE ATTRIBUTES
     */

    'resourceCapabilitiesAttr' => [
        'rpc' => 'urn:perun:resource:attribute-def:def:capabilities',
        'ldap' => 'capabilities',
        'type' => 'map'
    ]
];
