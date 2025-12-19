# ElsesTOBSscore - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ElsesTOBSscore**

## Example Observation: ElsesTOBSscore

Profile: [Danish Core Observation Profile](StructureDefinition-dk-core-observation.md)

**status**: Final

**code**: Pt—Tidlig Opsporing af Begyndende Sygdom (TOBS) score; antal (værdi 0-15) = ?

**subject**: [Else Test Lauridsen(official) Kvinde, DoB: 1991-02-02 ( urn:oid:1.2.208.176.1.2#0201919990)](Patient-else.md)

**effective**: 2023-09-12 17:45:00+0000

**performer**: [Practitioner Sidsel Andersen](Practitioner-SidselSygeplejerske.md)

**value**: 3 1(Details: UCUM code1 = '1')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ElsesTOBSscore",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation"
    ]
  },
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-observation-codes",
        "code" : "MCS88125",
        "display" : "Pt—Tidlig Opsporing af Begyndende Sygdom (TOBS) score; antal (værdi 0-15) = ?"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/else"
  },
  "effectiveDateTime" : "2023-09-12T17:45:00.000Z",
  "performer" : [
    {
      "reference" : "Practitioner/SidselSygeplejerske"
    }
  ],
  "valueQuantity" : {
    "value" : 3,
    "system" : "http://unitsofmeasure.org",
    "code" : "1"
  }
}

```
