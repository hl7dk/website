# cpr - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **cpr**

## NamingSystem: cpr 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/NamingSystem/cpr | *Version*:3.5.0 |
| Active as of 1968-04-02 | *Computable Name*:DK Central Person Registry (CPR) |

 
The Danish civil registration system ("CPR") encompasses basic personal data about anyone with a civil registration number. A civil registration number shall be allocated to anyone who: 1) is registered in the national register in Denmark on the grounds of birth or relocation from abroad; 2) is included under Arbejdsmarkedets TillægsPension (ATP); 3) according to the tax authorities, is required to have a civil registration number for the purpose of tax processing in Denmark. 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "cpr",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://hl7.dk/fhir/core/NamingSystem/cpr"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "3.5.0"
    }
  ],
  "name" : "DK Central Person Registry (CPR)",
  "status" : "active",
  "kind" : "identifier",
  "date" : "1968-04-02",
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
  "responsible" : "CPR-kontoret, Indenrigs- og Sundhedsministeriets departement",
  "description" : "The Danish civil registration system (\"CPR\") encompasses basic personal data about anyone with a civil registration number. A civil registration number shall be allocated to anyone who: 1) is registered in the national register in Denmark on the grounds of birth or relocation from abroad; 2) is included under Arbejdsmarkedets TillægsPension (ATP); 3) according to the tax authorities, is required to have a civil registration number for the purpose of tax processing in Denmark.",
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
  "uniqueId" : [
    {
      "type" : "oid",
      "value" : "1.2.208.176.1.2"
    },
    {
      "type" : "uri",
      "value" : "http://www.cpr.dk/cpr-systemet"
    }
  ]
}

```
