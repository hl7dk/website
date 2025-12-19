# DK Profession Group Codes - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Profession Group Codes**

## CodeSystem: DK Profession Group Codes 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/CodeSystem/DkCoreProfessionGroupCodes | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCoreProfessionGroupCodes |

 
DK health ProfessionGroup codes as defined by https://www.retsinformation.dk/eli/lta/2019/731, and derived from http://autregwebservice.sst.dk/autregservice.asmx/GetAllProfessionGroups. Code (5176) was not uniqe, and have been converted to 5176a and 5176b 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DkCoreProfessionGroupValueSet](ValueSet-DkCoreProfessionGroupValueSet.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "DkCoreProfessionGroupCodes",
  "url" : "http://hl7.dk/fhir/core/CodeSystem/DkCoreProfessionGroupCodes",
  "version" : "3.5.0",
  "name" : "DkCoreProfessionGroupCodes",
  "title" : "DK Profession Group Codes",
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
  "description" : "DK health ProfessionGroup codes as defined by https://www.retsinformation.dk/eli/lta/2019/731, and derived from http://autregwebservice.sst.dk/autregservice.asmx/GetAllProfessionGroups. Code (5176) was not uniqe, and have been converted to 5176a and 5176b",
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
  "count" : 21,
  "concept" : [
    {
      "code" : "C511",
      "display" : "Ambulancebehandler"
    },
    {
      "code" : "9495",
      "display" : "Bandagist"
    },
    {
      "code" : "B511",
      "display" : "Behandlerfarmaceut"
    },
    {
      "code" : "5159",
      "display" : "Bioanalytiker"
    },
    {
      "code" : "5153",
      "display" : "Ergoterapeut"
    },
    {
      "code" : "5155",
      "display" : "Fodterapeut"
    },
    {
      "code" : "5151",
      "display" : "Fysioterapeut"
    },
    {
      "code" : "5175",
      "display" : "Jordemoder"
    },
    {
      "code" : "5265",
      "display" : "Kiropraktor"
    },
    {
      "code" : "5451",
      "display" : "Klinisk diætist"
    },
    {
      "code" : "5432",
      "display" : "Klinisk tandtekniker"
    },
    {
      "code" : "5176a",
      "display" : "Kontaktlinseoptiker"
    },
    {
      "code" : "7170",
      "display" : "Læge"
    },
    {
      "code" : "4498",
      "display" : "Optiker"
    },
    {
      "code" : "5176b",
      "display" : "Optometrist"
    },
    {
      "code" : "A511",
      "display" : "Osteopat"
    },
    {
      "code" : "5158",
      "display" : "Radiograf"
    },
    {
      "code" : "5152",
      "display" : "Social- og sundhedsassistent"
    },
    {
      "code" : "5166",
      "display" : "Sygeplejerske"
    },
    {
      "code" : "5433",
      "display" : "Tandlæge"
    },
    {
      "code" : "5431",
      "display" : "Tandplejer"
    }
  ]
}

```
