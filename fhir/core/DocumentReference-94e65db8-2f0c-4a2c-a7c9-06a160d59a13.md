# PLR-DK DocumentReference instance of DkCoreMinimalDocumentReference. - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PLR-DK DocumentReference instance of DkCoreMinimalDocumentReference.**

## Example DocumentReference: PLR-DK DocumentReference instance of DkCoreMinimalDocumentReference.



## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "94e65db8-2f0c-4a2c-a7c9-06a160d59a13",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-minimaldocumentreference"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Practitioner",
      "id" : "42cb9200-f421-4d08-8391-7d51a2503cb4",
      "meta" : {
        "profile" : [
          "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner"
        ]
      },
      "name" : [
        {
          "family" : "Andersen",
          "given" : ["Sidsel"]
        }
      ]
    },
    {
      "resourceType" : "Organization",
      "id" : "8fa7df76-bec2-4fe2-9a44-750030a0eda0",
      "meta" : {
        "profile" : [
          "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
        ]
      },
      "identifier" : [
        {
          "system" : "urn:oid:1.2.208.176.1.1",
          "value" : "61741000016007"
        }
      ],
      "name" : "Lægerne Hasseris Bymidte"
    },
    {
      "resourceType" : "Patient",
      "id" : "37628912-7816-47a3-acd8-396b610be142",
      "meta" : {
        "profile" : [
          "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
        ]
      },
      "identifier" : [
        {
          "system" : "urn:oid:1.2.208.176.1.2",
          "value" : "0201919990"
        }
      ],
      "name" : [
        {
          "use" : "official",
          "family" : "Lauridsen",
          "given" : ["Else", "Test"]
        }
      ],
      "gender" : "female",
      "birthDate" : "1991-01-02"
    }
  ],
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DocumentReference.version",
      "valueString" : "1.0.0"
    }
  ],
  "masterIdentifier" : {
    "use" : "usual",
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:bf1bb63b-d405-4dfe-9810-37b16b333a01"
  },
  "identifier" : [
    {
      "value" : "urn:uuid:7c596b9a-112e-4386-ae71-5ecdd3ed7c50"
    }
  ],
  "status" : "current",
  "type" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "11450-4",
        "display" : "Problem list - Reported"
      }
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "urn:oid:1.2.208.184.100.9",
          "code" : "001",
          "display" : "Klinisk rapport"
        }
      ]
    }
  ],
  "subject" : {
    "reference" : "#37628912-7816-47a3-acd8-396b610be142"
  },
  "author" : [
    {
      "reference" : "#8fa7df76-bec2-4fe2-9a44-750030a0eda0"
    }
  ],
  "authenticator" : {
    "reference" : "#42cb9200-f421-4d08-8391-7d51a2503cb4"
  },
  "securityLabel" : [
    {
      "coding" : [
        {
          "code" : "N"
        }
      ]
    }
  ],
  "content" : [
    {
      "attachment" : {
        "contentType" : "application/fhir+json",
        "language" : "da",
        "url" : "DOC001.XML",
        "title" : "Diagnoseoversigt for 2509479989",
        "creation" : "2024-05-01T12:00:00+01:00"
      },
      "format" : {
        "system" : "urn:oid:1.2.208.184.100.10",
        "code" : "urn:ad:dk:medcom:plr-v1.0:full",
        "display" : "DK PLR schema"
      }
    }
  ],
  "context" : {
    "facilityType" : {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/554471000005108",
          "code" : "394761003",
          "display" : "almen lægepraksis"
        }
      ]
    },
    "practiceSetting" : {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/554471000005108",
          "code" : "408443003",
          "display" : "almen medicin"
        }
      ]
    },
    "sourcePatientInfo" : {
      "reference" : "#37628912-7816-47a3-acd8-396b610be142"
    }
  }
}

```
