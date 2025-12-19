# sor - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **sor**

## NamingSystem: sor 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/NamingSystem/sor | *Version*:3.5.0 |
| Active as of 2021-03-14 | *Computable Name*:DK Central Healthcare Organization Registry (SOR) |

 
SOR is provided by the Danish Health Data Authority under the Danish Ministry of Health. The register holds organizations within the Danish health sector, their geographical and virtual addresses as well as codes for their identification and for EDI-communication. Danish Health Data Authority is responsible for issuing and publishing codes to identify organizations across health care sectors and related public and private services. SOR includes organizational data on hospitals, the primary care sector (physiotherapists, general practitioners, dentists etc.) and municipal health service organizations as well as non-health care organizations that need to be able to receive data from the former. 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "sor",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://hl7.dk/fhir/core/NamingSystem/sor"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "3.5.0"
    }
  ],
  "name" : "DK Central Healthcare Organization Registry (SOR)",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2021-03-14T16:56:07+01:00",
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
  "responsible" : "The Health Service's Organizational Register was developed in the National Board of Health in 2006-2007 in cooperation with the regions and MedCom",
  "type" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
        "code" : "PRN",
        "display" : "Provider number"
      }
    ]
  },
  "description" : "SOR is provided by the Danish Health Data Authority under the Danish Ministry of Health. The register holds organizations within the Danish health sector, their geographical and virtual addresses as well as codes for their identification and for EDI-communication. Danish Health Data Authority is responsible for issuing and publishing codes to identify organizations across health care sectors and related public and private services. SOR includes organizational data on hospitals, the primary care sector (physiotherapists, general practitioners, dentists etc.) and municipal health service organizations as well as non-health care organizations that need to be able to receive data from the former.",
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
      "value" : "urn:oid:1.2.208.176.1.1"
    },
    {
      "type" : "uri",
      "value" : "https://sundhedsdatastyrelsen.dk/da/registre-og-services/om-sor"
    }
  ]
}

```
