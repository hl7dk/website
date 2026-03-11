# Artifacts Summary - HL7 FHIR Implementation Guide: DK Core v3.6.0

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
| [Danish Central Business Register (CVR) Identifier](StructureDefinition-dk-core-cvr-identifier.md) | Identifier holding a danish [CVR](https://datacvr.virk.dk/data/) number. |
| [Danish Central Person Register (CPR) Identifier](StructureDefinition-dk-core-cpr-identifier.md) | This structure holds the danish [CPR](https://cpr.dk/) identifier |
| [Danish Health Professionals Authorization Identifier](StructureDefinition-dk-core-authorization-identifier.md) | Identifier holding the official [authorization identifier](https://en.stps.dk/en/health-professionals-and-authorities/online-register-registered-health-professionals/) for a practitioner. |
| [Decentralised eCPR, called D-eCPR](StructureDefinition-dk-core-d-ecpr-identifier.md) | This strucure holds the danish [D-eCPR](https://www.nspop.dk/pages/viewpage.action?pageId=226757583#eCPRFormater(XeCPRogDeCPR)-Formatetfordecentraleerstatningspersonnumre-D-eCPR) identifier, which is often used by the Danish regions. |
| [GLN Identifier](StructureDefinition-dk-core-gln-identifier.md) | Identifier holding a 13 digit GLN |
| [Kombit Organsation Identifier](StructureDefinition-dk-core-kombit-org-identifier.md) | Identifier holding the organization code issued by KOMBIT |
| [National eCPR service, called X-eCPR](StructureDefinition-dk-core-x-ecpr-identifier.md) | This strucure holds the danish [X-eCPR](https://www.nspop.dk/pages/viewpage.action?pageId=226757583#eCPRFormater(XeCPRogDeCPR)-Formatetfornationaleerstatningspersonnumre-X-eCPR) identifier, maintained by the Danish Health Data Authority. |
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
| [DK Address Type Supplement](CodeSystem-address-type-dk-supplement.md) | The type of an address (physical / postal) |
| [DK Address Use Supplement](CodeSystem-address-use-dk-supplement.md) | The use of an address |
| [DK Administrative Gender Supplement](CodeSystem-administrative-gender-supplement.md) | CodeSystem supplement with danish translations for administrative gender |
| [DK CareTeam Status Supplement](CodeSystem-care-team-status-dk-supplement.md) | Indicates the status of the care team. |
| [DK Consent State Supplement](CodeSystem-consent-state-codes-dk-supplement.md) | Indicates the state of the consent |
| [DK Days Of Week Supplement](CodeSystem-days-of-week-dk-supplement.md) | The days of the week. |
| [DK Decentralised eCPR Systems](CodeSystem-dk-core-d-ecpr-codes.md) | DK |
| [DK Episode Of Care Status Supplement](CodeSystem-episode-of-care-status-dk-supplement.md) | The status of the episode of care. |
| [DK Greenland Municipality Codes](CodeSystem-dk-core-municipality-codes-greenland.md) | Greenland municipality codes as defined by https://www.iso.org/obp/ui/#iso:code:3166:GL and https://cpr.dk/cpr-systemet/kommunesammenlaegninger-opdeling/groenland-2018/ |
| [DK Marital Statuses](CodeSystem-dk-marital-status.md) | DK marital statuses |
| [DK Municipality Codes](CodeSystem-dk-core-municipality-codes.md) | Municipality codes as defined by https://danmarksadresser.dk/adressedata/kodelister/kommunekodeliste/ and https://sundhedsdatastyrelsen.dk/-/media/sds/filer/rammer-og-retningslinjer/patientregistrering/relaterede/kommuneklassifikation.pdf |
| [DK Profession Group Codes](CodeSystem-DkCoreProfessionGroupCodes.md) | DK health ProfessionGroup codes as defined by https://www.retsinformation.dk/eli/lta/2019/731, and derived from http://autregwebservice.sst.dk/autregservice.asmx/GetAllProfessionGroups. Code (5176) was not uniqe, and have been converted to 5176a and 5176b |
| [DK Publication Status Supplement](CodeSystem-publication-status-dk-supplement.md) | The lifecycle status of a Value Set or Concept Map. |
| [DK Regional Subdivision Codes](CodeSystem-dk-core-regional-subdivision-codes.md) | Subdivision codes (Regional codes) used in Denmark as found on https://www.iso.org/obp/ui/#iso:code:3166:DK |
| [DK Related Person Relationship Codes](CodeSystem-dk-relatedperson-relationshipcodes.md) | DK Related Person Relationship Codes |
| [DK Request Status Supplement](CodeSystem-request-status-dk-supplement.md) | Codes identifying the stage lifecycle stage of a request |
| [DK Role Code Supplement](CodeSystem-role-code-dk-supplement.md) | CodeSystem supplement with danish translations for RoleCode |
| [DK v2 Contact Role Supplement](CodeSystem-v2-0131-supplement.md) | CodeSystem supplement with danish translations for Contact Role |

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
| [Ali Test Jensen - søn af Anders](Patient-AliJensen.md) | Ali Test Jensen - Søn af Anders Jensen |
| [An open-ended (ongoing) inpatient encounter](Encounter-0c5e4905-5c2e-4254-8837-770c3724cd13.md) | Encounter is happening on a surgery department on a hospital |
| [Anders Test Jensen - far til Ali](Patient-AndersJensen.md) | Anders Test Jensen - Far til Ali Jensen |
| [Anders som far til Ali](RelatedPerson-AndersRelatedToAli.md) | Anders er far til Ali |
| [Aya Test Berggren - datter af Kirsten](Patient-AyaBerggren.md) | Aya Test Berggren - Datter af Kirsten Berggren |
| [Berggren familien](Group-BerggrenFamily.md) | Familiegruppe: Nancy Ann Berggren med far Åge, bror Bruno, børn Max, Ruddi, Kirsten, Brita og børnebørn Pia, Gitte, Lars, Rikke, Aya |
| [Bo Test Vestergaard](Patient-BoVestergaard.md) | Bo Test Vestergaard - testpatient |
| [Brita Test Berggren - datter af Nancy](Patient-BritaBerggren.md) | Brita Test Berggren - Datter af Nancy. Værge: Nancy |
| [Bruno Test Elmer - bror til Nancy](Patient-Bruno.md) | Bruno Test Elmer - Bror til Nancy |
| [Bruno som bror til Nancy](RelatedPerson-BrunoRelatedToNancy.md) | Bruno er bror til Nancy |
| [Center for Diabetes](Organization-CenterForDiabetes.md) | Center for Diabetes |
| [Center for Diabetes Team Diabetes](Organization-CenterForDiabetesTeamDiabetes.md) | Center for Diabetes Team Diabetes |
| [Center for Diabetes Team Hjerte](Organization-CenterForDiabetesTeamHjerte.md) | Center for Diabetes Team Hjerte |
| [Center for Diabetes Team Kvalitet](Organization-CenterForDiabetesTeamKvalitet.md) | Center for Diabetes Team Kvalitet |
| [Coincident time stamp from Poul's home blood pressure measurement](Observation-CoincidentTimeStamp.0222.md) | A coincident time stamp observation is used to ensure and inspect the consistency of timelines when using battery-operated health devices having their own clock that may or may not be synchronized to local time - and may even travel with their owner across time zones. |
| [Cæsar Test Østergård - markeret som afdød](Patient-CaesarOestergaard.md) | Cæsar Test Østergård - Markeret som 'Afdød' på nspop DTG service |
| [DK CVR Organization instance of DkCoreOrganization](Organization-dk-core-organization-1.md) | Sample of DK organization |
| [Dreng Test Levendefødt (2016) - tvilling](Patient-DrengLevendefodt2016.md) | Dreng Test Levendefødt født 2016 - Tvilling |
| [Dreng Test Levendefødt (2024) - tvilling](Patient-DrengLevendefodt2024.md) | Dreng Test Levendefødt født 2024 - Tvilling |
| [EK Test Lauridsen - trilling med Ellen & Else](Patient-EK.md) | EK Test Lauridsen - Søn af Lonni & Einer Lauridsen. Trilling med Ellen & Else |
| [Einer Test Lauridsen - far i Lauridsen familien](Patient-Einer.md) | Einer Test Lauridsen - Gift med Lonni. Tvillinger Magnus & Rasmus, Trillinger Else & Ellen & EK |
| [Einer som far til EK](RelatedPerson-EinerRelatedToEK.md) | Einer er far til EK |
| [Einer som far til Ellen](RelatedPerson-EinerRelatedToEllen.md) | Einer er far til Ellen Louise |
| [Einer som far til Else](RelatedPerson-EinerRelatedToElse.md) | Einer er far til Else |
| [Einer som far til Magnus](RelatedPerson-EinerRelatedToMagnus.md) | Einer er far til Magnus |
| [Einer som far til Rasmus](RelatedPerson-EinerRelatedToRasmus.md) | Einer er far til Rasmus |
| [Ellen Louise Test Lauridsen - trilling med EK & Else](Patient-EllenLouise.md) | Ellen Louise Test Lauridsen - Datter af Lonni & Einer Lauridsen. Trilling med EK & Else |
| [Else Graviditet](Condition-ElseGraviditet.md) | Else Graviditet, tilstandskode som indberettes ifm Elses ambulante forløb (fx jordemoder), og ved eventuel indlæggelse i graviditeten |
| [Else Test Lauridsen - trilling med EK & Ellen](Patient-ElseLauridsen.md) | Else Test Lauridsen - Datter af Lonni & Einer Lauridsen. Trilling med EK & Ellen |
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
| [Gitte Nancy Test Berggren - datter af Kirsten](Patient-GitteNancy.md) | Gitte Nancy Test Berggren - Datter af Kirsten Berggren, Nancys yndlingsbarnebarn |
| [HanneSocialrådgiver](Practitioner-HanneSocialraadgiver.md) | Eksempel på socialrådgiveren Hanne |
| [Henvisning vedr. modermærkekræft](ServiceRequest-HenvisningFraLageTilSygehus.md) | Henvisning fra læge til sygehus vedr. mistanke om at John har modermærkekræft |
| [Jensen familien](Group-JensenFamily.md) | Familiegruppe: Anders Jensen og hans søn Ali |
| [John diabetes](Condition-JohnDiabetes.md) | Johns diabetes-diagnose, udskrivningsdiagnose fra hospitalet fx til brug i indberetning og epikrise |
| [John fraktur](Condition-JohnFracture.md) | Johns fraktur-diagnose, udskrivningsdiagnose fra hospitalet med tillægskode |
| [John mistanke om Modermærkekræft](Condition-JohnMelanoma.md) | Johns mistanke om modermærkekræft i huden, kan fx bruges som henvisningsdiagnosese |
| [John pacemaker](Condition-JohnPacemaker.md) | Johns status efter pacemakeroperation, udtrykt semantisk korrekt med fund frem for operationskode |
| [John tryksår](Condition-ConditionPressureUlcer.md) | John, tryksår, kommunal tilstand |
| [John's Respiratory rate measurement (Basic observation)](Observation-ObservationRespiratoryBasicObservation.md) | A simple basic observation of a hyperventilating patient |
| [John's oxygen saturation measurement (Basic observation)](Observation-ObservationOxySatBasicObservationOrg.md) |  |
| [John's oxygen saturation measurement (Observation)](Observation-ObservationOxySatObservation.md) | This example suggests a way to handle the oxygen saturation case, where the original measurement was reported in '%' by a device or typed in manually, and then 'translated' to the NPU system, which requires the value to be unitless. |
| [Juliane Test Jørgensen](Patient-JulianeJoergensen.md) | Juliane Test Jørgensen - testpatient |
| [Kaja Test Hansen](Patient-KajaHansen.md) | Kaja Test Hansen - testpatient |
| [Kirsten Test Berggren - datter af Nancy](Patient-KirstenBerggren.md) | Kirsten Test Berggren - Datter af Nancy. Datter Aya. |
| [Kirsten som mor til Aya](RelatedPerson-KirstenRelatedToAya.md) | Kirsten er mor til Aya |
| [Kirsten som mor til Gitte](RelatedPerson-KirstenRelatedToGitte.md) | Kirsten er mor til Gitte Nancy |
| [Kirsten som mor til Lars](RelatedPerson-KirstenRelatedToLars.md) | Kirsten er mor til Lars |
| [Kirsten som mor til Pia](RelatedPerson-KirstenRelatedToPia.md) | Kirsten er mor til Pia |
| [Kirsten som mor til Rikke](RelatedPerson-KirstenRelatedToRikke.md) | Kirsten er mor til Rikke |
| [Knut Odvar Test Mosebryggersen](Patient-KnutOdvar.md) | Knut Odvar Test Mosebryggersen - Søn af May June Moberg & Schwendlund Mosebryggersen |
| [LaegerneHasserisBymidte](Organization-LaegerneHasserisBymidte.md) | Praktisernede læge i Hasseris, som defineret af SOR |
| [Lars Test Berggren - søn af Kirsten](Patient-LarsBerggren.md) | Lars Test Berggren - Søn af Kirsten Berggren |
| [Lauridsen familien](Group-LauridsenFamily.md) | Familiegruppe: Einer og Lonni Lauridsen med deres børn - tvillingerne Magnus & Rasmus og trillingerne Else, Ellen & EK |
| [Levendefødt tvillinger 2016](Group-LevendefodtTwins2016.md) | Familiegruppe: Tvillinger født 2016 |
| [Levendefødt tvillinger 2024](Group-LevendefodtTwins2024.md) | Familiegruppe: Tvillinger født 2024 |
| [Licensed physician in primary care](PractitionerRole-AbrahamPractitionerRole.md) | This is an example of PractitionerRole profile. The example describes the service which practitioner is performing in a specific location in a specific role. |
| [Lonni Test Lauridsen - mor i Lauridsen familien](Patient-Lonni.md) | Lonni Test Lauridsen - Gift med Einer. Tvillinger Magnus & Rasmus, Trillinger Else & Ellen & EK |
| [Lonni som mor til EK](RelatedPerson-LonniRelatedToEK.md) | Lonni er mor til EK |
| [Lonni som mor til Ellen](RelatedPerson-LonniRelatedToEllen.md) | Lonni er mor til Ellen Louise |
| [Lonni som mor til Else](RelatedPerson-LonniRelatedToElse.md) | Lonni er mor til Else |
| [Lonni som mor til Magnus](RelatedPerson-LonniRelatedToMagnus.md) | Lonni er mor til Magnus |
| [Lonni som mor til Rasmus](RelatedPerson-LonniRelatedToRasmus.md) | Lonni er mor til Rasmus |
| [Lonni som ægtefælle til Einer](RelatedPerson-LonniRelatedToEiner.md) | Lonni er gift med Einer |
| [Magnus Test Lauridsen - tvilling med Rasmus](Patient-Magnus.md) | Magnus Test Lauridsen - Søn af Lonni & Einer Lauridsen. Tvilling med Rasmus |
| [Max TOKS measurements, including Glasgow Coma Scale assesment](Bundle-MaxTOKS.md) | An example of TOBS (Danish: Tidlig opsporing af begyndende sygdom), which includes level of consciousness, heart rate, respiration rate, blood pressure and temperature. |
| [Max Test Berggren - søn af Nancy](Patient-MaxBerggren.md) | Max Test Berggren - Søn af Nancy |
| [MaxBloodPressure](Observation-MaxBloodPressure.md) |  |
| [MaxBodyTemperature](Observation-MaxBodyTemperature.md) |  |
| [MaxConsciousness](Observation-MaxConsciousness.md) |  |
| [MaxGlasgowComaScale](Observation-MaxGlasgowComaScale.md) |  |
| [MaxHeartRate](Observation-MaxHeartRate.md) |  |
| [MaxRespirationRate](Observation-MaxRespirationRate.md) |  |
| [MaxSaturation](Observation-MaxSaturation.md) |  |
| [MaxVitalSignsPanel](Observation-MaxVitalSignsPanel.md) |  |
| [May June Test Moberg - mor i Mosebryggersen familien](Patient-MayJune.md) | May June Test Moberg - Gift med Schwendlund Mosebryggersen. Sønnerne Odd & Knut, Datteren Sille, Tvillingerne Sverre & Torre |
| [May June som mor til Knut](RelatedPerson-MayJuneRelatedToKnut.md) | May June er mor til Knut Odvar |
| [May June som mor til Odd](RelatedPerson-MayJuneRelatedToOdd.md) | May June er mor til Odd Haugen |
| [May June som mor til Sille](RelatedPerson-MayJuneRelatedToSille.md) | May June er mor til Sille June |
| [May June som mor til Sverre](RelatedPerson-MayJuneRelatedToSverre.md) | May June er mor til Sverre |
| [May June som mor til Torre](RelatedPerson-MayJuneRelatedToTorre.md) | May June er mor til Torre |
| [May June som værge for Sverre](RelatedPerson-MayJuneGuardianOfSverre.md) | May June er værge for Sverre |
| [May June som værge for Torre](RelatedPerson-MayJuneGuardianOfTorre.md) | May June er værge for Torre |
| [May June som ægtefælle til Schwendlund](RelatedPerson-MayJuneRelatedToSchwendlund.md) | May June er gift med Schwendlund |
| [MedCom Test Organization](Organization-b08997bb-4476-4dd0-84dd-2e297f809364.md) | MedCom Test Organization with SOR id |
| [Mosebryggersen familien](Group-MosebryggerssenFamily.md) | Familiegruppe: Schwendlund og May June med deres børn - Odd, Knut, Sille og tvillingerne Sverre & Torre |
| [Muhammed Test Abdul](Patient-MuhammedAbdul.md) | Muhammed Test Abdul - testpatient |
| [Nancy Ann Test Berggren - bedstemor i Berggren familien](Patient-NancyAnn.md) | Nancy Ann Test Berggren - Sønnerne Max og Ruddi. Døtrene Kirsten og Britta. |
| [Nancy som bedstemor til Gitte](RelatedPerson-NancyRelatedToGitte.md) | Nancy er bedstemor til Gitte (Nancys yndlingsbarnebarn) |
| [Nancy som mor til Brita](RelatedPerson-NancyRelatedToBrita.md) | Nancy er mor til Brita |
| [Nancy som mor til Kirsten](RelatedPerson-NancyRelatedToKirsten.md) | Nancy er mor til Kirsten |
| [Nancy som mor til Max](RelatedPerson-NancyRelatedToMax.md) | Nancy er mor til Max |
| [Nancy som mor til Ruddi](RelatedPerson-NancyRelatedToRuddi.md) | Nancy er mor til Ruddi |
| [Nancy som værge for Brita](RelatedPerson-NancyGuardianOfBrita.md) | Nancy er værge for Brita |
| [Nancy som værge for Åge](RelatedPerson-NancyGuardianOfAage.md) | Nancy er værge for Åge |
| [Niels Test Vendelboe](Patient-NielsVendelboe.md) | Niels Test Vendelboe - testpatient |
| [Odd Haugen Test Mosebryggersen](Patient-OddHaugen.md) | Odd Haugen Test Mosebryggersen - Søn af May June Moberg & Schwendlund Mosebryggersen |
| [PLR-DK DocumentReference instance of DkCoreMinimalDocumentReference.](DocumentReference-94e65db8-2f0c-4a2c-a7c9-06a160d59a13.md) | PLR-DK DocumentReference instance of DkCoreMinimalDocumentReference, containing relevant metadata |
| [Pia Test Berggren - datter af Kirsten](Patient-PiaBerggren.md) | Pia Test Berggren - Datter af Kirsten Berggren |
| [Pige Test Levendefødt (2016) - tvilling](Patient-PigeLevendefodt2016.md) | Pige Test Levendefødt født 2016 - Tvilling |
| [Pige Test Levendefødt (2024) - tvilling](Patient-PigeLevendefodt2024.md) | Pige Test Levendefødt født 2024 - Tvilling |
| [Placeholder for a physician](PractitionerRole-PlaceholderPractitionerRole.md) | This is an example of PractitionerRole where it acts as a placeholder for an unknown person. This may be useful in several scenarios. |
| [Poul Hansen](Patient-Poul.md) | A patient admitted to a remote monitoring programme, performing measurements at home. |
| [Poul's A&D blood pressure monitor](Device-BPMonitor.C4F312FFFE53F2C9.md) | This device is Poul's personal blood pressure monitor, which he keeps in the bedroom of his home, and uses for daily monitoring due to his CHF condition. |
| [Poul's A&D weight scale](Device-WeightScale.606405FFFECFC604.md) | This device is Poul's personal weighing scale, which he keeps in the bathroom of his home, and uses for daily monitoring due to his CHF condition. |
| [Poul's daily weighing on Feb. 21st](Observation-Weight.Poul.230221.md) | Poul has been instructed to perform a daily weighing in the morning. This is his daily weighing from Feb. 21st 2023. |
| [Poul's heart rate measurement](Observation-HeartRate.Poul.1974654.md) | Poul has been instructed to measure his blood pressure due to his CHF condition. This heart rate measurement was produced by his blood pressure monitor during one of these measurements. |
| [Poul's home blood pressure measurement](Bundle-ContinuaBundleWithDevice.md) | This example demonstrates a DkCoreObservation **and** Continua-compliant bundle containing a home blood pressure measurement uploaded to a Continua-compliant **"FHIR Observation Reporting Server".** |
| [Poul's remote patient monitoring app](Device-Telma.FEEDDADADEADBEEF.md) | Poul has been enrolled in a Remote Patient Monitoring programme in order to monitor the state of his CHF condition. This is the app he uses to report the data to his doctor. |
| [Producer Test Organization](Organization-154b8c96-a061-45bf-9ce4-1947c7c3c283.md) | Producer of Lab Results Test Organization |
| [Rasmus Test Lauridsen - tvilling med Magnus](Patient-Rasmus.md) | Rasmus Test Lauridsen - Søn af Lonni & Einer Lauridsen. Tvilling med Magnus |
| [Request for nursing care of John.](ServiceRequest-JohnsServiceRequest.md) | Request for nursing care of John. |
| [Request for nursing care of John.](ServiceRequest-MaxServiceRequest.md) | Request for nursing care of John. |
| [Rikke Test Berggren - datter af Kirsten](Patient-RikkeBerggren.md) | Rikke Test Berggren - Datter af Kirsten Berggren, Ruddi er værge for Rikke |
| [Ruddi Test Berggren - søn af Nancy](Patient-RuddiBerggren.md) | Ruddi Test Berggren - Søn af Nancy |
| [Ruddi som værge for Rikke](RelatedPerson-RuddiGuardianOfRikke.md) | Ruddi er værge for Rikke |
| [Schwendlund Test Mosebryggersen - far i Mosebryggersen familien](Patient-Schwendlund.md) | Schwendlund Test Mosebryggersen - Gift med May June Moberg. Sønnerne Odd & Knut, Datteren Sille, Tvillingerne Sverre & Torre |
| [Schwendlund som far til Knut](RelatedPerson-SchwendlundRelatedToKnut.md) | Schwendlund er far til Knut Odvar |
| [Schwendlund som far til Odd](RelatedPerson-SchwendlundRelatedToOdd.md) | Schwendlund er far til Odd Haugen |
| [Schwendlund som far til Sille](RelatedPerson-SchwendlundRelatedToSille.md) | Schwendlund er far til Sille June |
| [Schwendlund som far til Sverre](RelatedPerson-SchwendlundRelatedToSverre.md) | Schwendlund er far til Sverre |
| [Schwendlund som far til Torre](RelatedPerson-SchwendlundRelatedToTorre.md) | Schwendlund er far til Torre |
| [SidselSygeplejerske](Practitioner-SidselSygeplejerske.md) | Eksempel på en sygeplejerske |
| [Sille June Test Mosebrygersen](Patient-SilleJune.md) | Sille June Test Mosebrygersen - Datter af May June Moberg & Schwendlund Mosebryggersen |
| [Sverre Test Mosebryggersen - tvilling med Torre](Patient-Sverre.md) | Sverre Test Mosebryggersen - Søn af May June Moberg & Schwendlund Mosebryggersen. Tvilling med Torre. Værge: May June |
| [Torre Test Mosebryggersen - tvilling med Sverre](Patient-Torre.md) | Torre Test Mosebryggersen - Søn af May June Moberg & Schwendlund Mosebryggersen. Tvilling med Sverre. Værge: May June |
| [XDS document bundled Author Organization](Organization-8fa7df76-bec2-4fe2-9a44-750030a0eda0.md) | Instance of a XDS document bundled author organization |
| [XDS document bundled Author Person](Practitioner-42cb9200-f421-4d08-8391-7d51a2503cb4.md) | Instance of a XDS document bundled author person |
| [XDS document bundled Source Patient](Patient-37628912-7816-47a3-acd8-396b610be142.md) | Instance of a XDS document bundled source patient |
| [ambulance](Location-ambulance.md) | Ambulance provided by Acme Corp |
| [neuroradiologyUnit](Location-neuroradiologyUnit.md) |  |
| [Åge Test Berggren - far til Nancy](Patient-Aage.md) | Åge Test Berggren - Far til Nancy. Værge: Nancy |
| [Åge som far til Nancy](RelatedPerson-AageRelatedToNancy.md) | Åge er far til Nancy |

### Other 

These are resources that are used within this implementation guide that do not fit into one of the other categories.

| | |
| :--- | :--- |
| [expParam](Parameters-expParam.md) | SNOMED CT expansion parameter |

