# Poul's daily weighing on Feb. 21st - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Poul's daily weighing on Feb. 21st**

## Example Observation: Poul's daily weighing on Feb. 21st

Profiles: [Danish IPA Core Observation Profile](StructureDefinition-ipa-dk-core-observation.md), [PhdNumericObservation](http://hl7.org/fhir/uv/phd/STU1.1/StructureDefinition-PhdNumericObservation.html), [Vital Signs Profile](http://hl7.org/fhir/R4/vitalsigns.html), [Observation Body Weight Profile](http://hl7.org/fhir/R4/bodyweight.html)

**Observation Gateway Device**: [Device: identifier = IEEE 11073 System Identifier: FE-ED-DA-DA-DE-AD-BE-EF; manufacturer = Trifork; modelNumber = Telma (Android); type = MDC_MOC_VMS_MDS_AHD](Device-Telma.FEEDDADADEADBEEF.md)

**identifier**: 606405FFFECFC604-3001749995-urn:oid:1.2.208.176.1.2-188736-74.0-kg-20230221T083640.00

**status**: Final

**category**: Vital signs, PHD generated Observation

**code**: MDC_MASS_BODY_ACTUAL: Body weight

**subject**: [Poul Hansen (no stated gender), DoB Unknown ( National unique individual identifier)](Patient-Poul.md)

**effective**: 2023-02-21 08:36:40+0100

**performer**: [Poul Hansen (no stated gender), DoB Unknown ( National unique individual identifier)](Patient-Poul.md)

**value**: 74 kg(Details: UCUM codekg = 'kg')

**device**: [Device: identifier = IEEE 11073 System Identifier: 60-64-05-FF-FE-CF-C6-04,Bluetooth MAC address: Bluetooth Address as a device identifier#60-64-05-CF-C6-04; manufacturer = A&D Medical ; serialNumber = 5180400664; modelNumber = UC-352BLE ; type = MDC_MOC_VMS_MDS_SIMP](Device-WeightScale.606405FFFECFC604.md)

**derivedFrom**: [http://example.org/fhir/CoincidentTimeStamp.0123](http://example.org/fhir/CoincidentTimeStamp.0123)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "Weight.Poul.230221",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/ipa-dk-core-observation",
      "http://hl7.org/fhir/uv/phd/StructureDefinition/PhdNumericObservation",
      "http://hl7.org/fhir/StructureDefinition/vitalsigns",
      "http://hl7.org/fhir/StructureDefinition/bodyweight"
    ]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/observation-gatewayDevice",
      "valueReference" : {
        "reference" : "Device/Telma.FEEDDADADEADBEEF"
      }
    }
  ],
  "identifier" : [
    {
      "value" : "606405FFFECFC604-3001749995-urn:oid:1.2.208.176.1.2-188736-74.0-kg-20230221T083640.00"
    }
  ],
  "status" : "final",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "vital-signs",
          "display" : "Vital signs"
        }
      ]
    },
    {
      "coding" : [
        {
          "system" : "http://hl7.org/fhir/uv/phd/CodeSystem/PhdObservationCategories",
          "code" : "phd-observation",
          "display" : "PHD generated Observation"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "29463-7",
        "display" : "Body weight"
      },
      {
        "system" : "urn:iso:std:iso:11073:10101",
        "code" : "188736",
        "display" : "MDC_MASS_BODY_ACTUAL"
      },
      {
        "system" : "http://npu-terminology.org",
        "code" : "NPU03804",
        "display" : "Pt—Body; mass = ? kg"
      }
    ],
    "text" : "MDC_MASS_BODY_ACTUAL: Body weight"
  },
  "subject" : {
    "reference" : "Patient/Poul"
  },
  "effectiveDateTime" : "2023-02-21T08:36:40+01:00",
  "performer" : [
    {
      "reference" : "Patient/Poul"
    }
  ],
  "valueQuantity" : {
    "value" : 74,
    "unit" : "kg",
    "system" : "http://unitsofmeasure.org",
    "code" : "kg"
  },
  "device" : {
    "reference" : "Device/WeightScale.606405FFFECFC604"
  },
  "derivedFrom" : [
    {
      "reference" : "http://example.org/fhir/CoincidentTimeStamp.0123"
    }
  ]
}

```
