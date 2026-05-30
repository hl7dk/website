# Berggren familien - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Berggren familien**

## Example Group: Berggren familien

**type**: Person

**actual**: true

**name**: Berggren familien

**quantity**: 12

> **member****entity**: [Åge Test Berggren (bedstefar/oldefar)](Patient-Aage.md)

> **member****entity**: [Nancy Ann Test Berggren (bedstemor)](Patient-NancyAnn.md)

> **member****entity**: [Bruno Test Elmer (Nancys bror)](Patient-Bruno.md)

> **member****entity**: [Max Test Berggren (Nancys søn)](Patient-MaxBerggren.md)

> **member****entity**: [Ruddi Test Berggren (Nancys søn)](Patient-RuddiBerggren.md)

> **member****entity**: [Kirsten Test Berggren (Nancys datter)](Patient-KirstenBerggren.md)

> **member****entity**: [Brita Test Berggren (Nancys datter)](Patient-BritaBerggren.md)

> **member****entity**: [Pia Test Berggren (Kirstens datter)](Patient-PiaBerggren.md)

> **member****entity**: [Gitte Nancy Test Berggren (Kirstens datter)](Patient-GitteNancy.md)

> **member****entity**: [Lars Test Berggren (Kirstens søn)](Patient-LarsBerggren.md)

> **member****entity**: [Rikke Test Berggren (Kirstens datter)](Patient-RikkeBerggren.md)

> **member****entity**: [Aya Test Berggren (Kirstens datter)](Patient-AyaBerggren.md)



## Resource Content

```json
{
  "resourceType" : "Group",
  "id" : "BerggrenFamily",
  "type" : "person",
  "actual" : true,
  "name" : "Berggren familien",
  "quantity" : 12,
  "member" : [{
    "entity" : {
      "reference" : "Patient/Aage",
      "display" : "Åge Test Berggren (bedstefar/oldefar)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/NancyAnn",
      "display" : "Nancy Ann Test Berggren (bedstemor)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/Bruno",
      "display" : "Bruno Test Elmer (Nancys bror)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/MaxBerggren",
      "display" : "Max Test Berggren (Nancys søn)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/RuddiBerggren",
      "display" : "Ruddi Test Berggren (Nancys søn)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/KirstenBerggren",
      "display" : "Kirsten Test Berggren (Nancys datter)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/BritaBerggren",
      "display" : "Brita Test Berggren (Nancys datter)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/PiaBerggren",
      "display" : "Pia Test Berggren (Kirstens datter)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/GitteNancy",
      "display" : "Gitte Nancy Test Berggren (Kirstens datter)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/LarsBerggren",
      "display" : "Lars Test Berggren (Kirstens søn)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/RikkeBerggren",
      "display" : "Rikke Test Berggren (Kirstens datter)"
    }
  },
  {
    "entity" : {
      "reference" : "Patient/AyaBerggren",
      "display" : "Aya Test Berggren (Kirstens datter)"
    }
  }]
}

```
