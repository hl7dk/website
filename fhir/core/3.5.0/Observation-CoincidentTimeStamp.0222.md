# Coincident time stamp from Poul's home blood pressure measurement - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Coincident time stamp from Poul's home blood pressure measurement**

## Example Observation: Coincident time stamp from Poul's home blood pressure measurement

Profiles: [Danish Core Observation Profile](StructureDefinition-dk-core-observation.md), [PhdCoincidentTimeStampObservation](http://hl7.org/fhir/uv/phd/STU1.1/StructureDefinition-PhdCoincidentTimeStampObservation.html)

**Observation Gateway Device**: [Device: identifier = IEEE 11073 System Identifier: FE-ED-DA-DA-DE-AD-BE-EF; manufacturer = Trifork; modelNumber = Telma (Android); type = MDC_MOC_VMS_MDS_AHD](Device-Telma.FEEDDADADEADBEEF.md)

**status**: Final

**code**: MDC_ATTR_TIME_ABS: Uses Absolute time clock

**subject**: [Poul Hansen (no stated gender), DoB Unknown ( National unique individual identifier)](Patient-Poul.md)

**effective**: 2023-02-23 10:24:34+0100

**performer**: [Poul Hansen (no stated gender), DoB Unknown ( National unique individual identifier)](Patient-Poul.md)

**value**: 2023-02-23 10:24:25+0100

**device**: [Device: identifier = Ieee 11073 System Identifier: C4-F3-12-FF-FE-53-F2-C9,Bluetooth MAC address: Bluetooth Address as a device identifier#C4-F3-12-53-F2-C9; manufacturer = A&D Medical ; serialNumber = 5181000124; modelNumber = UA-651BLE ; type = MDC_MOC_VMS_MDS_SIMP](Device-BPMonitor.C4F312FFFE53F2C9.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "CoincidentTimeStamp.0222",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation",
      "http://hl7.org/fhir/uv/phd/StructureDefinition/PhdCoincidentTimeStampObservation"
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
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "urn:iso:std:iso:11073:10101",
        "code" : "67975",
        "display" : "MDC_ATTR_TIME_ABS"
      }
    ],
    "text" : "MDC_ATTR_TIME_ABS: Uses Absolute time clock"
  },
  "subject" : {
    "reference" : "Patient/Poul"
  },
  "effectiveDateTime" : "2023-02-23T10:24:34.467+01:00",
  "performer" : [
    {
      "reference" : "Patient/Poul"
    }
  ],
  "valueDateTime" : "2023-02-23T10:24:25+01:00",
  "device" : {
    "reference" : "Device/BPMonitor.C4F312FFFE53F2C9"
  }
}

```
