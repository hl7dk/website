# DK Related Person Relationship Codes - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Related Person Relationship Codes**

## CodeSystem: DK Related Person Relationship Codes 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/CodeSystem/dk-relatedperson-relationshipcodes | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkRelatedPersonRelationshipCodes |

 
DK Related Person Relationship Codes 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RelatedPersonRelationshipTypes](ValueSet-dk-core-RelatedPersonRelationshipTypes.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "dk-relatedperson-relationshipcodes",
  "url" : "http://hl7.dk/fhir/core/CodeSystem/dk-relatedperson-relationshipcodes",
  "version" : "3.5.0",
  "name" : "DkRelatedPersonRelationshipCodes",
  "title" : "DK Related Person Relationship Codes",
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
  "description" : "DK Related Person Relationship Codes",
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
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "PARAUTH",
      "display" : "Parental authority",
      "definition" : "The player of the role holds parental authority over the scoping person.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Forældremyndighedsindehaver"
        }
      ]
    },
    {
      "code" : "PRICARE",
      "display" : "Primary caretaker",
      "definition" : "The player of the role is the primary caretaker of the scoping person.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Primær omsorgsperson"
        }
      ]
    },
    {
      "code" : "PROCON",
      "display" : "Professional contact",
      "definition" : "A professional acting as a contact of the scoping person.",
      "designation" : [
        {
          "language" : "da",
          "value" : "Professionel kontakt"
        }
      ]
    }
  ]
}

```
