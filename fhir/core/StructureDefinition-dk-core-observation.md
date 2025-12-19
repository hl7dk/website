# Danish Core Observation Profile - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish Core Observation Profile**

## Resource Profile: Danish Core Observation Profile 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCoreObservation |

 
HL7 Denmark core profile for observations 

### Scope and usage

The Danish Core Observation profile is intended to represent observations for a variety of cases including:

* laboratory data
* results of using clinical assessment tools such as APGAR
* observations obtained in clinical assesments such as abdominal tenderness
* general health status such as pregnancy
* social history and anamnesis (Please be aware, an Observation must only include more than one code, if each code is true for the observation that actually happened, and not several observation as a result of an investigation. In this case, the ClinicalImpression resource should be used.)

> Note: The profile[DkCoreBasicObservation](./StructureDefinition-dk-core-basic-observation.md)is made to ensure a common structure of measurable and often used observations, such as vital signs, height and weight. When sharing these basic observations, DkCoreBasicObservation profile is recommended to use.

> Note: The profile[IPADkCoreObservation](./StructureDefinition-ipa-dk-core-observation.md)is enables implementers to serve DkCoreObservation's that also conforms to IPA through its RESTful IPA interfaces.

#### Codes

In a Observation resource, codes from CodeSystems are used to describe what is observed in the elements Observation.code.coding and Observation.component.code.coding. In these elements, multiple CodeSystems are specified to ensure similar use of relevant CodeSystems in a Danish context. Some observations may need to be grouped together to document critical observations, e.g. systolic and diastolic bloodpressure, which can be supported by the element Observation.component. [Click here for more information about Observation Grouping](http://hl7.org/fhir/observation.html#obsgrouping).

Multiple CodeSystems are added to the elements Observation.code.coding and Observation.component.code.coding, to ensure similar use of relevant CodeSystems in a Danish context. In addition, locally defined codes may be added. HL7 Denmark recommend adding these in a new slice using a system, that clearly states from where the code originate.

Two or more Observation.code.coding may be assigned in the same Observation.code, if each coding is true for the observation that actually happened. An example is [HeartRate.Poul.1974654](./Observation-HeartRate.Poul.1974654.md), where a LOINC, IEEE and NPU coding is used to describe the heart rate. Only one of the codings can be user selected, described by the element userSelected = `true`. An example is [ElsePainVRS](./Observation-ElsePainVRS.md), where the value[x] includes two codings with one of them being userSelected. If the codings and units does not represent the same meaning, one instance of an Observation can be derived from another, as described in section [Observation derived from other Observation](#observation-derived-from-other-observation).

None of the specified CodeSystems are required since each use case may call for different codes to represent the observations. The specified CodeSystems are included based on the [standard catalogue from the Danish Health Data Agency](https://sundhedsdatastyrelsen.dk/da/rammer-og-retningslinjer/om-referencearkitektur-og-standarder/standardkatalog), and Danish practice. In the following, some overall recommendations about the use of the code systems are provided:

* NPU codes are the preferred first choice when communicating observations from the laboratory area. NPU contains few codes outside the laboratory area. NPU is recommended to use in the standard catalogue from the Danish Health Data Agency.
* LOINC codes are generally not recommended, for clinical areas that NPU covers, because they are overlapping without being modelled in exactly the same way. For clinical areas not covered by NPU, LOINC can be used. LOINC is an international code system, and is the first choice for many FHIR-observations around the world. This also means that Observation standard-profiles often use LOINC codes, and that interoperability use cases using equipment/wearables intended for markets intentionally, very well may have build-in LOINC codes. LOINC is not recommended to use by the Danish Health Data Agency, but is included to support interoperability across countries in projects such as European Helath Data Space (EHDS).
* IEEE codes are the internal codes of many devices see [https://www.iso.org/standard/77338.html](https://www.iso.org/standard/77338.html). If an original observation from a device is represented, HL7-DK recommends using its original layout including the IEEE codes. Read more in IHE Personal Connected Health [https://wiki.ihe.net/index.php/Personal_Connected_Health](https://wiki.ihe.net/index.php/Personal_Connected_Health). IEEE is recommended to use in the standard catalogue from the Danish Health Data Agency.
* SKS does have a few observation codes in use, most are found in the 'R' Hierarchy - see e.g. [https://medinfo.dk/sks/brows.php](https://medinfo.dk/sks/brows.php). HL7-DK does not recommend the use of SKS codes from the 'ZZ' hierarchy as FHIR observation-codes as they are codes for procedures. SKS is recommended to use in the standard catalogue from the Danish Health Data Agency.
* MedCom codes are Danish codes, that are not part of SKS, but have been necessary in Danish interoperability projects through time. They are sometimes referred to as kiap-codes or MCS codes. They can be found here: [https://medcom.dk/standarder/koder/laboratorieomraadet/](https://medcom.dk/standarder/koder/laboratorieomraadet/) or here: [https://kiap.dk/kiap/praksis/services/koder/iupackoder.php](https://kiap.dk/kiap/praksis/services/koder/iupackoder.php). MedCom codes are not recommended to use by the Danish Health Data Agency, but are included as they are often used in MedComs standards.
* SNOMED CT codes are accepted in Denmark. SNOMED CT codes are relevant, for areas that NPU does not cover. Additionally, SNOMED CT is often used as a reference terminology, to give a common language of retrieval for data that have originally been defined or coded in some other way. If SNOMED CT is used as a reference terminology, it is often relevant to provide a SNOMED CT code, in addition to the original coding. This is also acceptable if the SNOMED CT concept is less granular than the original code, if each code is true for the observation that happened. SNOMED CT is stated to be usefull in the standard catalogue from the Danish Health Data Agency.

#### Subjects and performers

The primary use of this profile is to describe an observation performed on a patient. The patient must be represented using the [DkCorePatient](StructureDefinition-dk-core-patient.md) profile. However, it is still possible to select Observation.subject to be a Group, Device or Location. This is chosen to enable different uses of the profile e.g. a device calibration result is an observation of the device, not of the person that usually uses the device.

The performer of the observation may be different kinds of actors depending on the use case. The performer may be represented using [DkCorePractitioner](StructureDefinition-dk-core-practitioner.md), [DkCoreOrganization](StructureDefinition-dk-core-organization.md), [DkCorePatient](StructureDefinition-dk-core-patient.md), PractitionerRole, CareTeam or [DkCoreRelatedPerson](StructureDefinition-dk-core-related-person.md).

#### Quality of the Observation

If known, information about the method used for the observation can be included, in the element Observation.method, as this might affect the interpretation of the observation. In DkCoreObservation profile, a slice is added which includes an extensible ValueSet of commonly used SNOMED CT methods; `Estimation technique`, `Measurement technique`, and `Reported`. If a different method is used the ValueSet may be extended with SNOMED CT codes, or a new slice may be added.

If a known device is used to collect the observation, and information about the device is exchanged, the instance of the Device or DeviceMetric resource can be included in the same Bundle as the Observation instance. An example of usage is [Poul's home blood pressure measurement](./Bundle-ContinuaBundleWithDevice.md), where a Bundle includes both information about devices use to make the observations about the blood pressure.

#### Units

If the unit of measure is known, it shall be included in the Observation instance. It is assumed, that in most situations these units can be represented with [UCUM](http://unitsofmeasure.org). For this reason, UCUM is included as system in the element Observation.valueQuantity.system. However, special cases may arise where the unit is not represented by UCUM. In such case, the unit shall be included in the element Observation.valueQuantity.unit as a string. This Observation profile has implemented a rule known as a FHIR invariant that check that this condition holds true. The invariant is called **dk-core-observation-mandatory-units**, and ensures that when a valueQuantity.value is specified, a unit and/or code shall be present.

All NPU-codes include a unit internally in the observation-code. All the other code systems mentioned here, as well as the FHIR Observation resource, assume that the unit is provided in a separate attribute. Consequently, it is important to provide the same unit in valueQuantity.code and/or valueQuantity.unit, as provided in the NPU code. If consistency is not maintained, interpretation is impossible. No explicit rules to support the use of NPU consistently are implemented in this profile, so this should be considered before implementation.

#### Observation derived from other Observation

An Observation can refer to another, possibly contained Observation from which it is derived. This can be used in cases where the measuring Device provides the measured value in, for instance, another unit or precision than used in a particular exchange context.

An example is an oxygen saturation measured as a fraction in, say, the NPU code system. Exchanging the measurement as a vital signs Observation with oxygen saturation given as percent, the original NPU-based measurement can be contained and referenced using `Observation.derivedFrom`. The example can be found in [John's oxygen saturation measurement](./Observation-ObservationOxySatBasicObservationOrg.md).

**Usages:**

* Derived from this Profile: [Danish Core Basic Observation Profile](StructureDefinition-dk-core-basic-observation.md) and [Danish IPA Core Observation Profile](StructureDefinition-ipa-dk-core-observation.md)
* Refer to this Profile: [Danish Core Person ServiceRequest Profile](StructureDefinition-dk-core-person-servicerequest.md)
* Examples for this Profile: [Observation/CoincidentTimeStamp.0222](Observation-CoincidentTimeStamp.0222.md), [Observation/ElseConsciousness](Observation-ElseConsciousness.md), [Observation/ElsePainVRS](Observation-ElsePainVRS.md), [Observation/ElseUrinStix](Observation-ElseUrinStix.md)...Show 4 more,[Observation/ElsesTOBSscore](Observation-ElsesTOBSscore.md),[Observation/MaxConsciousness](Observation-MaxConsciousness.md),[Observation/MaxGlasgowComaScale](Observation-MaxGlasgowComaScale.md)and[Observation/ObservationOxySatObservation](Observation-ObservationOxySatObservation.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-observation)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-observation.csv), [Excel](StructureDefinition-dk-core-observation.xlsx), [Schematron](StructureDefinition-dk-core-observation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-observation",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation",
  "version" : "3.5.0",
  "name" : "DkCoreObservation",
  "title" : "Danish Core Observation Profile",
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
  "description" : "HL7 Denmark core profile for observations",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation",
        "constraint" : [
          {
            "key" : "dk-core-observation-mandatory-units",
            "severity" : "error",
            "human" : "If value is specified then unit and/or code must be specified",
            "expression" : "value.ofType(Quantity).value.exists() implies value.ofType(Quantity).unit.exists() or value.ofType(Quantity).code.exists()",
            "source" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation"
          }
        ]
      },
      {
        "id" : "Observation.code.coding",
        "path" : "Observation.code.coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Observation.code.coding:LOINC",
        "path" : "Observation.code.coding",
        "sliceName" : "LOINC",
        "short" : "LOINC code for the observation",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Observation.code.coding:LOINC.system",
        "path" : "Observation.code.coding.system",
        "min" : 1,
        "fixedUri" : "http://loinc.org"
      },
      {
        "id" : "Observation.code.coding:LOINC.code",
        "path" : "Observation.code.coding.code",
        "min" : 1
      },
      {
        "id" : "Observation.code.coding:SNOMEDCT",
        "path" : "Observation.code.coding",
        "sliceName" : "SNOMEDCT",
        "short" : "SNOMED CT code for the observation",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Observation.code.coding:SNOMEDCT.system",
        "path" : "Observation.code.coding.system",
        "min" : 1,
        "fixedUri" : "http://snomed.info/sct"
      },
      {
        "id" : "Observation.code.coding:SNOMEDCT.code",
        "path" : "Observation.code.coding.code",
        "min" : 1
      },
      {
        "id" : "Observation.code.coding:NPU",
        "path" : "Observation.code.coding",
        "sliceName" : "NPU",
        "short" : "NPU code for the observation. NPU codes are administred by the Danish Health Data Authority.",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Observation.code.coding:NPU.system",
        "path" : "Observation.code.coding.system",
        "min" : 1,
        "fixedUri" : "http://npu-terminology.org"
      },
      {
        "id" : "Observation.code.coding:NPU.code",
        "path" : "Observation.code.coding.code",
        "min" : 1
      },
      {
        "id" : "Observation.code.coding:IEEE",
        "path" : "Observation.code.coding",
        "sliceName" : "IEEE",
        "short" : "IEEE code for the observation",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Observation.code.coding:IEEE.system",
        "path" : "Observation.code.coding.system",
        "min" : 1,
        "fixedUri" : "urn:iso:std:iso:11073:10101"
      },
      {
        "id" : "Observation.code.coding:IEEE.code",
        "path" : "Observation.code.coding.code",
        "min" : 1
      },
      {
        "id" : "Observation.code.coding:MedCom",
        "path" : "Observation.code.coding",
        "sliceName" : "MedCom",
        "short" : "MedCom code for the observation. MedCom codes are administred by the MedCom.",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Observation.code.coding:MedCom.system",
        "path" : "Observation.code.coding.system",
        "min" : 1,
        "fixedUri" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-observation-codes"
      },
      {
        "id" : "Observation.code.coding:MedCom.code",
        "path" : "Observation.code.coding.code",
        "min" : 1
      },
      {
        "id" : "Observation.code.coding:SKS",
        "path" : "Observation.code.coding",
        "sliceName" : "SKS",
        "short" : "SKS code for the observation",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Observation.code.coding:SKS.system",
        "path" : "Observation.code.coding.system",
        "min" : 1,
        "fixedUri" : "urn:oid:1.2.208.176.2.4"
      },
      {
        "id" : "Observation.code.coding:SKS.code",
        "path" : "Observation.code.coding.code",
        "min" : 1
      },
      {
        "id" : "Observation.subject",
        "path" : "Observation.subject",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient",
              "http://hl7.org/fhir/StructureDefinition/Group",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-location",
              "http://hl7.org/fhir/StructureDefinition/Device"
            ]
          }
        ]
      },
      {
        "id" : "Observation.performer",
        "path" : "Observation.performer",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role",
              "http://hl7.org/fhir/StructureDefinition/CareTeam",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"
            ]
          }
        ]
      },
      {
        "id" : "Observation.value[x]",
        "path" : "Observation.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Observation.value[x]:valueQuantity",
        "path" : "Observation.value[x]",
        "sliceName" : "valueQuantity",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Quantity"
          }
        ]
      },
      {
        "id" : "Observation.value[x]:valueQuantity.system",
        "path" : "Observation.value[x].system",
        "patternUri" : "http://unitsofmeasure.org"
      },
      {
        "id" : "Observation.method.coding",
        "path" : "Observation.method.coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Observation.method.coding:SCTCode",
        "path" : "Observation.method.coding",
        "sliceName" : "SCTCode",
        "min" : 0,
        "max" : "1",
        "binding" : {
          "strength" : "example",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-TechniquesSCTCodes"
        }
      },
      {
        "id" : "Observation.method.coding:SCTCode.system",
        "path" : "Observation.method.coding.system",
        "min" : 1,
        "patternUri" : "http://snomed.info/sct|http://snomed.info/sct/554471000005108"
      },
      {
        "id" : "Observation.device",
        "path" : "Observation.device",
        "short" : "The device used for the measurement. It is recommended that when information about the device is sent, it is contained in the same Bundle as the Observation the device measured."
      },
      {
        "id" : "Observation.component.code.coding",
        "path" : "Observation.component.code.coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Observation.component.code.coding:LOINC",
        "path" : "Observation.component.code.coding",
        "sliceName" : "LOINC",
        "short" : "LOINC code for the observation",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Observation.component.code.coding:LOINC.system",
        "path" : "Observation.component.code.coding.system",
        "min" : 1,
        "fixedUri" : "http://loinc.org"
      },
      {
        "id" : "Observation.component.code.coding:LOINC.code",
        "path" : "Observation.component.code.coding.code",
        "min" : 1
      },
      {
        "id" : "Observation.component.code.coding:SNOMEDCT",
        "path" : "Observation.component.code.coding",
        "sliceName" : "SNOMEDCT",
        "short" : "SNOMED CT code for the observation",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Observation.component.code.coding:SNOMEDCT.system",
        "path" : "Observation.component.code.coding.system",
        "min" : 1,
        "fixedUri" : "http://snomed.info/sct"
      },
      {
        "id" : "Observation.component.code.coding:SNOMEDCT.code",
        "path" : "Observation.component.code.coding.code",
        "min" : 1
      },
      {
        "id" : "Observation.component.code.coding:NPU",
        "path" : "Observation.component.code.coding",
        "sliceName" : "NPU",
        "short" : "NPU code for the observation. NPU codes are administred by the Danish Health Data Authority.",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Observation.component.code.coding:NPU.system",
        "path" : "Observation.component.code.coding.system",
        "min" : 1,
        "fixedUri" : "http://npu-terminology.org"
      },
      {
        "id" : "Observation.component.code.coding:NPU.code",
        "path" : "Observation.component.code.coding.code",
        "min" : 1
      },
      {
        "id" : "Observation.component.code.coding:IEEE",
        "path" : "Observation.component.code.coding",
        "sliceName" : "IEEE",
        "short" : "IEEE code for the observation",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Observation.component.code.coding:IEEE.system",
        "path" : "Observation.component.code.coding.system",
        "min" : 1,
        "fixedUri" : "urn:iso:std:iso:11073:10101"
      },
      {
        "id" : "Observation.component.code.coding:IEEE.code",
        "path" : "Observation.component.code.coding.code",
        "min" : 1
      },
      {
        "id" : "Observation.component.code.coding:MedCom",
        "path" : "Observation.component.code.coding",
        "sliceName" : "MedCom",
        "short" : "MedCom code for the observation. MedCom codes are administred by the MedCom.",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Observation.component.code.coding:MedCom.system",
        "path" : "Observation.component.code.coding.system",
        "min" : 1,
        "fixedUri" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-observation-codes"
      },
      {
        "id" : "Observation.component.code.coding:MedCom.code",
        "path" : "Observation.component.code.coding.code",
        "min" : 1
      },
      {
        "id" : "Observation.component.code.coding:SKS",
        "path" : "Observation.component.code.coding",
        "sliceName" : "SKS",
        "short" : "SKS code for the observation.",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Observation.component.code.coding:SKS.system",
        "path" : "Observation.component.code.coding.system",
        "min" : 1,
        "fixedUri" : "urn:oid:1.2.208.176.2.4"
      },
      {
        "id" : "Observation.component.code.coding:SKS.code",
        "path" : "Observation.component.code.coding.code",
        "min" : 1
      },
      {
        "id" : "Observation.component.value[x]",
        "path" : "Observation.component.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Observation.component.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Quantity"
          }
        ]
      },
      {
        "id" : "Observation.component.value[x]:valueQuantity.system",
        "path" : "Observation.component.value[x].system",
        "patternUri" : "http://unitsofmeasure.org"
      }
    ]
  }
}

```
