# Danish Core Encounter Profile - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish Core Encounter Profile**

## Resource Profile: Danish Core Encounter Profile 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-encounter | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCoreEncounter |

 
HL7 Denmark core profile for an encounter 

### Scope and usage

This profile is intended to encapsulate information about encounters in the Danish health sectors.

### Responsibilities for treatment and care in hospitals

In hospitals in Denmark, there is a distinction between the organization responsible for providing treatment to the patient and the organization responsible for providing care. This distinction is also adressed by **encounter participants** in [LPR3](https://sundhedsdatastyrelsen.dk/indberetning/patientregistrering/indberetning-lpr3/teknisk-information-om-lpr3), the registry to where all hospital encounters must be reported:

| | | | |
| :--- | :--- | :--- | :--- |
| Treatment responsibility | Behandlingsansvarlig | [Responsible Unit Participant](https://art-decor.org/art-decor/decor-templates--lpr-?id=1.2.208.176.7.1.10.49) | The organization where the doctor responsible for the patient's medical treatment is employed. |
| Care responsibility | Plejeansvarlig | [Service Delivery Location Participant](https://art-decor.org/art-decor/decor-templates--lpr-?id=1.2.208.176.7.1.10.50) | The organization where the patient is actually located, and where day-to-day care is provided. |

The treatment responsibility is represented by Encounter.serviceProvider and the care responsibility is represented by the extension [CareProvider](./StructureDefinition-dk-core-care-provider.md).

Use Encounter.serverProvider and the extension for CareProvider, when you need to convey the responsibilities as defined in LPR3.

### Specifying diagnosis

It is preferred, that the [Danish Core Condition](./StructureDefinition-dk-core-condition.md) is used when referencing diagnosis in a Danish context.

Hospital encounters in Denmark have associated diagnoses that specify the primary diagnosis being treated ([DA] aktionsdiagnose) and secondary diagnoses ([DA] bidiagnoser) that might be relevant to the treatment of the primary diagnosis. These can be given in the diagnosis element and it is recommended to use the rank element to distinguish between primary and secondary diagnoses, the primary being given rank 1 and the secondary a rank > 1. Have a look at this [example](Encounter-915a3cfb-2f3e-477b-8a9d-5d86c30e4929.md).

### Priority

In Denmark, the only priorities commonly used is 'akut' and 'elektiv'. We have translated these to 'ASAP' and 'elective' in the recommended FHIR value set. To avoid other uses of the priority values, we have narrowed the value set down to only these two values. However, the binding is extensible, so if more priorities are needed they can be added as necessary.

### Handling future versions

In FHIR R5 and newer, significant changes have been made to the Encounter profile.

To be compatible with the changes to the value set bound to Encounter.class in FHIR R5 and newer, we recommend to restrict to using only the values from the FHIR R5 value set [Encounter class](https://terminology.hl7.org/ValueSet-encounter-class.html), which is a subset of the FHIR R4 value set [ActEncounterCode](https://hl7.org/fhir/R4/v3/ActEncounterCode/vs.html):

| | | |
| :--- | :--- | :--- |
| IMP | inpatient encounter | Encounters where patients are admitted typically for more than 12 hours. |
| AMB | ambulatory | Encounters where patients are not admitted. |
| OBSENC | observation encounter | Not used. |
| EMER | emergency | Encounters where patients are admitted to an emergency ward typically for up to 72 hours. |
| VR | virtual | Virtual encounters with patients typically using televideo, telephone, or other means of telepresence. |
| HH | home health | Encounters with patients in their own home. |

Note that Encounter.class has an extensible binding, so if a class coding not part of the bound value set is needed, it is allowed to use an alternate coding.

In order to support the addition of Encounter.plannedStartDate and Encounter.plannedEndDate in FHIR R5, the extensions [PlannedStartDate](./StructureDefinition-dk-core-planned-start-date.md) and [PlannedEndDate](./StructureDefinition-dk-core-planned-end-date.md) have been added to DkCore. However, note that in the R4 documentation it is stated that a planned start date could be given by placing period.start in the future, and setting the status to ‘planned’. As a consequence, this practice is also acceptable in the dk-core R4 version, but the use of plannedStart and plannedEnd extensions are encouraged to make transition to future FHIR versions easier.

**Usages:**

* Examples for this Profile: [Encounter/0c5e4905-5c2e-4254-8837-770c3724cd13](Encounter-0c5e4905-5c2e-4254-8837-770c3724cd13.md) and [Encounter/915a3cfb-2f3e-477b-8a9d-5d86c30e4929](Encounter-915a3cfb-2f3e-477b-8a9d-5d86c30e4929.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-encounter)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-encounter.csv), [Excel](StructureDefinition-dk-core-encounter.xlsx), [Schematron](StructureDefinition-dk-core-encounter.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-encounter",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-encounter",
  "version" : "3.5.0",
  "name" : "DkCoreEncounter",
  "title" : "Danish Core Encounter Profile",
  "status" : "active",
  "date" : "2025-12-19T17:27:08+01:00",
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
  "description" : "HL7 Denmark core profile for an encounter",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Encounter",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Encounter",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Encounter",
        "path" : "Encounter"
      },
      {
        "id" : "Encounter.extension",
        "path" : "Encounter.extension",
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
        "id" : "Encounter.extension:plannedStartDate",
        "path" : "Encounter.extension",
        "sliceName" : "plannedStartDate",
        "short" : "The planned start date/time (or admission date) of the encounter",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-planned-start-date"
            ]
          }
        ]
      },
      {
        "id" : "Encounter.extension:plannedEndDate",
        "path" : "Encounter.extension",
        "sliceName" : "plannedEndDate",
        "short" : "The planned end date/time (or discharge date) of the encounter",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-planned-end-date"
            ]
          }
        ]
      },
      {
        "id" : "Encounter.extension:careProvider",
        "path" : "Encounter.extension",
        "sliceName" : "careProvider",
        "short" : "The organization (facility) responsible for the care of the patient during this encounter",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-care-provider"
            ]
          }
        ]
      },
      {
        "id" : "Encounter.priority",
        "path" : "Encounter.priority",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-encounter-priority"
        }
      },
      {
        "id" : "Encounter.subject",
        "path" : "Encounter.subject",
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
        "id" : "Encounter.serviceProvider",
        "path" : "Encounter.serviceProvider",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
            ]
          }
        ]
      }
    ]
  }
}

```
