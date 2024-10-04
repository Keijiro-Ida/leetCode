<?php


class Solution {

    /**
     * @param String[] $emails
     * @return Integer
     */
    function numUniqueEmails($emails) {
        $uniqueEmails = [];

        foreach($emails as $email) {
            list($localName, $domainName) = explode('@', $email);

            $localName = explode('+', $localName)[0];

            $localName = str_replace('.', '', $localName);

            $resultEmail = $localName . '@' . $domainName;

            $uniqueEmails[] = $resultEmail;
        }

        return count(array_unique($uniqueEmails));
    }
}
