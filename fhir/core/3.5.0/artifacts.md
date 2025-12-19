# Artifacts Summary - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Danish Core Basic Observation Profile](StructureDefinition-dk-core-basic-observation.md) | HL7 Denmark core profile for basic observations, which is a profiling of DkCoreObservation. |
| [Danish Core Condition Profile](StructureDefinition-dk-core-condition.md) | HL7 Denmark core profile for professionally asserted conditions, as specified by danish health and social care organizations |
| [Danish Core Encounter Profile](StructureDefinition-dk-core-encounter.md) | HL7 Denmark core profile for an encounter |
| [Danish Core Location Profile](StructureDefinition-dk-core-location.md) | HL7 Denmark core profile for locations |
| [Danish Core Minimal DocumentReference Profile](StructureDefinition-dk-core-minimaldocumentreference.md) | HL7 Denmark core profile for a Minimal DocumentReference inherited from IHE MHD Minimal DocumentReference |
| [Danish Core Observation Profile](StructureDefinition-dk-core-observation.md) | HL7 Denmark core profile for observations |
| [Danish Core Organization Profile](StructureDefinition-dk-core-organization.md) | HL7 Denmark core profile for a danish health organization |
| [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md) | HL7 Denmark core profile for a patient |
| [Danish Core Person ServiceRequest Profile](StructureDefinition-dk-core-person-servicerequest.md) | HL7 Denmark core profile for requesting a service, such as diagnostic investigations, nursing services, treatments, and more for a Patient. |
| [Danish Core Practitioner Profile](StructureDefinition-dk-core-practitioner.md) | HL7 Denmark core profile for health professionals and other actors relevant in citizen and patient pathways |
| [Danish Core PractitionerRole Profile](StructureDefinition-dk-core-practitioner-role.md) | HL7 Denmark core profile for health professional roles |
| [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md) | HL7 Denmark core profile for a related person |
| [Danish IPA Core Condition Profile](StructureDefinition-ipa-dk-core-condition.md) | HL7 Denmark core profile for IPA and DK Core compliant conditions |
| [Danish IPA Core Observation Profile](StructureDefinition-ipa-dk-core-observation.md) | HL7 Denmark core profile for IPA and DK Core compliant observations |
| [Danish IPA Core Patient Profile](StructureDefinition-ipa-dk-core-patient.md) | HL7 Denmark core profile for IPA and DK Core compliant patients |
| [Danish IPA Core Practitioner Profile](StructureDefinition-ipa-dk-core-practitioner.md) | HL7 Denmark core profile for IPA and DK Core compliant practitioners |
| [Danish IPA Core PractitionerRole Profile](StructureDefinition-ipa-dk-core-practitionerrole.md) | HL7 Denmark core profile for IPA and DK Core compliant practitionerroles |

### Structures: Data Type Profiles 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Danish Central Business Register (CVR) Identifier](StructureDefinition-dk-core-cvr-identifier.md) | Identifier holding a danish[CVR](https://datacvr.virk.dk/data/)number. |
| [Danish Central Person Register (CPR) Identifier](StructureDefinition-dk-core-cpr-identifier.md) | This structure holds the danish[CPR](https://cpr.dk/)identifier |
| [Danish Health Professionals Authorization Identifier](StructureDefinition-dk-core-authorization-identifier.md) | Identifier holding the official[authorization identifier](https://en.stps.dk/en/health-professionals-and-authorities/online-register-registered-health-professionals/)for a practitioner. |
| [Decentralised eCPR, called D-eCPR](StructureDefinition-dk-core-d-ecpr-identifier.md) | This strucure holds the danish[D-eCPR](https://www.nspop.dk/pages/viewpage.action?pageId=226757583#eCPRFormater(XeCPRogDeCPR)-Formatetfordecentraleerstatningspersonnumre-D-eCPR)identifier, which is often used by the Danish regions. |
| [GLN Identifier](StructureDefinition-dk-core-gln-identifier.md) | Identifier holding a 13 digit GLN |
| [Kombit Organsation Identifier](StructureDefinition-dk-core-kombit-org-identifier.md) | Identifier holding the organization code issued by KOMBIT |
| [National eCPR service, called X-eCPR](StructureDefinition-dk-core-x-ecpr-identifier.md) | This strucure holds the danish[X-eCPR](https://www.nspop.dk/pages/viewpage.action?pageId=226757583#eCPRFormater(XeCPRogDeCPR)-Formatetfornationaleerstatningspersonnumre-X-eCPR)identifier, maintained by the Danish Health Data Authority. |
| [Producent Id](StructureDefinition-dk-core-producent-id.md) | Offical MedCom code describing the producer of lab results |
| [SOR Identifier](StructureDefinition-dk-core-sor-identifier.md) | Identifier holding the official SOR identifier for a danish healthcare organization |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CareProvider](StructureDefinition-dk-core-care-provider.md) | The organization (facility) responsible for the care of the patient during this encounter |
| [ConditionLastAssertedDate](StructureDefinition-ConditionLastAssertedDate.md) | Extension for the last date a Condition-instance was confirmed valid in its current state. E.g. with its current clinical- and verification status, stage and severity. Typically the last performed follow-up |
| [Danish Core Municipality codes](StructureDefinition-dk-core-municipalityCodes.md) | Identifier holding the official identifier for a danish municipality |
| [Danish Core Regional Sub Division Codes Extension](StructureDefinition-dk-core-RegionalSubDivisionCodes.md) | Identifier holding the official organization identifier for a danish region |
| [HL7 Denmark core DocumentReference Version ID extension](StructureDefinition-dk-core-documentreference-version-id-extension.md) | Extension containing information about the version of the DocumentReference for a specific standard. The version is included in the R5 version of the resource. |
| [NotFollowedAnymore](StructureDefinition-NotFollowedAnymore.md) | Extension for the date where a condition lost focus in a specific clinical context |
| [PlannedEndDate](StructureDefinition-dk-core-planned-end-date.md) | The planned end date/time (or discharge date) of the encounter |
| [PlannedStartDate](StructureDefinition-dk-core-planned-start-date.md) | The planned start date/time (or admission date) of the encounter |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [DK Core LOINC Basic Observations](ValueSet-dk-core-LoincBasicObservation.md) | LOINC codes describing Basic Observations usable in Denmark. |
| [DK Core Marital Status](ValueSet-dk-marital-status.md) | This value set defines the set of codes that can be used to indicate the marital status of a person in Denmark. |
| [DK Core NPU Basic Observation](ValueSet-dk-core-NPUBasicObservation.md) | NPU codes for Basic Observations usable in Denmark |
| [DK Core SNOMED CT Basic Observation](ValueSet-dk-core-SCTBasicObservation.md) | SNOMED CT codes for Basic Observations usable in Denmark |
| [DK Core UCUM Basic Units](ValueSet-dk-core-UCUM-BasicUnits.md) | UCUM codes to represent units for basic Observations usable in Denmark |
| [DK D-eCPR OID values](ValueSet-DkCoreDeCPRValueSet.md) | DK D-eCPR OID values |
| [DK Extended Patient Contact Relationship](ValueSet-extended-patient-contactrelationship.md) | DK Extended Patient Contact Relationship |
| [DK Municipality Codes](ValueSet-dk-core-MunicipalityCodes.md) | Municipality codes used in Denmark |
| [DK Profession Group](ValueSet-DkCoreProfessionGroupValueSet.md) | DK Profession Group codes |
| [DK Regional Subdivision Codes](ValueSet-dk-core-RegionalSubDivisionCodes.md) | Subdivision codes (Regional codes) used in Denmark |
| [DK Related Person Relationship Types](ValueSet-dk-core-RelatedPersonRelationshipTypes.md) | DK Related Person Relationship Types |
| [DK SOR Organization Type](ValueSet-sor-organization-type.md) | Value set used for indicating the organization type for organizations from SOR |
| [DK SOR Practice Setting Code](ValueSet-dk-core-practice-setting-code.md) | Values used for the document metadata attribute practiceSettingCode, which is an attribute specifying the clinical specialty where the act that resulted in the document was performed (e.g., Family Practice, Laboratory, Radiology). The value set is based on a subset of the code list from the SOR lookup table 'SOR-Kliniske specialer' (https://sor.sum.dsdn.dk/lookupdata/#clinical_speciality, accessable on Sundhedsdatanettet (SDN)), which is based on SNOMED CT codes. |
| [DK TechniquesSCTCodes](ValueSet-dk-core-TechniquesSCTCodes.md) | SNOMED CT Codes for the technique used when obtaining an observation |
| [DK codes for ServiceRequest](ValueSet-dk-core-servicerequest-codes.md) | Value set used to describe Danish healthcare services |
| [DK priority codes](ValueSet-dk-core-priority-codes.md) | DK Codes for priority |
| [DK priority codes for encounters](ValueSet-dk-core-encounter-priority.md) | Value set used for indicating priority of an encounter |
| [Dk Core IEEE Basic Observation](ValueSet-dk-core-IEEEBasicObservation.md) | IEEE MDC codes for Basic Observations usable in Denmark |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [DK Address Type](CodeSystem-address-type-dk-supplement.md) | The type of an address (physical / postal) |
| [DK Address Use](CodeSystem-address-use-dk-supplement.md) | The use of an address |
| [DK Administrative Gender Supplement](CodeSystem-administrative-gender-supplement.md) | CodeSystem supplement with danish translations for administrative gender |
| [DK CareTeam Status](CodeSystem-care-team-status-dk-supplement.md) | Indicates the status of the care team. |
| [DK Consent State](CodeSystem-consent-state-codes-dk-supplement.md) | Indicates the state of the consent |
| [DK Days Of Week](CodeSystem-days-of-week-dk-supplement.md) | The days of the week. |
| [DK Decentralised eCPR Systems](CodeSystem-dk-core-d-ecpr-codes.md) | DK |
| [DK Episode Of Care Status](CodeSystem-episode-of-care-status-dk-supplement.md) | The status of the episode of care. |
| [DK Greenland Municipality Codes](CodeSystem-dk-core-municipality-codes-greenland.md) | Greenland municipality codes as defined by https://www.iso.org/obp/ui/#iso:code:3166:GL and https://cpr.dk/cpr-systemet/kommunesammenlaegninger-opdeling/groenland-2018/ |
| [DK Marital Statuses](CodeSystem-dk-marital-status.md) | DK marital statuses |
| [DK Municipality Codes](CodeSystem-dk-core-municipality-codes.md) | Municipality codes as defined by https://danmarksadresser.dk/adressedata/kodelister/kommunekodeliste/ and https://sundhedsdatastyrelsen.dk/-/media/sds/filer/rammer-og-retningslinjer/patientregistrering/relaterede/kommuneklassifikation.pdf |
| [DK Profession Group Codes](CodeSystem-DkCoreProfessionGroupCodes.md) | DK health ProfessionGroup codes as defined by https://www.retsinformation.dk/eli/lta/2019/731, and derived from http://autregwebservice.sst.dk/autregservice.asmx/GetAllProfessionGroups. Code (5176) was not uniqe, and have been converted to 5176a and 5176b |
| [DK Publication Status](CodeSystem-publication-status-dk-supplement.md) | The lifecycle status of a Value Set or Concept Map. |
| [DK Regional Subdivision Codes](CodeSystem-dk-core-regional-subdivision-codes.md) | Subdivision codes (Regional codes) used in Denmark as found on https://www.iso.org/obp/ui/#iso:code:3166:DK |
| [DK Related Person Relationship Codes](CodeSystem-dk-relatedperson-relationshipcodes.md) | DK Related Person Relationship Codes |
| [DK Request Status](CodeSystem-request-status-dk-supplement.md) | Codes identifying the stage lifecycle stage of a request |
| [DK Role Code](CodeSystem-role-code-dk-supplement.md) | CodeSystem supplement with danish translations for RoleCode |
| [DK v2 Contact Role Supplement](CodeSystem-v2-0131-supplement.md) | CodeSystem supplement with danish translations for Contact Role |
| [Nomenclature for Properties and Units (NPU) - Fragment for DK Core](CodeSystem-dk-npu-fragment.md) | Fragment of the NPU code system used in DK Core. The full version of NPU can be found at http://labterm.dk |

### Terminology: Naming Systems 

These define identifier and/or code system identities used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [cpr](NamingSystem-cpr.md) | The Danish civil registration system ("CPR") encompasses basic personal data about anyone with a civil registration number. A civil registration number shall be allocated to anyone who: 1) is registered in the national register in Denmark on the grounds of birth or relocation from abroad; 2) is included under Arbejdsmarkedets TillægsPension (ATP); 3) according to the tax authorities, is required to have a civil registration number for the purpose of tax processing in Denmark. |
| [sor](NamingSystem-sor.md) | SOR is provided by the Danish Health Data Authority under the Danish Ministry of Health. The register holds organizations within the Danish health sector, their geographical and virtual addresses as well as codes for their identification and for EDI-communication. Danish Health Data Authority is responsible for issuing and publishing codes to identify organizations across health care sectors and related public and private services. SOR includes organizational data on hospitals, the primary care sector (physiotherapists, general practitioners, dentists etc.) and municipal health service organizations as well as non-health care organizations that need to be able to receive data from the former. |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [A closed inpatient encounter](Encounter-915a3cfb-2f3e-477b-8a9d-5d86c30e4929.md) | Encounter happened on a surgery department on a hospital |
| [APD-DK DocumentReference instance of DkCoreMinimalDocumentReference.](DocumentReference-94e65db8-2f0c-4a2c-a7c9-06a160d59a12.md) | APD-DK DocumentReference instance of DkCoreMinimalDocumentReference, containing relevant metadata |
| [AbrahamLæge](Practitioner-AbrahamLaege.md) | Eksempel på lægen Abraham fra akutsygeplejen |
| [An open-ended (ongoing) inpatient encounter](Encounter-0c5e4905-5c2e-4254-8837-770c3724cd13.md) | Encounter is happening on a surgery department on a hospital |
| [Center for Diabetes](Organization-CenterForDiabetes.md) | Center for Diabetes |
| [Center for Diabetes Team Diabetes](Organization-CenterForDiabetesTeamDiabetes.md) | Center for Diabetes Team Diabetes |
| [Center for Diabetes Team Hjerte](Organization-CenterForDiabetesTeamHjerte.md) | Center for Diabetes Team Hjerte |
| [Center for Diabetes Team Kvalitet](Organization-CenterForDiabetesTeamKvalitet.md) | Center for Diabetes Team Kvalitet |
| [Coincident time stamp from Poul's home blood pressure measurement](Observation-CoincidentTimeStamp.0222.md) | A coincident time stamp observation is used to ensure and inspect the consistency of timelines when using battery-operated health devices having their own clock that may or may not be synchronized to local time - and may even travel with their owner across time zones. |
| [Else Graviditet](Condition-ElseGraviditet.md) | Else Graviditet, tilstandskode som indberettes ifm Elses ambulante forløb (fx jordemoder), og ved eventuel indlæggelse i graviditeten |
| [Else's TOBS measurements](Bundle-ElsesTOBS.md) | An example of TOBS (Danish: Tidlig opsporing af begyndende sygdom), which includes level of consciousness, heart rate, respiration rate, blood pressure and temperature. |
| [ElseBloodPressure](Observation-ElseBloodPressure.md) |  |
| [ElseBodyTemperature](Observation-ElseBodyTemperature.md) |  |
| [ElseConsciousness](Observation-ElseConsciousness.md) |  |
| [ElseHeartRate](Observation-ElseHeartRate.md) |  |
| [ElsePainVRS](Observation-ElsePainVRS.md) | Elses smerte målt med VRS |
| [ElseRespirationRate](Observation-ElseRespirationRate.md) |  |
| [ElseUrinStix](Observation-ElseUrinStix.md) |  |
| [ElsesTOBSscore](Observation-ElsesTOBSscore.md) |  |
| [Example hospital department](Organization-8510eec9-180b-4e9c-95b6-02fad9f853d3.md) | Example hospital department with the orthopedic surgery specialty |
| [Example hospital sub-department](Organization-19f9ee18-7677-4caf-88fe-8f6df2f2906e.md) | Example hospital sub-department with the orthopedic surgery specialty |
| [Example of a patient with confidential address and name](Patient-Confidential.md) | Example of a patient with confidential address and name |
| [Example of a related person with two relations](RelatedPerson-TwoRelations.md) | Example of a person that has relations as both neighbor and primary caretaker |
| [Example of a woman of childbearing age](Patient-else.md) | Example of a woman of childbearing age. Else is a MedCom test-patient |
| [Example of child as related person](RelatedPerson-Child.md) | Example of child as related person |
| [Example of valid patient unknown identifier registry](Patient-ukendt.md) | Example of valid patient unknown identifier registry. The patient is a 'John Doe' with an Identifier from an unofficial register |
| [Example of valid patient with a D-eCPR as identifier](Patient-ukendt-D-eCPR.md) | Example of valid patient with a D-eCPR as identifier. |
| [Example of valid patient with a X-eCPR as identifier](Patient-ukendt-X-eCPR.md) | Example of valid patient with a X-eCPR as identifier. |
| [Example of valid patient with danish marital status](Patient-Max.md) | Example of valid patient with danish marital status |
| [Example of valid patient with full address](Patient-283.md) | Example of valid patient with full address |
| [Example of valid patient with multiple names](Patient-john.md) | Example of valid patient with multiple names |
| [HanneSocialrådgiver](Practitioner-HanneSocialraadgiver.md) | Eksempel på socialrådgiveren Hanne |
| [Henvisning vedr. modermærkekræft](ServiceRequest-HenvisningFraLageTilSygehus.md) | Henvisning fra læge til sygehus vedr. mistanke om at John har modermærkekræft |
| [John diabetes](Condition-JohnDiabetes.md) | Johns diabetes-diagnose, udskrivningsdiagnose fra hospitalet fx til brug i indberetning og epikrise |
| [John fraktur](Condition-JohnFracture.md) | Johns fraktur-diagnose, udskrivningsdiagnose fra hospitalet med tillægskode |
| [John mistanke om Modermærkekræft](Condition-JohnMelanoma.md) | Johns mistanke om modermærkekræft i huden, kan fx bruges som henvisningsdiagnosese |
| [John pacemaker](Condition-JohnPacemaker.md) | Johns status efter pacemakeroperation, udtrykt semantisk korrekt med fund frem for operationskode |
| [John tryksår](Condition-ConditionPressureUlcer.md) | John, tryksår, kommunal tilstand |
| [John's Respiratory rate measurement (Basic observation)](Observation-ObservationRespiratoryBasicObservation.md) | A simple basic observation of a hyperventilating patient |
| [John's oxygen saturation measurement (Basic observation)](Observation-ObservationOxySatBasicObservationOrg.md) |  |
| [John's oxygen saturation measurement (Observation)](Observation-ObservationOxySatObservation.md) | This example suggests a way to handle the oxygen saturation case, where the original measurement was reported in '%' by a device or typed in manually, and then 'translated' to the NPU system, which requires the value to be unitless. |
| [LaegerneHasserisBymidte](Organization-LaegerneHasserisBymidte.md) | Praktisernede læge i Hasseris, som defineret af SOR |
| [Licensed physician in primary care](PractitionerRole-AbrahamPractitionerRole.md) | This is an example of PractitionerRole profile. The example describes the service which practitioner is performing in a specific location in a specific role. |
| [Max TOKS measurements, including Glasgow Coma Scale assesment](Bundle-MaxTOKS.md) | An example of TOBS (Danish: Tidlig opsporing af begyndende sygdom), which includes level of consciousness, heart rate, respiration rate, blood pressure and temperature. |
| [MaxBloodPressure](Observation-MaxBloodPressure.md) |  |
| [MaxBodyTemperature](Observation-MaxBodyTemperature.md) |  |
| [MaxConsciousness](Observation-MaxConsciousness.md) |  |
| [MaxGlasgowComaScale](Observation-MaxGlasgowComaScale.md) |  |
| [MaxHeartRate](Observation-MaxHeartRate.md) |  |
| [MaxRespirationRate](Observation-MaxRespirationRate.md) |  |
| [MaxSaturation](Observation-MaxSaturation.md) |  |
| [MaxVitalSignsPanel](Observation-MaxVitalSignsPanel.md) |  |
| [MedCom Test Organization](Organization-b08997bb-4476-4dd0-84dd-2e297f809364.md) | MedCom Test Organization with SOR id |
| [PLR-DK DocumentReference instance of DkCoreMinimalDocumentReference.](DocumentReference-94e65db8-2f0c-4a2c-a7c9-06a160d59a13.md) | PLR-DK DocumentReference instance of DkCoreMinimalDocumentReference, containing relevant metadata |
| [Placeholder for a physician](PractitionerRole-PlaceholderPractitionerRole.md) | This is an example of PractitionerRole where it acts as a placeholder for an unknown person. This may be useful in several scenarios. |
| [Poul Hansen](Patient-Poul.md) | A patient admitted to a remote monitoring programme, performing measurements at home. |
| [Poul's A&D blood pressure monitor](Device-BPMonitor.C4F312FFFE53F2C9.md) | This device is Poul's personal blood pressure monitor, which he keeps in the bedroom of his home, and uses for daily monitoring due to his CHF condition. |
| [Poul's A&D weight scale](Device-WeightScale.606405FFFECFC604.md) | This device is Poul's personal weighing scale, which he keeps in the bathroom of his home, and uses for daily monitoring due to his CHF condition. |
| [Poul's daily weighing on Feb. 21st](Observation-Weight.Poul.230221.md) | Poul has been instructed to perform a daily weighing in the morning. This is his daily weighing from Feb. 21st 2023. |
| [Poul's heart rate measurement](Observation-HeartRate.Poul.1974654.md) | Poul has been instructed to measure his blood pressure due to his CHF condition. This heart rate measurement was produced by his blood pressure monitor during one of these measurements. |
| [Poul's home blood pressure measurement](Bundle-ContinuaBundleWithDevice.md) | This example demonstrates a DkCoreObservation**and**Continua-compliant bundle containing a home blood pressure measurement uploaded to a Continua-compliant**"FHIR Observation Reporting Server".** |
| [Poul's remote patient monitoring app](Device-Telma.FEEDDADADEADBEEF.md) | Poul has been enrolled in a Remote Patient Monitoring programme in order to monitor the state of his CHF condition. This is the app he uses to report the data to his doctor. |
| [Producer Test Organization](Organization-154b8c96-a061-45bf-9ce4-1947c7c3c283.md) | Producer of Lab Results Test Organization |
| [Request for nursing care of John.](ServiceRequest-JohnsServiceRequest.md) | Request for nursing care of John. |
| [Request for nursing care of John.](ServiceRequest-MaxServiceRequest.md) | Request for nursing care of John. |
| [SidselSygeplejerske](Practitioner-SidselSygeplejerske.md) | Eksempel på en sygeplejerske |
| [XDS document bundled Author Organization](Organization-8fa7df76-bec2-4fe2-9a44-750030a0eda0.md) | Instance of a XDS document bundled author organization |
| [XDS document bundled Author Person](Practitioner-42cb9200-f421-4d08-8391-7d51a2503cb4.md) | Instance of a XDS document bundled author person |
| [XDS document bundled Source Patient](Patient-37628912-7816-47a3-acd8-396b610be142.md) | Instance of a XDS document bundled source patient |
| [ambulance](Location-ambulance.md) | Ambulance provided by Acme Corp |
| [neuroradiologyUnit](Location-neuroradiologyUnit.md) |  |

### Other 

These are resources that are used within this implementation guide that do not fit into one of the other categories.

| | |
| :--- | :--- |
| [expParam](Parameters-expParam.md) | SNOMED CT expansion parameter |

