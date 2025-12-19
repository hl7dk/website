# Danish Core Condition Profile - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish Core Condition Profile**

## Resource Profile: Danish Core Condition Profile 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-condition | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCoreCondition |

 
HL7 Denmark core profile for professionally asserted conditions, as specified by danish health and social care organizations 

### Scope and usage

The Danish Core Condition profile is intended to encapsulate condition information, as used in the Danish health sector. In dk-core, conditions have been constrained to only containing conditions as stated by health or social sector practitioners. This means that conditions, that patients or citizens assert themselves to have, should not be represented using this profile. Patients' own assessments can, in most cases, be represented as Observations or QuestionnaireResponses. However, in some use cases, where the patient asserts the problem, that leads to healthcare interventions or own interventions. It does make sense to represent these as Conditions. In this case, use the international standard [Condition](https://www.hl7.org/fhir/condition.html), not this dk-core Condition profile.

This way of constraining the Condition profile is within the boundaries of what the Danish Health Data Authority and Local Government Denmark define as a Condition.

* The Danish Health Data Authority, [Begrebsbasen](https://sundhedsdata.iterm.dk/): Helbredstilstand er en tilstand vedrørende helbred der aktuelt vurderes med henblik på sundhedsintervention
* Local Government Denmark, [Fælleskommunale rammearkitektur, FKI](http://info.rammearkitektur.dk/SocialOgSundhed/FKI/ClassDiagram/d2ca33a5-a53c-4f83-82e5-0f9f7ce7a325.htm): Fokustilstand er en borgers helbredsmæssige, funktionsmæssige og/eller sociale situation, på et givet tidspunkt, der er anledning til faglig bekymring, og vurderes mhp. indsats

We use the Condition profile for describing both conditions that are true for an encounter, and for conditions that are true for a periode of time. "In FHIR, we distinguish between the two using the Condition.category that can take the two values problem-list-item og encounter-diagnosis. In this list, examples of use is compiled:

* LPR3 conditions are encounter-diagnosis
* Regional care-pathway diagnosis (Regionale forløbsdiagnoser) are problem-list-items
* General practioners can code each encounter with an ICPC code. This is an encounter-diagnosis
* Municipality conditions i.e. FSIII-conditions and FFB-subthemes are problem-list-items
* General practitioners, in some cases, follow a patient condition for a longer periode of time (e.g. high blood pressure, high cholesterol, COPD), and some systems support care pathways for these conditions. These conditions may be categorized as problem-list-items.

Given that we have a condition, which is a problem-list-item, ending the condition have two meanings:

* The first is that the patient no longer has the condition e.g. a pressure ulcer has healed. In this case, Condition.clinicalStatus=inactive and Condition.abatementTime is the date where the condition was no longer a problem.
* The second meaning of "ended" is that the condition falls out of focus in a professional context e.g. if the patient moves, or another professional group takes over the care for the patient. A Condition no longer in focus can be represented in two ways: 
* The Condition.category looses its "problem-list-item" flag. The idea is to state that from a patient viewpoint the condition has not changed, but in this professional context it is no longer in focus.
* The Condition.extension.NotFollowedAnymore is populated with the date that it lost focus in a specific professional context.
 

The status attributes controls the context of a condition. clinicalStatus should be populated with the value “active” if the patient has the condition, and inactive if the patient no longer have the condition. Condition.verificationStatus should be set to “confirmed” if the condition have been established as true by someone with authority (e.g. a diagnosis is confirmed by a doctor). A condition is “unconfirmed”, if the patient is suspected of having a condition, and "refuted" if it has been confirmed that the condition is not present. An example of an unconfirmed condition can be found here [John Melanoma](Condition-JohnMelanoma.md).

Note that "unconfirmed" is not the same as a risk of developing a condition. The risk of developing a certain condition may be recorded in (at least) two ways in FHIR i.e. as a familyMemberHistory or by populating Condition.code with a code that expresses a risk e.g. the SNOMED CT code ´395112001 At increased risk for cardiovascular event (finding)´. The first would typically be used if recording a family history, the second, if you want to use an increased risk as the reason for starting a prophylactic treatment.

Condition profile cover both primary sector, secondary sector (medical specialists ([DA] speciallæger) and hospitals) and municipality cases. As such the profile should be usable in most Danish contexts.

**Usages:**

* Derived from this Profile: [Danish IPA Core Condition Profile](StructureDefinition-ipa-dk-core-condition.md)
* Refer to this Profile: [Danish Core Person ServiceRequest Profile](StructureDefinition-dk-core-person-servicerequest.md)
* Examples for this Profile: [Condition/ConditionPressureUlcer](Condition-ConditionPressureUlcer.md), [Condition/ElseGraviditet](Condition-ElseGraviditet.md), [Condition/JohnDiabetes](Condition-JohnDiabetes.md), [Condition/JohnFracture](Condition-JohnFracture.md)...Show 2 more,[Condition/JohnMelanoma](Condition-JohnMelanoma.md)and[Condition/JohnPacemaker](Condition-JohnPacemaker.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-condition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-condition.csv), [Excel](StructureDefinition-dk-core-condition.xlsx), [Schematron](StructureDefinition-dk-core-condition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-condition",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-condition",
  "version" : "3.5.0",
  "name" : "DkCoreCondition",
  "title" : "Danish Core Condition Profile",
  "status" : "active",
  "date" : "2025-12-19T17:20:16+01:00",
  "publisher" : "HL7 Denmark",
  "contact" : [
    {
      "name" : "HL7 Denmark",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://www.hl7.dk"
        },
        {
          "system" : "email",
          "value" : "dk-affiliate@hl7.dk"
        }
      ]
    }
  ],
  "description" : "HL7 Denmark core profile for professionally asserted conditions, as specified by danish health and social care organizations",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "sct-concept",
      "uri" : "http://snomed.info/conceptdomain",
      "name" : "SNOMED CT Concept Domain Binding"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "sct-attr",
      "uri" : "http://snomed.org/attributebinding",
      "name" : "SNOMED CT Attribute Binding"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Condition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Condition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Condition",
        "path" : "Condition"
      },
      {
        "id" : "Condition.extension",
        "path" : "Condition.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Condition.extension:dueTo",
        "path" : "Condition.extension",
        "sliceName" : "dueTo",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/condition-dueTo"]
          }
        ]
      },
      {
        "id" : "Condition.extension:conditionLastAssertedDate",
        "path" : "Condition.extension",
        "sliceName" : "conditionLastAssertedDate",
        "short" : "Last date a condition was confirmed valid in its current state",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/ConditionLastAssertedDate"
            ]
          }
        ]
      },
      {
        "id" : "Condition.extension:notFollowedAnymore",
        "path" : "Condition.extension",
        "sliceName" : "notFollowedAnymore",
        "short" : "Date where a condition lost focus in a specific clinical context",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/NotFollowedAnymore"
            ]
          }
        ]
      },
      {
        "id" : "Condition.code.coding",
        "path" : "Condition.code.coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "description" : "Slice based on the code.system value which allow different code-systems to represent a condition",
          "ordered" : false,
          "rules" : "open"
        },
        "short" : "Condition code, [DA] tilstandskode"
      },
      {
        "id" : "Condition.code.coding:FSIIIConditionCode",
        "path" : "Condition.code.coding",
        "sliceName" : "FSIIIConditionCode",
        "short" : "[DA] FSIII tilstandskode",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Condition.code.coding:FSIIIConditionCode.system",
        "path" : "Condition.code.coding.system",
        "min" : 1,
        "patternUri" : "urn:oid:1.2.208.176.2.21"
      },
      {
        "id" : "Condition.code.coding:SCTConditionCode",
        "path" : "Condition.code.coding",
        "sliceName" : "SCTConditionCode",
        "short" : "SNOMED CT condition code",
        "min" : 0,
        "max" : "1",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.org/fhir/ValueSet/condition-code"
        }
      },
      {
        "id" : "Condition.code.coding:SCTConditionCode.system",
        "path" : "Condition.code.coding.system",
        "min" : 1,
        "patternUri" : "http://snomed.info/sct"
      },
      {
        "id" : "Condition.code.coding:FFBConditionCode",
        "path" : "Condition.code.coding",
        "sliceName" : "FFBConditionCode",
        "short" : "[DA] FFB undertemakode",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Condition.code.coding:FFBConditionCode.system",
        "path" : "Condition.code.coding.system",
        "min" : 1,
        "patternUri" : "urn:oid:1.2.208.176.2.22"
      },
      {
        "id" : "Condition.code.coding:SKS-D",
        "path" : "Condition.code.coding",
        "sliceName" : "SKS-D",
        "short" : "[DA] Kode fra D-hierarkiet i SKS",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Condition.code.coding:SKS-D.system",
        "path" : "Condition.code.coding.system",
        "min" : 1,
        "patternUri" : "urn:oid:1.2.208.176.2.4.12"
      },
      {
        "id" : "Condition.code.coding:ICPC2code",
        "path" : "Condition.code.coding",
        "sliceName" : "ICPC2code",
        "short" : "ICPC2 code",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Condition.code.coding:ICPC2code.system",
        "path" : "Condition.code.coding.system",
        "min" : 1,
        "patternUri" : "urn:oid:1.2.208.176.2.31"
      },
      {
        "id" : "Condition.subject",
        "path" : "Condition.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
            ]
          }
        ]
      },
      {
        "id" : "Condition.recorder",
        "path" : "Condition.recorder",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"
            ]
          }
        ]
      },
      {
        "id" : "Condition.asserter",
        "path" : "Condition.asserter",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role"
            ]
          }
        ]
      }
    ]
  }
}

```
