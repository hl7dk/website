# Levendefødt tvillinger 2016 - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Levendefødt tvillinger 2016**

## Example Group: Levendefødt tvillinger 2016

**type**: Person

**actual**: true

**name**: Levendefødt tvillinger 2016

**quantity**: 2

> **member****entity**: [Dreng Test Levendefødt (tvilling)](Patient-DrengLevendefodt2016.md)

> **member****entity**: [Pige Test Levendefødt (tvilling)](Patient-PigeLevendefodt2016.md)



## Resource Content

```json
{
  "resourceType" : "Group",
  "id" : "LevendefodtTwins2016",
  "type" : "person",
  "actual" : true,
  "name" : "Levendefødt tvillinger 2016",
  "quantity" : 2,
  "member" : [{
    "entity" : {
      "reference" : "Patient/DrengLevendefodt2016",
      "display" : "Dreng Test Levendefødt (tvilling)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/PigeLevendefodt2016",
      "display" : "Pige Test Levendefødt (tvilling)"
    }
  }]
}

```
