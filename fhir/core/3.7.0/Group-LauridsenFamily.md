# Lauridsen familien - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Lauridsen familien**

## Example Group: Lauridsen familien

**type**: Person

**actual**: true

**name**: Lauridsen familien

**quantity**: 7

> **member****entity**: [Einer Test Lauridsen (far)](Patient-Einer.md)

> **member****entity**: [Lonni Test Lauridsen (mor)](Patient-Lonni.md)

> **member****entity**: [Magnus Test Lauridsen (søn, tvilling)](Patient-Magnus.md)

> **member****entity**: [Rasmus Test Lauridsen (søn, tvilling)](Patient-Rasmus.md)

> **member****entity**: [Else Test Lauridsen (datter, trilling)](Patient-ElseLauridsen.md)

> **member****entity**: [Ellen Louise Test Lauridsen (datter, trilling)](Patient-EllenLouise.md)

> **member****entity**: [EK Test Lauridsen (søn, trilling)](Patient-EK.md)



## Resource Content

```json
{
  "resourceType" : "Group",
  "id" : "LauridsenFamily",
  "type" : "person",
  "actual" : true,
  "name" : "Lauridsen familien",
  "quantity" : 7,
  "member" : [{
    "entity" : {
      "reference" : "Patient/Einer",
      "display" : "Einer Test Lauridsen (far)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/Lonni",
      "display" : "Lonni Test Lauridsen (mor)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/Magnus",
      "display" : "Magnus Test Lauridsen (søn, tvilling)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/Rasmus",
      "display" : "Rasmus Test Lauridsen (søn, tvilling)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/ElseLauridsen",
      "display" : "Else Test Lauridsen (datter, trilling)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/EllenLouise",
      "display" : "Ellen Louise Test Lauridsen (datter, trilling)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/EK",
      "display" : "EK Test Lauridsen (søn, trilling)"
    }
  }]
}

```
