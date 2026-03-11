# Jensen familien - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Jensen familien**

## Example Group: Jensen familien

**type**: Person

**actual**: true

**name**: Jensen familien

**quantity**: 2

> **member****entity**: [Anders Test Jensen (far)](Patient-AndersJensen.md)

> **member****entity**: [Ali Test Jensen (søn)](Patient-AliJensen.md)



## Resource Content

```json
{
  "resourceType" : "Group",
  "id" : "JensenFamily",
  "type" : "person",
  "actual" : true,
  "name" : "Jensen familien",
  "quantity" : 2,
  "member" : [{
    "entity" : {
      "reference" : "Patient/AndersJensen",
      "display" : "Anders Test Jensen (far)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/AliJensen",
      "display" : "Ali Test Jensen (søn)"
    }
  }]
}

```
