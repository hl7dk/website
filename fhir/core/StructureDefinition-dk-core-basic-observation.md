# Danish Core Basic Observation Profile - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish Core Basic Observation Profile**

## Resource Profile: Danish Core Basic Observation Profile 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-basic-observation | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCoreBasicObservation |

 
HL7 Denmark core profile for basic observations, which is a profiling of DkCoreObservation. 

### Scope and usage

The Danish Core Basic Observation profile is intended to represent basis observations performed on a subject. The purpose of this profile is to ensure a common structure of frequently measured and shared observations. A basic observation is, in a Danish context, a measurable and often used value. This can be observations such as vital signs and basic observations like height and weight.

The profile is a further profiling of DkCoreObservation and in most cases it complies to [HL7's Vital Signs profile](http://hl7.org/fhir/R4/vitalsigns.html). Instances will not be compliant with HL7's Vital Signs profile when using the code `59408-5 (Oxygen saturation in Arterial blood by Pulse oximetry)` from the LOINC ValueSet and the unit `{fraction} (fraction)` from the UCUM ValueSet, as these codes are not included in the ValueSets in the Vital Signs profile.

#### Codes

It is required to include a LOINC code at Observation.code. The [LOINC ValueSet](http://hl7.org/fhir/R4/valueset-observation-vitalsignresult.html) used in the HL7's Vital Signs profile is expanded with the code `59408-5 "Oxygen saturation in Arterial blood by Pulse oximetry"` because it is an often used, measurable parameter in Denmark.

Further, [DK Core NPU Basic Observation](./ValueSet-dk-core-NPUBasicObservation.md), [DK Core IEEE Basic Observation](./ValueSet-dk-core-IEEEBasicObservation.md), and [DK Core SNOMED CT Basic Observation](./ValueSet-dk-core-SCTBasicObservation.md) ValueSets are added to the given slices, and codes from these ValueSets are optional to include.

An overall guidance of using the ValueSets follows the guidance of DkCoreObservation and is further specified here:

* NPU codes can be used when communicating observations from the laboratory area. NPU also covers codes concerning basic observations. For this reason, NPU is included.
* IEEE codes can be used, if the original observation of the device is represented with IEEE codes.
* SNOMED CT codes are accepted in Denmark. They can be included as a reference terminology, where it is used in addition to the original coding. SNOMED CT codes can also be used in areas where NPU does not cover.

The codes in the three ValueSets are selected to best represent the codes included in the LOINC ValueSet. The following describes the possible use of additional codes:

* No meaningful code: Not all LOINC codes are represented in ValueSets, as no meaningful codes exists in the terminology. An example is that the `8478-0 Mean blood pressure` does not exists in the NPUBasicObservation ValueSet.
* One meaningful code: When one meaningful code is included from the ValueSet, as the code best represents the LOINC code. An example is the `150022 MDC_PRESS_BLD_NONINV_DIA` from the IEEE ValueSet which represents `8462-4 Diastolic blood pressure` the best.
* Multiple meaningful codes: Multiple codes in a ValueSet may be used to represent a code from the LOINC ValueSet, which may be relevant to express a higher level of granularity. An example is multiple codes representing systolic blood pressure in the SNOMED CT ValueSet depending on the circumstances of the measurement, which all represents `8480-6 Systolic blood pressure`.

If a measurement is documented in a system or device e.g. with a SNOMED CT or IEEE code, but no LOINC code. The system must map the SNOMED CT or IEEE code to the LOINC code before exchanging it. Otherwise, it will not accommodate the requirements of the DkCoreBasicObservation profile, since a LOINC code is required.

#### Units

The [UCUM ValueSet](http://hl7.org/fhir/ValueSet/ucum-vitals-common) used in HL7's Vital Signs profile is extended in the [DK Core UCUM Basic Units ValueSet](./ValueSet-dk-core-UCUM-BasicUnits.md) to include a code for fraction `{fraction} fraction`. In the NPU ValueSet, this unit is used for the code `NPU27280 Hb(Fe; O2-bind.;aB)—Oxygen(O2); sat.(Pulse oximetry) = ?`, why it is included. However, using the fraction unit is not compliant with [HL7's Vital Signs profile](http://hl7.org/fhir/R4/vitalsigns.html), here the unit `% percent` is used for the LOINC code `"2708-6 "Oxygen saturation in Arterial blood"`. The example [John's oxygen saturation measurement (Observation)](./Observation-ObservationOxySatObservation.md) illustrates how this can be handled by deriving the instance with the NPU code from an instance with a LOINC and IEEE code.

The DK Core UCUM Basic Units ValueSet is added to the elements Observation.valueQuantity and Observation.component.valueQuantity.

#### Examples

The table below includes instances of the DkCoreBasicObservation used to represent observations used to evaluate the patient based on different procedures used in Denmark.

> Note: The current FHIR validator (per Nowember 2023) validates Observation instances with LOINC-codes from the[international Vital Signs profile](http://hl7.org/fhir/R4/vitalsigns.html)against the requirements in this profile. This have influenced instances in DkCore by 1) removal of the LOINC-code`"2708-6 "Oxygen saturation in Arterial blood"`in[John's oxygen saturation measurement (Observation)](./Observation-ObservationOxySatObservation.md)which means it cannot be an instance of DkCoreBasicObservation but has to obey from DkCoreObservation, and 2) addition of effective timestamps in[ObservationOxySatBasicObservationOrg](./Observation-ObservationOxySatBasicObservationOrg.md)and[ObservationRespiratoryBasicObservation](./Observation-ObservationRespiratoryBasicObservation.md).

| | |
| :--- | :--- |
| [Glasgow Coma Scale (GCS)](./Observation-MaxGlasgowComaScale.md) | This example includes the relevant observations related to Glasgow Coma Scale. This scale is used to assess the level of consciousness in people with brain damage. |
| [TOKS (Danish: Tidlig opsporing af kritisk sygdom)](./Bundle-MaxTOKS.md) | TOKS is a scoring system used to determine if a patient is in a critical state at an early state. The example includes basic observations, such as heartrate, temperature and more, as well as a Glasgow Coma Scale. |
| [TOBS (Danish: Tidlig opsporing af begyndende sygdom)](./Bundle-ElsesTOBS.md) | TOBS is a scoring system used to determine if a citizen is in the early state of illnesses. The example includes basic observations, such as heartrate, temperature, TOBS score and more, as well as a reference to the performer of the observations. |
| [Vital signs panel](./Observation-MaxVitalSignsPanel.md) | An example of observations included in a vital signs panel. From the element Observation.hasMember, the panel observations are referenced. |
| [John's oxygen saturation measurement (Observation)](./Observation-ObservationOxySatObservation.md) | This example suggests a way to handle the oxygen saturation case, where the original measurement was reported in '%' by a device or typed in manually, and then 'translated' to the NPU system, which requires the value to be unitless. |

**Usages:**

* Examples for this Profile: [Observation/ElseBloodPressure](Observation-ElseBloodPressure.md), [Observation/ElseBodyTemperature](Observation-ElseBodyTemperature.md), [Observation/ElseHeartRate](Observation-ElseHeartRate.md), [Observation/ElseRespirationRate](Observation-ElseRespirationRate.md)...Show 8 more,[Observation/MaxBloodPressure](Observation-MaxBloodPressure.md),[Observation/MaxBodyTemperature](Observation-MaxBodyTemperature.md),[Observation/MaxHeartRate](Observation-MaxHeartRate.md),[Observation/MaxRespirationRate](Observation-MaxRespirationRate.md),[Observation/MaxSaturation](Observation-MaxSaturation.md),[Observation/MaxVitalSignsPanel](Observation-MaxVitalSignsPanel.md),[Observation/ObservationOxySatBasicObservationOrg](Observation-ObservationOxySatBasicObservationOrg.md)and[Observation/ObservationRespiratoryBasicObservation](Observation-ObservationRespiratoryBasicObservation.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-basic-observation)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-basic-observation.csv), [Excel](StructureDefinition-dk-core-basic-observation.xlsx), [Schematron](StructureDefinition-dk-core-basic-observation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-basic-observation",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-basic-observation",
  "version" : "3.5.0",
  "name" : "DkCoreBasicObservation",
  "title" : "Danish Core Basic Observation Profile",
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
  "description" : "HL7 Denmark core profile for basic observations, which is a profiling of DkCoreObservation.",
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
  "type" : "Observation",
  "baseDefinition" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation"
      },
      {
        "id" : "Observation.category",
        "path" : "Observation.category",
        "min" : 1,
        "max" : "1",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
              "code" : "vital-signs"
            }
          ]
        }
      },
      {
        "id" : "Observation.code.coding",
        "path" : "Observation.code.coding",
        "min" : 1
      },
      {
        "id" : "Observation.code.coding:LOINC",
        "path" : "Observation.code.coding",
        "sliceName" : "LOINC",
        "min" : 1,
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-LoincBasicObservation"
        }
      },
      {
        "id" : "Observation.code.coding:SNOMEDCT",
        "path" : "Observation.code.coding",
        "sliceName" : "SNOMEDCT",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-SCTBasicObservation"
        }
      },
      {
        "id" : "Observation.code.coding:NPU",
        "path" : "Observation.code.coding",
        "sliceName" : "NPU",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-NPUBasicObservation"
        }
      },
      {
        "id" : "Observation.code.coding:IEEE",
        "path" : "Observation.code.coding",
        "sliceName" : "IEEE",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-IEEEBasicObservation"
        }
      },
      {
        "id" : "Observation.value[x]:valueQuantity",
        "path" : "Observation.value[x]",
        "sliceName" : "valueQuantity",
        "type" : [
          {
            "code" : "Quantity"
          }
        ]
      },
      {
        "id" : "Observation.value[x]:valueQuantity.code",
        "path" : "Observation.value[x].code",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-UCUM-BasicUnits"
        }
      },
      {
        "id" : "Observation.component.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "type" : [
          {
            "code" : "Quantity"
          }
        ]
      },
      {
        "id" : "Observation.component.value[x]:valueQuantity.code",
        "path" : "Observation.component.value[x].code",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-UCUM-BasicUnits"
        }
      }
    ]
  }
}

```
