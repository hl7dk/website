# Henvisning vedr. modermærkekræft - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Henvisning vedr. modermærkekræft**

## Example ServiceRequest: Henvisning vedr. modermærkekræft

**status**: Aktiv

**intent**: Proposal

**priority**: ASAP

**subject**: [Johnny Mand, DoB: 1960-01-02 ( urn:oid:1.2.208.176.1.2#0201609995)](Patient-john.md)

**authoredOn**: 2021-05-01

**requester**: [Organization Lægerne Hasseris Bymidte](Organization-LaegerneHasserisBymidte.md)

**reasonCode**: John henvises til onkologisk specialundersøgelse hurtigts muligt pga mistanke om modermærkekræft

**reasonReference**: [Condition Modermærkekræft i huden](Condition-JohnMelanoma.md)



## Resource Content

```json
{
  "resourceType" : "ServiceRequest",
  "id" : "HenvisningFraLageTilSygehus",
  "status" : "active",
  "intent" : "proposal",
  "priority" : "asap",
  "subject" : {
    "reference" : "Patient/john"
  },
  "authoredOn" : "2021-05-01",
  "requester" : {
    "reference" : "Organization/LaegerneHasserisBymidte"
  },
  "reasonCode" : [
    {
      "text" : "John henvises til onkologisk specialundersøgelse hurtigts muligt pga mistanke om modermærkekræft"
    }
  ],
  "reasonReference" : [
    {
      "reference" : "Condition/JohnMelanoma"
    }
  ]
}

```
