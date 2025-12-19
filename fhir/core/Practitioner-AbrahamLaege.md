# AbrahamLæge - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AbrahamLæge**

## Example Practitioner: AbrahamLæge

Profile: [Danish Core Practitioner Profile](StructureDefinition-dk-core-practitioner.md)

**name**: Abraham Murakami

> **qualification****identifier**:`https://autregweb.sst.dk`/005ML**code**:Læge

> **qualification****identifier**:`https://autregweb.sst.dk`/005M6**code**:Sygeplejerske



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "AbrahamLaege",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner"
    ]
  },
  "name" : [
    {
      "text" : "Abraham Murakami",
      "family" : "Murakami",
      "given" : ["Abraham"]
    }
  ],
  "qualification" : [
    {
      "identifier" : [
        {
          "system" : "https://autregweb.sst.dk",
          "value" : "005ML"
        }
      ],
      "code" : {
        "coding" : [
          {
            "system" : "http://hl7.dk/fhir/core/CodeSystem/DkCoreProfessionGroupCodes",
            "code" : "7170"
          }
        ]
      }
    },
    {
      "identifier" : [
        {
          "system" : "https://autregweb.sst.dk",
          "value" : "005M6"
        }
      ],
      "code" : {
        "coding" : [
          {
            "system" : "http://hl7.dk/fhir/core/CodeSystem/DkCoreProfessionGroupCodes",
            "code" : "5166"
          }
        ]
      }
    }
  ]
}

```
