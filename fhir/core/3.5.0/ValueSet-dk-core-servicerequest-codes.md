# DK codes for ServiceRequest - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK codes for ServiceRequest**

## ValueSet: DK codes for ServiceRequest 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/ValueSet/dk-core-servicerequest-codes | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCoreServiceRequestCodes |
| **Copyright/Legal**: This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement | |

 
Value set used to describe Danish healthcare services 

 **References** 

* [Danish Core Person ServiceRequest Profile](StructureDefinition-dk-core-person-servicerequest.md)

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
  "id" : "dk-core-servicerequest-codes",
  "url" : "http://hl7.dk/fhir/core/ValueSet/dk-core-servicerequest-codes",
  "version" : "3.5.0",
  "name" : "DkCoreServiceRequestCodes",
  "title" : "DK codes for ServiceRequest",
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
  "description" : "Value set used to describe Danish healthcare services",
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
            "code" : "773568002",
            "designation" : [
              {
                "language" : "da",
                "value" : "akutmedicin"
              }
            ]
          },
          {
            "code" : "408443003",
            "designation" : [
              {
                "language" : "da",
                "value" : "almen medicin"
              }
            ]
          },
          {
            "code" : "394577000",
            "designation" : [
              {
                "language" : "da",
                "value" : "anæstesiologi"
              }
            ]
          },
          {
            "code" : "394821009",
            "designation" : [
              {
                "value" : "arbejdsmedicin"
              }
            ]
          },
          {
            "code" : "394588006",
            "designation" : [
              {
                "language" : "da",
                "value" : "børne- og ungdomspsykiatri"
              }
            ]
          },
          {
            "code" : "394582007",
            "designation" : [
              {
                "language" : "da",
                "value" : "dermato-venerologi"
              }
            ]
          },
          {
            "code" : "394914008",
            "designation" : [
              {
                "language" : "da",
                "value" : "diagnostisk radiologi"
              }
            ]
          },
          {
            "code" : "394583002",
            "designation" : [
              {
                "language" : "da",
                "value" : "endokrinologi"
              }
            ]
          },
          {
            "code" : "394811001",
            "designation" : [
              {
                "language" : "da",
                "value" : "geriatri"
              }
            ]
          },
          {
            "code" : "394585009",
            "designation" : [
              {
                "language" : "da",
                "value" : "gynækologi og obstetrik"
              }
            ]
          },
          {
            "code" : "408472002",
            "designation" : [
              {
                "language" : "da",
                "value" : "hepatologi"
              }
            ]
          },
          {
            "code" : "394803006",
            "designation" : [
              {
                "language" : "da",
                "value" : "hæmatologi"
              }
            ]
          },
          {
            "code" : "394807007",
            "designation" : [
              {
                "language" : "da",
                "value" : "infektionsmedicin"
              }
            ]
          },
          {
            "code" : "419192003",
            "designation" : [
              {
                "language" : "da",
                "value" : "intern medicin"
              }
            ]
          },
          {
            "code" : "394579002",
            "designation" : [
              {
                "language" : "da",
                "value" : "kardiologi"
              }
            ]
          },
          {
            "code" : "408463005",
            "designation" : [
              {
                "language" : "da",
                "value" : "karkirurgi"
              }
            ]
          },
          {
            "code" : "394609007",
            "designation" : [
              {
                "language" : "da",
                "value" : "kirurgi"
              }
            ]
          },
          {
            "code" : "551411000005104",
            "designation" : [
              {
                "language" : "da",
                "value" : "kirurgisk gastroenterologi"
              }
            ]
          },
          {
            "code" : "394596001",
            "designation" : [
              {
                "language" : "da",
                "value" : "klinisk biokemi"
              }
            ]
          },
          {
            "code" : "394600006",
            "designation" : [
              {
                "language" : "da",
                "value" : "klinisk farmakologi"
              }
            ]
          },
          {
            "code" : "394601005",
            "designation" : [
              {
                "language" : "da",
                "value" : "klinisk fysiologi og nuklearmedicin (snomed:  klinisk fysiologi)"
              }
            ]
          },
          {
            "code" : "394580004",
            "designation" : [
              {
                "language" : "da",
                "value" : "klinisk genetik"
              }
            ]
          },
          {
            "code" : "421661004",
            "designation" : [
              {
                "language" : "da",
                "value" : "klinisk immunologi"
              }
            ]
          },
          {
            "code" : "408454008",
            "designation" : [
              {
                "language" : "da",
                "value" : "klinisk mikrobiologi"
              }
            ]
          },
          {
            "code" : "394809005",
            "designation" : [
              {
                "language" : "da",
                "value" : "klinisk neurofysiologi"
              }
            ]
          },
          {
            "code" : "394592004",
            "designation" : [
              {
                "language" : "da",
                "value" : "klinisk onkologi"
              }
            ]
          },
          {
            "code" : "418112009",
            "designation" : [
              {
                "language" : "da",
                "value" : "lungesygdomme"
              }
            ]
          },
          {
            "code" : "394805004",
            "designation" : [
              {
                "language" : "da",
                "value" : "medicinsk allergologi"
              }
            ]
          },
          {
            "code" : "394584008",
            "designation" : [
              {
                "language" : "da",
                "value" : "medicinsk gastroenterologi"
              }
            ]
          },
          {
            "code" : "394589003",
            "designation" : [
              {
                "language" : "da",
                "value" : "nefrologi"
              }
            ]
          },
          {
            "code" : "394610002",
            "designation" : [
              {
                "language" : "da",
                "value" : "neurokirurgi"
              }
            ]
          },
          {
            "code" : "394591006",
            "designation" : [
              {
                "language" : "da",
                "value" : "neurologi"
              }
            ]
          },
          {
            "code" : "394812008",
            "designation" : [
              {
                "language" : "da",
                "value" : "odontologi (snomed: odontologiske specialer)"
              }
            ]
          },
          {
            "code" : "394594003",
            "designation" : [
              {
                "language" : "da",
                "value" : "oftalmologi"
              }
            ]
          },
          {
            "code" : "394608004",
            "designation" : [
              {
                "language" : "da",
                "value" : "ortodonti"
              }
            ]
          },
          {
            "code" : "394801008",
            "designation" : [
              {
                "language" : "da",
                "value" : "ortopædisk kirurgi"
              }
            ]
          },
          {
            "code" : "394604002",
            "designation" : [
              {
                "language" : "da",
                "value" : "oto-rhino-laryngologi"
              }
            ]
          },
          {
            "code" : "394915009",
            "designation" : [
              {
                "language" : "da",
                "value" : "patologisk anatomi og cytologi"
              }
            ]
          },
          {
            "code" : "394611003",
            "designation" : [
              {
                "language" : "da",
                "value" : "plastikkirurgi"
              }
            ]
          },
          {
            "code" : "394587001",
            "designation" : [
              {
                "language" : "da",
                "value" : "psykiatri"
              }
            ]
          },
          {
            "code" : "394537008",
            "designation" : [
              {
                "language" : "da",
                "value" : "pædiatri"
              }
            ]
          },
          {
            "code" : "394810000",
            "designation" : [
              {
                "language" : "da",
                "value" : "reumatologi"
              }
            ]
          },
          {
            "code" : "394581000",
            "designation" : [
              {
                "language" : "da",
                "value" : "samfundsmedicin"
              }
            ]
          },
          {
            "code" : "394605001",
            "designation" : [
              {
                "language" : "da",
                "value" : "tand-, mund- og kæbekirurgi"
              }
            ]
          },
          {
            "code" : "394603008",
            "designation" : [
              {
                "language" : "da",
                "value" : "thoraxkirurgi"
              }
            ]
          },
          {
            "code" : "408448007",
            "designation" : [
              {
                "language" : "da",
                "value" : "tropemedicin"
              }
            ]
          },
          {
            "code" : "394612005",
            "designation" : [
              {
                "language" : "da",
                "value" : "urologi"
              }
            ]
          },
          {
            "code" : "658171000005102",
            "designation" : [
              {
                "language" : "da",
                "value" : "hjemmepleje"
              }
            ]
          },
          {
            "code" : "658161000005107",
            "designation" : [
              {
                "language" : "da",
                "value" : "hjemmesygepleje"
              }
            ]
          },
          {
            "code" : "658151000005105",
            "designation" : [
              {
                "language" : "da",
                "value" : "sundhedsfremme og forebyggelse"
              }
            ]
          },
          {
            "code" : "658191000005101",
            "designation" : [
              {
                "language" : "da",
                "value" : "sundhedspleje"
              }
            ]
          },
          {
            "code" : "658201000005103",
            "designation" : [
              {
                "language" : "da",
                "value" : "kommunal tandpleje"
              }
            ]
          },
          {
            "code" : "658141000005108",
            "designation" : [
              {
                "language" : "da",
                "value" : "genoptræning efter hospitalsophold"
              }
            ]
          },
          {
            "code" : "658181000005104",
            "designation" : [
              {
                "language" : "da",
                "value" : "hjælpemiddelområdet"
              }
            ]
          },
          {
            "code" : "2903041000005106",
            "designation" : [
              {
                "language" : "da",
                "value" : "det kommunale omsorgs-, social- og sundhedsområde"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
