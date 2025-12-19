# DK Consent State - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Consent State**

## CodeSystem: DK Consent State 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/CodeSystem/consent-state-codes-dk-supplement | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:ConsentState |

 
Indicates the state of the consent 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "consent-state-codes-dk-supplement",
  "url" : "http://hl7.dk/fhir/core/CodeSystem/consent-state-codes-dk-supplement",
  "version" : "3.5.0",
  "name" : "ConsentState",
  "title" : "DK Consent State",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-19T17:27:08+01:00",
  "publisher" : "HL7 Denmark",
  "contact" : [
    {
      "name" : "HL7 Denmark",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://www.hl7.dk"
        },
        {
          "system" : "email",
          "value" : "dk-affiliate@hl7.dk"
        }
      ]
    }
  ],
  "description" : "Indicates the state of the consent",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "content" : "supplement",
  "supplements" : "http://hl7.org/fhir/consent-state-codes",
  "concept" : [
    {
      "code" : "draft",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/554471000005108",
            "code" : "900000000000013009"
          },
          "value" : "Under udarbejdelse"
        }
      ]
    },
    {
      "code" : "proposed",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/554471000005108",
            "code" : "900000000000013009"
          },
          "value" : "Forslag"
        }
      ]
    },
    {
      "code" : "active",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/554471000005108",
            "code" : "900000000000013009"
          },
          "value" : "Aktiv"
        }
      ]
    },
    {
      "code" : "rejected",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/554471000005108",
            "code" : "900000000000013009"
          },
          "value" : "Afvist"
        }
      ]
    },
    {
      "code" : "inactive",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/554471000005108",
            "code" : "900000000000013009"
          },
          "value" : "Inaktiv"
        }
      ]
    },
    {
      "code" : "entered-in-error",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/554471000005108",
            "code" : "900000000000013009"
          },
          "value" : "Fejlindtastning"
        }
      ]
    }
  ]
}

```
