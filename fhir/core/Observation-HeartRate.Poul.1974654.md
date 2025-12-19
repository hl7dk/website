# Poul's heart rate measurement - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Poul's heart rate measurement**

## Example Observation: Poul's heart rate measurement

Profiles: [Danish IPA Core Observation Profile](StructureDefinition-ipa-dk-core-observation.md), [PhdNumericObservation](http://hl7.org/fhir/uv/phd/STU1.1/StructureDefinition-PhdNumericObservation.html), [Vital Signs Profile](http://hl7.org/fhir/R4/vitalsigns.html), [Observation Heart Rate Profile](http://hl7.org/fhir/R4/heartrate.html)

**Observation Gateway Device**: [Device: identifier = IEEE 11073 System Identifier: FE-ED-DA-DA-DE-AD-BE-EF; manufacturer = Trifork; modelNumber = Telma (Android); type = MDC_MOC_VMS_MDS_AHD](Device-Telma.FEEDDADADEADBEEF.md)

**identifier**: C4F312FFFE53F2C9-3001749995-urn:oid:1.2.208.176.1.2-149546-93-{beat}/min-20230223T102408.00

**status**: Final

**category**: Vital signs, PHD generated Observation

**code**: MDC_PULS_RATE_NON_INV: Heart rate

**subject**: [Poul Hansen (no stated gender), DoB Unknown ( National unique individual identifier)](Patient-Poul.md)

**effective**: 2023-02-23 10:24:08+0100

**performer**: [Poul Hansen (no stated gender), DoB Unknown ( National unique individual identifier)](Patient-Poul.md)

**value**: 93 bpm(Details: UCUM code/min = '/min')

**device**: [Device: identifier = Ieee 11073 System Identifier: C4-F3-12-FF-FE-53-F2-C9,Bluetooth MAC address: Bluetooth Address as a device identifier#C4-F3-12-53-F2-C9; manufacturer = A&D Medical ; serialNumber = 5181000124; modelNumber = UA-651BLE ; type = MDC_MOC_VMS_MDS_SIMP](Device-BPMonitor.C4F312FFFE53F2C9.md)

**derivedFrom**: [Observation MDC_ATTR_TIME_ABS](Observation-CoincidentTimeStamp.0222.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "HeartRate.Poul.1974654",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/ipa-dk-core-observation",
      "http://hl7.org/fhir/uv/phd/StructureDefinition/PhdNumericObservation",
      "http://hl7.org/fhir/StructureDefinition/vitalsigns",
      "http://hl7.org/fhir/StructureDefinition/heartrate"
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
      "value" : "C4F312FFFE53F2C9-3001749995-urn:oid:1.2.208.176.1.2-149546-93-{beat}/min-20230223T102408.00"
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
        "code" : "8867-4",
        "display" : "Heart rate"
      },
      {
        "system" : "urn:iso:std:iso:11073:10101",
        "code" : "149546",
        "display" : "MDC_PULS_RATE_NON_INV"
      },
      {
        "system" : "http://npu-terminology.org",
        "code" : "NPU21692",
        "display" : "Heart—Systole; frequency = ? × 1/min"
      }
    ],
    "text" : "MDC_PULS_RATE_NON_INV: Heart rate"
  },
  "subject" : {
    "reference" : "Patient/Poul"
  },
  "effectiveDateTime" : "2023-02-23T10:24:08+01:00",
  "performer" : [
    {
      "reference" : "Patient/Poul"
    }
  ],
  "valueQuantity" : {
    "value" : 93,
    "unit" : "bpm",
    "system" : "http://unitsofmeasure.org",
    "code" : "/min"
  },
  "device" : {
    "reference" : "Device/BPMonitor.C4F312FFFE53F2C9"
  },
  "derivedFrom" : [
    {
      "reference" : "Observation/CoincidentTimeStamp.0222"
    }
  ]
}

```
