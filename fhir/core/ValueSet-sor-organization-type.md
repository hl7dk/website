# DK SOR Organization Type - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK SOR Organization Type**

## ValueSet: DK SOR Organization Type 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/ValueSet/sor-organization-type | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:SorOrganizationType |
| **Copyright/Legal**: This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement | |

 
Value set used for indicating the organization type for organizations from SOR 

 **References** 

* [Danish Core Minimal DocumentReference Profile](StructureDefinition-dk-core-minimaldocumentreference.md)
* [Danish Core Organization Profile](StructureDefinition-dk-core-organization.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "sor-organization-type",
  "url" : "http://hl7.dk/fhir/core/ValueSet/sor-organization-type",
  "version" : "3.5.0",
  "name" : "SorOrganizationType",
  "title" : "DK SOR Organization Type",
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
  "description" : "Value set used for indicating the organization type for organizations from SOR",
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
  "copyright" : "This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement",
  "compose" : {
    "include" : [
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "concept" : [
          {
            "code" : "554221000005108"
          },
          {
            "code" : "546821000005103"
          },
          {
            "code" : "547011000005103"
          },
          {
            "code" : "546811000005109"
          },
          {
            "code" : "550621000005101"
          },
          {
            "code" : "550631000005103"
          },
          {
            "code" : "550641000005106"
          },
          {
            "code" : "550651000005108"
          },
          {
            "code" : "550661000005105"
          },
          {
            "code" : "554211000005102"
          },
          {
            "code" : "550711000005101"
          },
          {
            "code" : "550671000005100"
          },
          {
            "code" : "554061000005105"
          },
          {
            "code" : "554041000005106"
          },
          {
            "code" : "554021000005101"
          },
          {
            "code" : "550681000005102"
          },
          {
            "code" : "550691000005104"
          },
          {
            "code" : "550701000005104"
          },
          {
            "code" : "554231000005106"
          },
          {
            "code" : "554051000005108"
          },
          {
            "code" : "550811000005108"
          },
          {
            "code" : "547211000005108"
          },
          {
            "code" : "550891000005100"
          },
          {
            "code" : "550881000005103"
          },
          {
            "code" : "550411000005105"
          },
          {
            "code" : "554851000005102"
          },
          {
            "code" : "550861000005106"
          },
          {
            "code" : "554881000005108"
          },
          {
            "code" : "554861000005100"
          },
          {
            "code" : "554821000005109"
          },
          {
            "code" : "554411000005101"
          },
          {
            "code" : "554871000005105"
          },
          {
            "code" : "550821000005102"
          },
          {
            "code" : "550871000005101"
          },
          {
            "code" : "554241000005103"
          },
          {
            "code" : "550841000005107"
          },
          {
            "code" : "550851000005109"
          },
          {
            "code" : "551611000005102"
          },
          {
            "code" : "554071000005100"
          },
          {
            "code" : "550831000005104"
          },
          {
            "code" : "554031000005103"
          },
          {
            "code" : "557511000005107"
          },
          {
            "code" : "557501000005109"
          },
          {
            "code" : "557531000005103"
          },
          {
            "code" : "557591000005104"
          },
          {
            "code" : "557521000005101"
          },
          {
            "code" : "557561000005105"
          },
          {
            "code" : "557541000005106"
          },
          {
            "code" : "557581000005102"
          },
          {
            "code" : "556841000005105"
          },
          {
            "code" : "557671000005101"
          },
          {
            "code" : "398070004"
          },
          {
            "code" : "394761003"
          },
          {
            "code" : "20078004"
          },
          {
            "code" : "722173008"
          },
          {
            "code" : "702871004"
          },
          {
            "code" : "276037005"
          },
          {
            "code" : "22232009"
          },
          {
            "code" : "702824005"
          },
          {
            "code" : "42665001"
          },
          {
            "code" : "264361005"
          },
          {
            "code" : "703069008"
          },
          {
            "code" : "309964003"
          },
          {
            "code" : "309904001"
          },
          {
            "code" : "309939001"
          },
          {
            "code" : "225728007"
          },
          {
            "code" : "255203001"
          },
          {
            "code" : "264372000"
          }
        ]
      }
    ]
  }
}

```
