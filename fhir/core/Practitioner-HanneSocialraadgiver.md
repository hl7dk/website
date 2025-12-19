# HanneSocialrådgiver - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HanneSocialrådgiver**

## Example Practitioner: HanneSocialrådgiver

Profile: [Danish Core Practitioner Profile](StructureDefinition-dk-core-practitioner.md)

**name**: Hanne Mortensen

### Qualifications

| | |
| :--- | :--- |
| - | **Code** |
| * | Socialrådgiver |



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "HanneSocialraadgiver",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner"
    ]
  },
  "name" : [
    {
      "text" : "Hanne Mortensen",
      "family" : "Mortensen",
      "given" : ["Hanne"]
    }
  ],
  "qualification" : [
    {
      "code" : {
        "text" : "Socialrådgiver"
      }
    }
  ]
}

```
