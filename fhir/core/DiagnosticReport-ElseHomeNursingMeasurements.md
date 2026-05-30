# Else's TOBS measurements and urin stix - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Else's TOBS measurements and urin stix**

## Example DiagnosticReport: Else's TOBS measurements and urin stix

Profile: [Danish Core Diagnostic Report Profile](StructureDefinition-dk-core-diagnostic-report.md)

## Progress note (hjemmesygepleje) 

| | |
| :--- | :--- |
| Subject | Else Test Lauridsen(official) Female, DoB: 1991-02-02 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0201919990) |
| When For | 2023-09-12 17:45:00+0000 |
| Performer | [Practitioner Sidsel Andersen](Practitioner-SidselSygeplejerske.md) |

**Report Details**

* **Code**: [Level of consciousness](Observation-ElseConsciousness.md)
  * **Value**: Responds to pain
  * **Flags**: Final
* **Code**: [Blood pressure panel with all children optional](Observation-ElseBloodPressure.md)
  * **Value**: 
  * **Flags**: Final
* **Code**: [Body temperature](Observation-ElseBodyTemperature.md)
  * **Value**: 38.7 grader celcius (Details: UCUM codeCel = 'Cel')
  * **Flags**: Final
* **Code**: [Heart rate](Observation-ElseHeartRate.md)
  * **Value**: 92 slag/minut (Details: UCUM code/min = '/min')
  * **Flags**: Final
* **Code**: [Respiratory rate](Observation-ElseRespirationRate.md)
  * **Value**: 19 /min (Details: UCUM code/min = '/min')
  * **Flags**: Final
* **Code**: [Pt—Tidlig Opsporing af Begyndende Sygdom (TOBS) score; antal (værdi 0-15) = ?](Observation-ElsesTOBSscore.md)
  * **Value**: 3 1 (Details: UCUM code1 = '1')
  * **Flags**: Final
* **Code**: [U—Leukocytes; arb.c.(proc.) = ?](Observation-ElseUrinStix.md)
  * **Value**: Påviselige leukocytter
  * **Flags**: Final

Elses lidt høje TOBS og leukocytter i urin gør det nødvendigt med lægetilsyn snarest.



## Resource Content

```json
{
  "resourceType" : "DiagnosticReport",
  "id" : "ElseHomeNursingMeasurements",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-diagnostic-report"]
  },
  "status" : "final",
  "category" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/554471000005108",
      "code" : "658161000005107",
      "display" : "hjemmesygepleje"
    }]
  }],
  "code" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "11506-3",
      "display" : "Progress note"
    }]
  },
  "subject" : {
    "reference" : "Patient/else"
  },
  "effectiveDateTime" : "2023-09-12T17:45:00.000Z",
  "performer" : [{
    "reference" : "Practitioner/SidselSygeplejerske"
  }],
  "result" : [{
    "reference" : "Observation/ElseConsciousness"
  },
  {
    "reference" : "Observation/ElseBloodPressure"
  },
  {
    "reference" : "Observation/ElseBodyTemperature"
  },
  {
    "reference" : "Observation/ElseHeartRate"
  },
  {
    "reference" : "Observation/ElseRespirationRate"
  },
  {
    "reference" : "Observation/ElsesTOBSscore"
  },
  {
    "reference" : "Observation/ElseUrinStix"
  }],
  "conclusion" : "Elses lidt høje TOBS og leukocytter i urin gør det nødvendigt med lægetilsyn snarest."
}

```
