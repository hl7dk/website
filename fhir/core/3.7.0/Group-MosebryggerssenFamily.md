# Mosebryggersen familien - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mosebryggersen familien**

## Example Group: Mosebryggersen familien

**type**: Person

**actual**: true

**name**: Mosebryggersen familien

**quantity**: 7

> **member****entity**: [Schwendlund Test Mosebryggersen (far)](Patient-Schwendlund.md)

> **member****entity**: [May June Test Moberg (mor)](Patient-MayJune.md)

> **member****entity**: [Odd Haugen Test Mosebryggersen (søn)](Patient-OddHaugen.md)

> **member****entity**: [Knut Odvar Test Mosebryggersen (søn)](Patient-KnutOdvar.md)

> **member****entity**: [Sille June Test Mosebrygersen (datter)](Patient-SilleJune.md)

> **member****entity**: [Sverre Test Mosebryggersen (søn, tvilling)](Patient-Sverre.md)

> **member****entity**: [Torre Test Mosebryggersen (søn, tvilling)](Patient-Torre.md)



## Resource Content

```json
{
  "resourceType" : "Group",
  "id" : "MosebryggerssenFamily",
  "type" : "person",
  "actual" : true,
  "name" : "Mosebryggersen familien",
  "quantity" : 7,
  "member" : [{
    "entity" : {
      "reference" : "Patient/Schwendlund",
      "display" : "Schwendlund Test Mosebryggersen (far)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/MayJune",
      "display" : "May June Test Moberg (mor)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/OddHaugen",
      "display" : "Odd Haugen Test Mosebryggersen (søn)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/KnutOdvar",
      "display" : "Knut Odvar Test Mosebryggersen (søn)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/SilleJune",
      "display" : "Sille June Test Mosebrygersen (datter)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/Sverre",
      "display" : "Sverre Test Mosebryggersen (søn, tvilling)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/Torre",
      "display" : "Torre Test Mosebryggersen (søn, tvilling)"
    }
  }]
}

```
