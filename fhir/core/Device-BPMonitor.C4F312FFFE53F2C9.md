# Poul's A&D blood pressure monitor - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Poul's A&D blood pressure monitor**

## Example Device: Poul's A&D blood pressure monitor

Profile: [PhdDevice](http://hl7.org/fhir/uv/phd/STU1.1/StructureDefinition-PhdDevice.html)

**identifier**: Ieee 11073 System Identifier/C4-F3-12-FF-FE-53-F2-C9, Bluetooth MAC address/C4-F3-12-53-F2-C9

**manufacturer**: A&D Medical 

**serialNumber**: 5181000124

**modelNumber**: UA-651BLE 

**type**: MDC_MOC_VMS_MDS_SIMP: Personal health device

### Specializations

| | | |
| :--- | :--- | :--- |
| - | **SystemType** | **Version** |
| * | MDC_DEV_SPEC_PROFILE_BP: Blood Pressure meter | 1 |

> **version****type**:MDC_REG_CERT_DATA_CONTINUA_VERSION: Continua version**value**: 4.1

> **version****type**:MDC_ID_PROD_SPEC_HW: Hardware version**value**: 0.00

> **version****type**:MDC_ID_PROD_SPEC_SW: Software version**value**: 0.00

> **version****type**:MDC_ID_PROD_SPEC_FW: Firmware version**value**: BLP009_02_005

> **property****type**:MDC_REG_CERT_DATA_CONTINUA_CERT_DEV_LIST: Continua certified device list**valueCode**:BluetoothLE: Blood pressure monitor

> **property****type**:MDC_TIME_SYNC_PROTOCOL: Time synchronization protocol**valueCode**:MDC_TIME_SYNC_NONE: No time synchronization

> **property****type**:regulation-status**valueCode**:Device is regulated

> **property****type**:mds-time-capab-real-time-clock**valueCode**:Real time clock is supported

> **property****type**:mds-time-capab-set-clock**valueCode**:Setting the real time clock is supported



## Resource Content

```json
{
  "resourceType" : "Device",
  "id" : "BPMonitor.C4F312FFFE53F2C9",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/uv/phd/StructureDefinition/PhdDevice"]
  },
  "identifier" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://hl7.org/fhir/uv/phd/CodeSystem/ContinuaDeviceIdentifiers",
            "code" : "SYSID",
            "display" : "Ieee 11073 System Identifier"
          }
        ]
      },
      "system" : "urn:oid:1.2.840.10004.1.1.1.0.0.1.0.0.1.2680",
      "value" : "C4-F3-12-FF-FE-53-F2-C9"
    },
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://hl7.org/fhir/uv/phd/CodeSystem/ContinuaDeviceIdentifiers",
            "code" : "BTMAC",
            "display" : "Bluetooth MAC address"
          }
        ]
      },
      "system" : "http://hl7.org/fhir/sid/eui-48/bluetooth",
      "value" : "C4-F3-12-53-F2-C9"
    }
  ],
  "manufacturer" : "A&D Medical ",
  "serialNumber" : "5181000124",
  "modelNumber" : "UA-651BLE ",
  "type" : {
    "coding" : [
      {
        "system" : "urn:iso:std:iso:11073:10101",
        "code" : "65573",
        "display" : "MDC_MOC_VMS_MDS_SIMP"
      }
    ],
    "text" : "MDC_MOC_VMS_MDS_SIMP: Personal health device"
  },
  "specialization" : [
    {
      "systemType" : {
        "coding" : [
          {
            "system" : "urn:iso:std:iso:11073:10101",
            "code" : "528391",
            "display" : "MDC_DEV_SPEC_PROFILE_BP"
          }
        ],
        "text" : "MDC_DEV_SPEC_PROFILE_BP: Blood Pressure meter"
      },
      "version" : "1"
    }
  ],
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
      "value" : "4.1"
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
      "value" : "0.00"
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
      "value" : "0.00"
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
      "value" : "BLP009_02_005 "
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
              "code" : "32775"
            }
          ],
          "text" : "BluetoothLE: Blood pressure monitor"
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
              "code" : "532224",
              "display" : "MDC_TIME_SYNC_NONE"
            }
          ],
          "text" : "MDC_TIME_SYNC_NONE: No time synchronization"
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
              "code" : "N"
            }
          ],
          "text" : "Device is regulated"
        }
      ]
    },
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://hl7.org/fhir/uv/phd/CodeSystem/ASN1ToHL7",
            "code" : "68219.0"
          }
        ],
        "text" : "mds-time-capab-real-time-clock"
      },
      "valueCode" : [
        {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v2-0136",
              "code" : "Y"
            }
          ],
          "text" : "Real time clock is supported"
        }
      ]
    },
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://hl7.org/fhir/uv/phd/CodeSystem/ASN1ToHL7",
            "code" : "68219.1"
          }
        ],
        "text" : "mds-time-capab-set-clock"
      },
      "valueCode" : [
        {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v2-0136",
              "code" : "Y"
            }
          ],
          "text" : "Setting the real time clock is supported"
        }
      ]
    }
  ]
}

```
