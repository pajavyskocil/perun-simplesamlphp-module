<?php


namespace SimpleSAML\Module\perun;


use SimpleSAML\Module\perun\model\User;

class AdapterLdapMidpoint extends AdapterLdap
{
    public function getPerunUser($idpEntityId, $uids)
    {
        # Build a LDAP query, we are searching for the user who has at least one of the uid
        $query = '';
        foreach ($uids as $uid) {
            $query .= '(uid=' . $uid . ')';
        }

        if (empty($query)) {
            return null;
        }

        $user = $this->connector->searchForEntity(
            'ou=People,' . $this->ldapBase,
            '(|' . $query . ')',
            ['employeeNumber', 'displayName', 'cn', 'givenName', 'sn', 'mail', 'uid']
        );
        if ($user === null) {
            return $user;
        }

        if (isset($user['displayName'][0])) {
            $name = $user['displayName'][0];
        } elseif (isset($user['cn'][0])) {
            $name = $user['cn'][0];
        } else {
            $name = null;
        }
        return new User($user['uid'][0], $name);
    }

    public function getUserAttributes($user, $attrNames)
    {
        $uid = $user->getId();
        $attributes = $this->connector->searchForEntity(
            'uid=' . $uid . ',ou=People,' . $this->ldapBase,
            '',
            $attrNames
        );
        // user in ldap (simplified by LdapConnector method) is actually set of its attributes
        return $attributes;
    }

    public function getUserAttributesValues($user, $attributes)
    {
        $attrTypeMap = AttributeUtils::createLdapAttrNameTypeMap($attributes);

        $perunAttrs = $this->connector->searchForEntities(
            $this->ldapBase,
            '(uid=' . $user->getId() . ')',
            array_keys($attrTypeMap)
        );

        $attributesValues = [];

        foreach (array_keys($attrTypeMap) as $attrName) {
            $attributesValues[$attrTypeMap[$attrName][self::INTERNAL_ATTR_NAME]] =
                $this->setAttrValue($attrTypeMap, $perunAttrs[0], $attrName);
        }

        return $attributesValues;
    }
}