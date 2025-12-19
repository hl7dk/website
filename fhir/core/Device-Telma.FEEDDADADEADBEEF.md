# Poul's remote patient monitoring app - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Poul's remote patient monitoring app**

## Example Device: Poul's remote patient monitoring app

Profile: [PhgDevice](http://hl7.org/fhir/uv/phd/STU1.1/StructureDefinition-PhgDevice.html)

**identifier**: IEEE 11073 System Identifier/FE-ED-DA-DA-DE-AD-BE-EF

**manufacturer**: Trifork

**modelNumber**: Telma (Android)

**type**: MDC_MOC_VMS_MDS_AHD: Continua compliant gateway

> **version****type**:MDC_REG_CERT_DATA_CONTINUA_VERSION: Continua version**value**: 7.0

> **version****type**:MDC_ID_PROD_SPEC_HW: Hardware version**value**: Samsung Tab S7+ (SM-T970)

> **version****type**:MDC_ID_PROD_SPEC_SW: Software version**value**: 1.2.0 (build 2662)

> **version****type**:MDC_ID_PROD_SPEC_FW: Firmware version**value**: Android 12 (API 31)

> **property****type**:MDC_REG_CERT_DATA_CONTINUA_CERT_DEV_LIST: Continua certified device list**valueCode**:BluetoothLE: Weighing scale,BluetoothLE: Blood pressure monitor,BluetoothLE: Pulse oximeter

> **property****type**:MDC_REG_CERT_DATA_CONTINUA_AHD_CERT_LIST: Continua certified Health&Fitness interfaces list**valueCode**:observation-upload-fhir: FHIR resource upload

> **property****type**:MDC_TIME_SYNC_PROTOCOL: Time synchronization protocol**valueCode**:MDC_TIME_SYNC_NTPV4: NTPV4 time synchronization

> **property****type**:regulation-status**valueCode**:Device is NOT regulated



## Resource Content

```json
{
  "resourceType" : "Device",
  "id" : "Telma.FEEDDADADEADBEEF",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/uv/phd/StructureDefinition/PhgDevice"]
  },
  "identifier" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://hl7.org/fhir/uv/phd/CodeSystem/ContinuaDeviceIdentifiers",
            "code" : "SYSID",
            "display" : "IEEE 11073 System Identifier"
          }
        ]
      },
      "system" : "urn:oid:1.2.840.10004.1.1.1.0.0.1.0.0.1.2680",
      "value" : "FE-ED-DA-DA-DE-AD-BE-EF"
    }
  ],
  "manufacturer" : "Trifork",
  "modelNumber" : "Telma (Android)",
  "type" : {
    "coding" : [
      {
        "system" : "urn:iso:std:iso:11073:10101",
        "code" : "531981",
        "display" : "MDC_MOC_VMS_MDS_AHD"
      }
    ],
    "text" : "MDC_MOC_VMS_MDS_AHD: Continua compliant gateway"
  },
  "version" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "urn:iso:std:iso:11073:10101",
            "code" : "532352",
            "display" : "MDC_REG_CERT_DATA_CONTINUA_VERSION"
          }
        ],
        "text" : "MDC_REG_CERT_DATA_CONTINUA_VERSION: Continua version"
      },
      "value" : "7.0"
    },
    {
      "type" : {
        "coding" : [
          {
            "system" : "urn:iso:std:iso:11073:10101",
            "code" : "531974",
            "display" : "MDC_ID_PROD_SPEC_HW"
          }
        ],
        "text" : "MDC_ID_PROD_SPEC_HW: Hardware version"
      },
      "value" : "Samsung Tab S7+ (SM-T970)"
    },
    {
      "type" : {
        "coding" : [
          {
            "system" : "urn:iso:std:iso:11073:10101",
            "code" : "531975",
            "display" : "MDC_ID_PROD_SPEC_SW"
          }
        ],
        "text" : "MDC_ID_PROD_SPEC_SW: Software version"
      },
      "value" : "1.2.0 (build 2662)"
    },
    {
      "type" : {
        "coding" : [
          {
            "system" : "urn:iso:std:iso:11073:10101",
            "code" : "531976",
            "display" : "MDC_ID_PROD_SPEC_FW"
          }
        ],
        "text" : "MDC_ID_PROD_SPEC_FW: Firmware version"
      },
      "value" : "Android 12 (API 31)"
    }
  ],
  "property" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "urn:iso:std:iso:11073:10101",
            "code" : "532353",
            "display" : "MDC_REG_CERT_DATA_CONTINUA_CERT_DEV_LIST"
          }
        ],
        "text" : "MDC_REG_CERT_DATA_CONTINUA_CERT_DEV_LIST: Continua certified device list"
      },
      "valueCode" : [
        {
          "coding" : [
            {
              "system" : "http://hl7.org/fhir/uv/phd/CodeSystem/ContinuaPHD",
              "code" : "32783"
            }
          ],
          "text" : "BluetoothLE: Weighing scale"
        },
        {
          "coding" : [
            {
              "system" : "http://hl7.org/fhir/uv/phd/CodeSystem/ContinuaPHD",
              "code" : "32775"
            }
          ],
          "text" : "BluetoothLE: Blood pressure monitor"
        },
        {
          "coding" : [
            {
              "system" : "http://hl7.org/fhir/uv/phd/CodeSystem/ContinuaPHD",
              "code" : "32772"
            }
          ],
          "text" : "BluetoothLE: Pulse oximeter"
        }
      ]
    },
    {
      "type" : {
        "coding" : [
          {
            "system" : "urn:iso:std:iso:11073:10101",
            "code" : "532355",
            "display" : "MDC_REG_CERT_DATA_CONTINUA_AHD_CERT_LIST"
          }
        ],
        "text" : "MDC_REG_CERT_DATA_CONTINUA_AHD_CERT_LIST: Continua certified Health&Fitness interfaces list"
      },
      "valueCode" : [
        {
          "coding" : [
            {
              "system" : "http://hl7.org/fhir/uv/phd/CodeSystem/ContinuaHFS",
              "code" : "7",
              "display" : "observation-upload-fhir"
            }
          ],
          "text" : "observation-upload-fhir: FHIR resource upload"
        }
      ]
    },
    {
      "type" : {
        "coding" : [
          {
            "system" : "urn:iso:std:iso:11073:10101",
            "code" : "68220",
            "display" : "MDC_TIME_SYNC_PROTOCOL"
          }
        ],
        "text" : "MDC_TIME_SYNC_PROTOCOL: Time synchronization protocol"
      },
      "valueCode" : [
        {
          "coding" : [
            {
              "system" : "urn:iso:std:iso:11073:10101",
              "code" : "532226",
              "display" : "MDC_TIME_SYNC_NTPV4"
            }
          ],
          "text" : "MDC_TIME_SYNC_NTPV4: NTPV4 time synchronization"
        }
      ]
    },
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://hl7.org/fhir/uv/phd/CodeSystem/ASN1ToHL7",
            "code" : "532354.0"
          }
        ],
        "text" : "regulation-status"
      },
      "valueCode" : [
        {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v2-0136",
              "code" : "Y"
            }
          ],
          "text" : "Device is NOT regulated"
        }
      ]
    }
  ]
}

```
