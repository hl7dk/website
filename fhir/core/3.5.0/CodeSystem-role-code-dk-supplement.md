# DK Role Code - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Role Code**

## CodeSystem: DK Role Code 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/CodeSystem/role-code-dk-supplement | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:RoleCodeDkSupplement |

 
CodeSystem supplement with danish translations for RoleCode 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "role-code-dk-supplement",
  "url" : "http://hl7.dk/fhir/core/CodeSystem/role-code-dk-supplement",
  "version" : "3.5.0",
  "name" : "RoleCodeDkSupplement",
  "title" : "DK Role Code",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-19T17:20:16+01:00",
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
  "description" : "CodeSystem supplement with danish translations for RoleCode",
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
  "supplements" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
  "concept" : [
    {
      "code" : "FAMMEMB",
      "designation" : [
        {
          "language" : "da",
          "value" : "Familiemedlem"
        }
      ]
    },
    {
      "code" : "CHILD",
      "designation" : [
        {
          "language" : "da",
          "value" : "Barn"
        }
      ]
    },
    {
      "code" : "DAUC",
      "designation" : [
        {
          "language" : "da",
          "value" : "Datter"
        }
      ]
    },
    {
      "code" : "SONC",
      "designation" : [
        {
          "language" : "da",
          "value" : "Søn"
        }
      ]
    },
    {
      "code" : "GRNDCHILD",
      "designation" : [
        {
          "language" : "da",
          "value" : "Barnebarn"
        }
      ]
    },
    {
      "code" : "CHLDINLAW",
      "designation" : [
        {
          "language" : "da",
          "value" : "Svigerbarn"
        }
      ]
    },
    {
      "code" : "PRN",
      "designation" : [
        {
          "language" : "da",
          "value" : "Forælder"
        }
      ]
    },
    {
      "code" : "FTH",
      "designation" : [
        {
          "language" : "da",
          "value" : "Far"
        }
      ]
    },
    {
      "code" : "MTH",
      "designation" : [
        {
          "language" : "da",
          "value" : "Mor"
        }
      ]
    },
    {
      "code" : "SIB",
      "designation" : [
        {
          "language" : "da",
          "value" : "Søskende"
        }
      ]
    },
    {
      "code" : "DOMPART",
      "designation" : [
        {
          "language" : "da",
          "value" : "Registreret partner"
        }
      ]
    },
    {
      "code" : "SPS",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ægtefælle"
        }
      ]
    },
    {
      "code" : "FRND",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ven (ikke-beslægtet)"
        }
      ]
    },
    {
      "code" : "NBOR",
      "designation" : [
        {
          "language" : "da",
          "value" : "Nabo"
        }
      ]
    },
    {
      "code" : "ROOM",
      "designation" : [
        {
          "language" : "da",
          "value" : "Samboende"
        }
      ]
    },
    {
      "code" : "GUARD",
      "designation" : [
        {
          "language" : "da",
          "value" : "Værge"
        }
      ]
    },
    {
      "code" : "NOK",
      "designation" : [
        {
          "language" : "da",
          "value" : "Pårørende"
        }
      ]
    },
    {
      "code" : "POWATT",
      "designation" : [
        {
          "language" : "da",
          "value" : "Fuldmagtshaver"
        }
      ]
    },
    {
      "code" : "ECON",
      "designation" : [
        {
          "language" : "da",
          "value" : "Primær kontakt"
        }
      ]
    }
  ]
}

```
