# Else's Laboratory report using EHDS value sets - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Else's Laboratory report using EHDS value sets**

## Example DiagnosticReport: Else's Laboratory report using EHDS value sets

Profile: [Danish Core Diagnostic Report Profile](StructureDefinition-dk-core-diagnostic-report.md)

## Laboratory report (klinisk biokemi, Chemistry studies (set)) 

| | |
| :--- | :--- |
| Subject | Else Test Lauridsen(official) Female, DoB: 1991-02-02 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0201919990) |
| When For | 2023-09-15 10:00:00+0000 |
| Performer | [Organization: identifier = urn:oid:1.2.208.176.1.1#275871000016006](Organization-KliniskBiokemiHBY.md) |

**Report Details**

* **Code**: [P—Coagulation, tissue factor-induced; rel.time(actual/norm;INR;IRP 67/40;proc.) = ?](Observation-ElseINR.md)
  * **Value**: 1 1 (Details: UCUM code1 = '1')
  * **Flags**: Final
  * **When For**: 2023-09-15 09:15:00+0000
* **Code**: [P—Potassium ion; subst.c. = ? mmol/L](Observation-ElseKalium.md)
  * **Value**: 3 mmol/L (Details: UCUM codemmol/L = 'mmol/L')
  * **Flags**: Final
  * **When For**: 2023-09-15 09:15:00+0000
* **Code**: [P—Sodium ion; subst.c. = ? mmol/L](Observation-ElseNatrium.md)
  * **Value**: 150 mmol/L (Details: UCUM codemmol/L = 'mmol/L')
  * **Flags**: Final
  * **When For**: 2023-09-15 09:15:00+0000



## Resource Content

```json
{
  "resourceType" : "DiagnosticReport",
  "id" : "ElseLaboratoryReport",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-diagnostic-report"]
  },
  "status" : "final",
  "category" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/554471000005108",
      "code" : "394596001",
      "display" : "klinisk biokemi"
    }]
  },
  {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "18719-5",
      "display" : "Chemistry studies (set)"
    }]
  }],
  "code" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "11502-2",
      "display" : "Laboratory report"
    }]
  },
  "subject" : {
    "reference" : "Patient/else"
  },
  "effectiveDateTime" : "2023-09-15T10:00:00.000Z",
  "performer" : [{
    "reference" : "Organization/KliniskBiokemiHBY"
  }],
  "result" : [{
    "reference" : "Observation/ElseINR"
  },
  {
    "reference" : "Observation/ElseKalium"
  },
  {
    "reference" : "Observation/ElseNatrium"
  }]
}

```
