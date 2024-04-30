# FHIR implementations in Denmark
There are many FHIR enabled systems and applications in Denmark. In the following, some of these are listed to show where FHIR is being used. The list is far from complete, as new project and systems constantly starts using FHIR. Hopefully, it can inspire people not very familiar with the use of FHIR in Danish health-IT. The list is organized by the systems using DK Core at first, followed by the systems not using DK Core. 

## Applications using DK Core
### FUT - Common Support for Telemedicine (DK: Fælles Udvikling af Telemedicin)
[FUT](https://docs.ehealth.sundhed.dk/latest/ig/index.html) is a national infrastructure implemented mainly to support exchange of patient reported information from citizens at home with a disease, e.g. severe chronic obstructive pulmonary, to the healthcare professionals. The infrastructure is mainly used by the Danish regions and municipalities. Data is structured using FHIR profiles and where possible the profiles are based on profiles in DK Core. 
FUT is developed by Systematic and Trifork and is administered by Region Midt. 

### KLGateway 
[KLGateway](https://fhir.kl.dk/gateway/index.html), which is an add-on to the FUT infrastructure, is implemented to support reporting from the 98 Danish municipalities. The reporting is for secondary use, such as statistics and management information, which can be used to improve elderly- and childcare across the municipalities. The reporting information is transferred using FHIR profiles, and they do inherit from DK Core. 
The Danish Local Government Association (DK: Kommunernes Landsforening) is responsible for the solution.

### MedCom Communication
Since the late 1990'ies, MedCom has standardized the way data is exchanged between parties within Danish healthcare. MedCom has now begun a modernization of the old standards to improve new business requires. This modernization further involves using FHIR to specify the content in the standards. Currently, this has resulted in three FHIR standards with more to come. These three standards are based on FHIRs messaging paradigm and are being implemented by vendors. [MedCom's FHIR-standards](https://medcomdk.github.io/MedComLandingPage/) are a further profiling of DK Core. 


## Applications not using DK Core
### Prehospital journal
[Dedalus' Pre-hospital Record](https://www.dedalus.com/ne/da/our-offer/products/amphi-praehospital/) is the national pre-hospital patient record (PPR) in Denmark, in which doctors, paramedics, ambulance rescuers and other pre-hospital staff can document information about the patient, the patient's condition and treatment given at the scene of accident, in the ambulance or the medical helicopter. Information registered in PPR is transferred from the tablet in the ambulance to the receiving hospital's emergency room and the clinicians. The data is exchanged using the RESTful interface and FHIR profiles, used to support real-time exchange of events. The profiles do not inherit from DK Core but are highly inspired hereby. 

### Bed-side application 
Bed-side application (BSA) for colorectal cancer is developed by Center for Surgical Science in Region Zealand and DTU. The BSA includes an AI-model to assess risks of readmission, complications and mortality and is trained on data from Danish registries. FHIR API's are used to get data from the hospital's electronic patient record into the BSA, to create an individual risk profile for the patient. The BSA does not use profiles from DK Core. 

### Bookplan
[Bookplan](https://www.capgemini.com/dk-en/services/digital-sundhed/), developed by Capgemini, is a booking system and overview of appointment for healthcare professionals, and it further has a user interface for patients and relatives. Bookplan is used in three of the five Danish regions to make appointments at hospitals. It has a FHIR-based integration for several external systems, where approximately 20 FHIR profiles are used. However, none of the profiles inherits from DK Core, as DK Core wasn't established at the time Bookplan was developed.

### Columna CIS and Columna Cura
[Columna CIS](https://systematic.com/da-dk/brancher/healthcare/hospital/columna-cis/) and [Columna Cura](https://systematic.com/da-dk/brancher/healthcare/kommune/columna-cura/) are electronic patient records used at hospitals and in municipalities, respectively. The systems are developed by Systematic and support the daily work for many healthcare professionals. They use different versions of FHIR and RESTful, and do not inherit from DK Core. 

### QuestionAid
[QuestionAid](https://trifork.com/?cases=quality-reporting-platform-providing-security-quality-and-process-optimization) is a questionnaire solution provided to support clinical reporting. The solution is a part of the Danish Region's Clinical Quality Development Program, called RKKP (DK: Regionernes Kliniske Kvalitetsudviklingsprogram) and is developed by Trifork. QuestionAid prefills questionnaires with all available information from national and local registers. FHIR is used as a data model to gather the information such as diagnosis, medicine, and generally available and relevant patient information, which makes it easier for the practitioners to fill out the rest.

### Sundhedsplatformen
Epic is the integrated electronic health system used by all hospitals in the Capital Region and Region Sjaelland in Denmark. Epic is a global implementer and contributor to global interoperability standards with production support for a broad range of FHIR functionality such as SMART on FHIR, FHIR's International Patient Access, HL7 CDS Hooks, HL7 FHIRcast. Specifically in Denmark, Epic is working closely with MedCom to support MedCom’s FHIR standards based on DK Core. Details of Epic's support of FHIR, including specifications and a testing sandbox, are publicly available at [OPEN Epic](https://open.epic.com).

*Consent to share information about the applications is given by the owners.*
