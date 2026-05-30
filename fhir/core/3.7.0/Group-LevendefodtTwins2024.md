# Levendefødt tvillinger 2024 - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Levendefødt tvillinger 2024**

## Example Group: Levendefødt tvillinger 2024

**type**: Person

**actual**: true

**name**: Levendefødt tvillinger 2024

**quantity**: 2

> **member****entity**: [Dreng Test Levendefødt (tvilling)](Patient-DrengLevendefodt2024.md)

> **member****entity**: [Pige Test Levendefødt (tvilling)](Patient-PigeLevendefodt2024.md)



## Resource Content

```json
{
  "resourceType" : "Group",
  "id" : "LevendefodtTwins2024",
  "type" : "person",
  "actual" : true,
  "name" : "Levendefødt tvillinger 2024",
  "quantity" : 2,
  "member" : [{
    "entity" : {
      "reference" : "Patient/DrengLevendefodt2024",
      "display" : "Dreng Test Levendefødt (tvilling)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/PigeLevendefodt2024",
      "display" : "Pige Test Levendefødt (tvilling)"
    }
  }]
}

```
