# ElseKalium - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ElseKalium**

## Example Observation: ElseKalium

Profile: [Danish Core Observation Profile](StructureDefinition-dk-core-observation.md)

**status**: Final

**code**: P—Potassium ion; subst.c. = ? mmol/L

**subject**: [Else Test Lauridsen(official) Female, DoB: 1991-02-02 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0201919990)](Patient-else.md)

**effective**: 2023-09-15 09:15:00+0000

**value**: 3 mmol/L (Details: UCUM codemmol/L = 'mmol/L')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ElseKalium",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation"]
  },
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://npu-terminology.org",
      "code" : "NPU03230",
      "display" : "P—Potassium ion; subst.c. = ? mmol/L"
    }]
  },
  "subject" : {
    "reference" : "Patient/else"
  },
  "effectiveDateTime" : "2023-09-15T09:15:00.000Z",
  "valueQuantity" : {
    "value" : 3,
    "system" : "http://unitsofmeasure.org",
    "code" : "mmol/L"
  }
}

```
