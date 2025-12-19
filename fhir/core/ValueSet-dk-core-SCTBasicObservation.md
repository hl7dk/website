# DK Core SNOMED CT Basic Observation - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Core SNOMED CT Basic Observation**

## ValueSet: DK Core SNOMED CT Basic Observation 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/ValueSet/dk-core-SCTBasicObservation | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:SCTBasicObservation |
| **Copyright/Legal**: This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement | |

 
SNOMED CT codes for Basic Observations usable in Denmark 

 **References** 

* [Danish Core Basic Observation Profile](StructureDefinition-dk-core-basic-observation.md)

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
  "id" : "dk-core-SCTBasicObservation",
  "url" : "http://hl7.dk/fhir/core/ValueSet/dk-core-SCTBasicObservation",
  "version" : "3.5.0",
  "name" : "SCTBasicObservation",
  "title" : "DK Core SNOMED CT Basic Observation",
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
  "description" : "SNOMED CT codes for Basic Observations usable in Denmark",
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
            "code" : "446226005"
          },
          {
            "code" : "400975005"
          },
          {
            "code" : "407557002"
          },
          {
            "code" : "407555005"
          },
          {
            "code" : "271650006"
          },
          {
            "code" : "72313002"
          },
          {
            "code" : "400974009"
          },
          {
            "code" : "399304008"
          },
          {
            "code" : "407556006"
          },
          {
            "code" : "407554009"
          },
          {
            "code" : "271649006"
          },
          {
            "code" : "422119006"
          },
          {
            "code" : "429614003"
          },
          {
            "code" : "429525003"
          },
          {
            "code" : "399017001"
          },
          {
            "code" : "78564009"
          },
          {
            "code" : "444981005"
          },
          {
            "code" : "364075005"
          },
          {
            "code" : "424927000"
          },
          {
            "code" : "445541000"
          },
          {
            "code" : "425024002"
          },
          {
            "code" : "364589006"
          },
          {
            "code" : "27113001"
          },
          {
            "code" : "1153637007"
          },
          {
            "code" : "248333004"
          },
          {
            "code" : "1149101003"
          },
          {
            "code" : "1162392001"
          }
        ]
      },
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "filter" : [
          {
            "property" : "concept",
            "op" : "is-a",
            "value" : "431314004"
          }
        ]
      },
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "filter" : [
          {
            "property" : "concept",
            "op" : "is-a",
            "value" : "86290005"
          }
        ]
      },
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "filter" : [
          {
            "property" : "concept",
            "op" : "is-a",
            "value" : "276885007"
          }
        ]
      }
    ]
  }
}

```
