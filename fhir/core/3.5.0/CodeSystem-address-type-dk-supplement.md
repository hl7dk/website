# DK Address Type - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Address Type**

## CodeSystem: DK Address Type 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/CodeSystem/address-type-dk-supplement | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:AddressType |

 
The type of an address (physical / postal) 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "address-type-dk-supplement",
  "url" : "http://hl7.dk/fhir/core/CodeSystem/address-type-dk-supplement",
  "version" : "3.5.0",
  "name" : "AddressType",
  "title" : "DK Address Type",
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
  "description" : "The type of an address (physical / postal)",
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
  "supplements" : "http://hl7.org/fhir/address-type",
  "concept" : [
    {
      "code" : "postal",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/554471000005108",
            "code" : "900000000000013009"
          },
          "value" : "Post"
        }
      ]
    },
    {
      "code" : "physical",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/554471000005108",
            "code" : "900000000000013009"
          },
          "value" : "Fysisk"
        }
      ]
    },
    {
      "code" : "both",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/554471000005108",
            "code" : "900000000000013009"
          },
          "value" : "Post & fysisk"
        }
      ]
    }
  ]
}

```
